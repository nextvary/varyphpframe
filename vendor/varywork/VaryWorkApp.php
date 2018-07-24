<?php
namespace varywork;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Predis\Client;
use varywork\DB\DB;

class VaryWorkApp{
    private static $app;
    public $f;
    public  static function app(){
        return self::$app;
    }
	public function __construct(){
        set_exception_handler(array($this, 'Exception'));
        set_error_handler(array($this, 'Error'));

	}

	public function getInstance($f='front'){

	    $request_url=trim($_SERVER['PATH_INFO']??'index/index/index','/');
        $request=explode('/',$request_url);
        $model=$request[0]??'index';
        $controller=$request[1]??'index';
        $action=$request[2]??'index';
        $class='app/'.$f.'/'.$model.'/controllers/'.ucwords($controller)."Controller";
        $class=str_replace('/','\\',$class);
        if(!class_exists($class)) throw new \Exception( ucwords($controller) .'  Class Not Exists!!!');

        $fun=[new $class,ucwords($action)];
        if(!method_exists(new $class,ucwords($action)) ) throw new \Exception('method:' .$action .' not found!!');
        $this->f=$f;
        $this->request_url=$request_url;
        $this->class=$class;
        self::$app=$this;
        call_user_func_array($fun,[$this,$request_url]);

    }


    public function getDB($params=''){
        $params=$params?:config('database.mysql');
        $data=DB::conn($params);
        return $data;

    }

    public function redis(){
        $config=config('database.redis');
        $redis=new Client($config);
        return $redis;
    }


    public function log($error){
        $log = new Logger('work');
        $log->pushHandler(new StreamHandler(storage_path().'work.log', Logger::WARNING));
        $log->pushProcessor(new \Monolog\Processor\WebProcessor());
        $log->error($error);
    }
	public function Error($errno, $errstr, $errfile, $errline){
        echo "<b>Error:</b> [$errno] $errstr  on line $errline in $errfile<br>";
        $this->log(json_encode([$errno,$errstr,$errline,$errfile],320));
        die();
    }
    public function Exception($ex){
        echo "Uncaught exception: " , $ex->getMessage(), "\n";
        $this->log($ex->getMessage());
        die();

    }
}