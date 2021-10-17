<?php
namespace frontend\controllers;

// use frontend\models\ResendVerificationEmailForm;
// use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use frontend\models\LoginForm;
use frontend\models\Login;
// use frontend\models\PasswordResetRequestForm;
// use frontend\models\ResetPasswordForm;
use frontend\models\TblPelanggan;
use frontend\models\TblLapangan;
use frontend\models\TblLapanganDetail;
use frontend\models\TblOrder;
use frontend\models\Event;
use yii\helpers\Html;
// use frontend\models\ContactForm;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            // $model->password = '';

            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionLapangan()
    {
        return $this->render('lapangan');
    }

    public function actionDetailLapangan($id)
    {
        $model = TblLapangan::findOne($id);

        $photo = ($model->foto == '') ? Html::img(Yii::$app->urlManagerBackend->baseUrl.'/empty.jpg') : Html::img(Yii::$app->urlManagerBackend->baseUrl.'/'.$model->foto);

        return $this->render('detail-lapangan', [
            'model' => $model,
            'photo' => $photo,
        ]);
    }

    public function actionBooking($id_detail)
    {
        $model = TblLapanganDetail::findOne($id_detail);

        $karakter = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890';
        $shuffle  = 'KB-'. date('ymd') .'-'. substr(str_shuffle($karakter), 0, 7);
        // echo ORD.$shuffle;


        if (Yii::$app->request->get('action') == 'booking') {


            $tagihan = $model->lapangan->harga_sewa * Yii::$app->request->post('jam');
            // echo Yii::$app->user->id;; exit();

            $order = new TblOrder();

            $order->id_detail_lapangan = $id_detail;
            $order->user_id = Yii::$app->user->id;
            $order->kode = Yii::$app->request->post('kode');
            $order->nama = Yii::$app->request->post('name');
            $order->telp = Yii::$app->request->post('number');
            $order->jumlah_jam = Yii::$app->request->post('jam');
            $order->tgl_order = date('Y-m-d');
            $order->tgl_booking = Yii::$app->request->post('date');
            $order->time_start = Yii::$app->request->post('start');
            $order->time_end = Yii::$app->request->post('end');
            $order->total_bayar = $tagihan;
            $order->status = 'pending';
            $order->save(false);

            return $this->redirect(['site/daftar-booking']);

        }


        return $this->render('booking', [
            'model' => $model,
            'shuffle' => $shuffle,
        ]);
    }

    public function actionEvent()
    {

        $model = Event::find()->where(['status' => 'aktif'])->all();
        $count = Event::find()->where(['status' => 'aktif'])->count();

        return $this->render('event', [
            'model' => $model,
            'count' => $count,
        ]);
    }

    public function actionDaftarBooking()
    {
        $model = TblOrder::find()->where(['user_id' => Yii::$app->user->id])->all();
        $count = TblOrder::find()->where(['user_id' => Yii::$app->user->id])->count();

        // echo $count;

        return $this->render('daftar-booking', [
            'model' => $model,
            'count' => $count,
        ]);
    }

    public function actionSignup()
    {
        $model = new TblPelanggan();

            // echo var_dump(Yii::$app->request->post('name'));
            // echo var_dump(Yii::$app->request->post('number'));
            // echo var_dump(Yii::$app->request->post('password'));
            // echo var_dump(Yii::$app->request->post('alamat'));
            //  exit();
        if (Yii::$app->request->post('name') != '') {


            $model->nama = Yii::$app->request->post('name');
            $model->email = Yii::$app->request->post('email');
            $model->tanggal_daftar = date('Y-m-d');
            $model->alamat = Yii::$app->request->post('alamat');
            $model->no_hp = Yii::$app->request->post('number');
            $model->status = 1;
            $model->save(false);

            // // $newUser = DataUser::findOne();
            // // echo var_dump($model->user_id); exit();
            $newLogin = new Login();
            $newLogin->username = $model->email;
            $newLogin->password = md5(Yii::$app->request->post('password'));
            $newLogin->nama = $model->nama;
            $newLogin->user_id = $model->id;
            $newLogin->save(false);

            Yii::$app->session->setFlash('success', 'Terima kasih, Sekarang akun anda telah terdaftar. Anda dapat melakukan booking');
            Yii::$app->session->setFlash('success', 'Silahkan catat password anda,' . Yii::$app->request->post('password'));
            return $this->redirect(['site/login']);
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    // public function actionRequestPasswordReset()
    // {
    //     $model = new PasswordResetRequestForm();
    //     if ($model->load(Yii::$app->request->post()) && $model->validate()) {
    //         if ($model->sendEmail()) {
    //             Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

    //             return $this->goHome();
    //         } else {
    //             Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
    //         }
    //     }

    //     return $this->render('requestPasswordResetToken', [
    //         'model' => $model,
    //     ]);
    // }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    // public function actionResetPassword($token)
    // {
    //     try {
    //         $model = new ResetPasswordForm($token);
    //     } catch (InvalidArgumentException $e) {
    //         throw new BadRequestHttpException($e->getMessage());
    //     }

    //     if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
    //         Yii::$app->session->setFlash('success', 'New password saved.');

    //         return $this->goHome();
    //     }

    //     return $this->render('resetPassword', [
    //         'model' => $model,
    //     ]);
    // }

    /**
     * Verify email address
     *
     * @param string $token
     * @throws BadRequestHttpException
     * @return yii\web\Response
     */
    // public function actionVerifyEmail($token)
    // {
    //     try {
    //         $model = new VerifyEmailForm($token);
    //     } catch (InvalidArgumentException $e) {
    //         throw new BadRequestHttpException($e->getMessage());
    //     }
    //     if ($user = $model->verifyEmail()) {
    //         if (Yii::$app->user->login($user)) {
    //             Yii::$app->session->setFlash('success', 'Your email has been confirmed!');
    //             return $this->goHome();
    //         }
    //     }

    //     Yii::$app->session->setFlash('error', 'Sorry, we are unable to verify your account with provided token.');
    //     return $this->goHome();
    // }

    /**
     * Resend verification email
     *
     * @return mixed
     */
    // public function actionResendVerificationEmail()
    // {
    //     $model = new ResendVerificationEmailForm();
    //     if ($model->load(Yii::$app->request->post()) && $model->validate()) {
    //         if ($model->sendEmail()) {
    //             Yii::$app->session->setFlash('success', 'Check your email for further instructions.');
    //             return $this->goHome();
    //         }
    //         Yii::$app->session->setFlash('error', 'Sorry, we are unable to resend verification email for the provided email address.');
    //     }

    //     return $this->render('resendVerificationEmail', [
    //         'model' => $model
    //     ]);
    // }
}
