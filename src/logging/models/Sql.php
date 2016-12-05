<?php
/**
 * Created by PhpStorm.
 * Author: Misha Serenkov
 * Email: mi.serenkov@gmail.com
 * Date: 03.12.2016 19:21
 */

namespace miserenkov\sms\logging\models;


use yii\db\ActiveRecord;

class Sql extends ActiveRecord
{
    public static $db;

    public function setDb($connection)
    {
        static::$db = $connection;
    }

    public static function getDb()
    {
        return static::$db;
    }
}