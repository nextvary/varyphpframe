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

    public function test(){
    	$a=['2'=>'a','3'=>'b'];
    	$b=['4'=>'c','5'=>'d'];
    	var_dump(array_merge($a,$b));
    	
    }
    public function test2(){
    	$a='a'==0;
    	var_dump($a);
    }

    public function test3(){
    	var_dump(empty('a'));
    }

    public function test_sort(){
    	$a=['a'=>'a','b'=>'b',1=>'1','1'=>2,3=>1,2=>2];
    	var_dump($a);//1键名重复,替换前者的值
    	$d=$c=$b=$a;
    	sort($a);//按照值排序,不保留索引,字符1 在最前,其次字母,最后数字,升序
    	asort($b);//按照值排序保持索引
    	ksort($c);//根据键名排序,
    	krsort($d);//根据键名排序, 数字 > 字母 
    	var_dump($a,$b,$c,$d);

    }
    public function test_slice(){
    	$a=['a','a'=>'b','c','d'];
    	$b=array_slice($a, 1);
    	var_dump($a);
    	$c=array_splice($a, 1);
    	var_dump($a);
    	var_dump($b);
    	var_dump($c);
    }

    public function test_str(){
    	$str="9692677@72@qq.com";
    	echo strstr($str, '@');//@首次出现的位置之后,包括@
    	echo strchr($str,'@');	//strstr 别名
    	echo strrchr($str,'@');	//@最后出现位置之后

    	$a=substr_replace($str, '1', 1);
    	var_dump($a);
    	var_dump($str);
    }
}