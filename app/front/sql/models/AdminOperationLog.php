<?php
/**
 * Created by vary.
 * User: ASUS80
 * Date: 2018/7/24
 * Time: 15:42
 */

namespace app\front\sql\models;


use Illuminate\Database\Eloquent\Model;

class AdminOperationLog extends Model
{
    public  $timestamps=false;
    public $table='admin_operation_log';
    public static function getLogs(){
        $data=self::where(['id'=>10])->first();
        return $data;
    }
}