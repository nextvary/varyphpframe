<?php
/**
 * Created by vary.
 * User: ASUS80
 * Date: 2018/7/24
 * Time: 15:03
 */

namespace app\front\sql\controllers;


use app\front\sql\models\AdminOperationLog;
use varywork\DB\DB;
use varywork\VaryWorkApp;

class IndexController
{
    public function index(VaryWorkApp $app,$request_url){
//	    var_dump($f,$request);
//		echo 'index/index/index';

        $data=DB::query('select * from auctions limit 2');
        var_dump($data);
//        $row=DB::exec('delete from admin_operation_log where id<10');
        $row=DB::exec('update  admin_operation_log set method="GET" where id=10');
        var_dump($row);
    }
    //laravel model
    public function model(){
        $data= AdminOperationLog::getLogs();
        var_dump($data);
    }

    public function redisSet($app){
        $redis=$app->redis();
        $bool=$redis->set('author','renfei');

        var_dump($bool);
    }
    public function redisGet($app){
        $redis=$app->redis();
        $data=$redis->get('author');
        var_dump($data);
    }

}