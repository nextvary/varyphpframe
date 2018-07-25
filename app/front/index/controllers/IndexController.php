<?php
namespace app\front\index\controllers;
use app\front\FrontController;
use varywork\DB\DB;
use varywork\VaryWorkApp;

class IndexController extends FrontController{
	public function index(VaryWorkApp $app,$request_url){
	    echo 1;
        return 'hello';
    }

}