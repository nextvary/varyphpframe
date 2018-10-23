<?php
namespace app\back\index\controllers;
use app\back\BackController;
use varywork\DB\DB;
use varywork\VaryWorkApp;

class IndexController extends BackController{
	public function index(VaryWorkApp $app,$request_url){
	    echo 1;
        return 'back';
    }

    public function test(){
    	$a=['2'=>'a','3'=>'b'];
    	$b=['4'=>'c','5'=>'d'];
    	var_dump(array_merge($a,$b));
    	
    }
    public function test2(){
    	$a='a'==0;
    	var_dump($a);
    }
}