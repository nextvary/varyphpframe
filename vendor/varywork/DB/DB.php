<?php
/**
 * Created by vary.
 * User: ASUS80
 * Date: 2018/7/24
 * Time: 13:59
 */

namespace varywork\DB;


class DB
{
    private static $conn;
    private function __construct($config){
        $conn=mysqli_connect($config['host'],$config['username'],$config['password'],$config['database'],$config['port']);
        self::$conn=$conn;
    }
    public static function conn($config=''){
        if(!$config) $config=config('database.mysql');
        if(!self::$conn instanceof DB){
            new self($config);
        }
        return self::$conn;

    }
    public static function query($sql){
        $data=mysqli_query(self::conn(),$sql);
        while($row=mysqli_fetch_assoc($data)){
            $need[]=$row;
        }
        return $need??[];
    }

    public static function exec($sql){
        $conn=self::conn();
        if(mysqli_query($conn,$sql)){
            return mysqli_affected_rows($conn);
        }else{
            return 0;
        }
    }





    private function __clone(){

    }
}