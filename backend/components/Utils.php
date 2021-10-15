<?php

namespace yii\helpers;

use backend\models\AktJurnalUmumDetail;
use backend\models\MenuNavigasi;
use backend\models\MenuNavigasiRole;
use Yii;

class Utils

{
    public static function getDsnAttribute($name, $dsn)
    {
        if (preg_match('/' . $name . '=([^;]*)/', $dsn, $match)) {
            return $match[1];
        } else {
            return null;
        }
    }




    public static function RoleAccess()
    {
        // bahan
        $role = Yii::$app->db->createCommand("SELECT system_role.id_system_role FROM user_role INNER JOIN system_role ON system_role.id_system_role = user_role.id_system_role WHERE user_role.id_login = " . Yii::$app->user->id)->query();

        $id_role = '';
        foreach ($role as $role) {
            $id_role .= $role['id_system_role'] . ',';
        }
        $in_id_role = substr($id_role, 0, -1);
        $menu = Yii::$app->controller->id;

        $menu_navigasi = MenuNavigasi::find()->where(["url" => $menu])->one();

        $userAccess = MenuNavigasiRole::find()->where(["in", "id_system_role", $in_id_role])->andWhere(['id_menu' => $menu_navigasi->id_menu])->count();

        if ($userAccess < 1) {
            return Yii::$app->response->redirect(Url::to(['site/blocked']));
        }
    }
}
