<?php
/**
 * Created by PhpStorm.
 * User: dragon
 * Date: 2017/4/8
 * Time: 15:20
 */

namespace core;

class z_frame{

    public static $classMap = [];
    public $assign = [];

    static public function run(){
        //加载路由
        $route = new \core\lib\route();

        //加载控制器
        $controllerClass = $route->controller;
        $action = $route->action;

        $controllerFile = APP.'/controller/'.$controllerClass.'Controller.php';
        $controllerClass = '\\app\controller\\'.$controllerClass.'Controller';

        if(is_file($controllerFile)){
            include $controllerFile;
            $controller = new $controllerClass();
            $controller->$action();

        }else{
            throw new \Exception('Can not find controller');
        }

    }

    static public function load($class){
        //自动加载类库
        //new \core\route();
        //$class = '\core\route';
        //Z_FRAME.'/core/route.php;

        if(isset($classMap[$class])){
            return true;
        }else{
            $class = str_replace('\\','/',$class);
            $file = Z_FRAME.'/'.$class.'.php';
          // echo $file;
            if($file){
                include $file;
                self::$classMap[$class] = $class;
            }else{
                return false;
            }
        }

    }

    public function assign($name,$data){
        $this->assign[$name] = $data;
    }

    public function display($file){
        $file = APP.'/views/'.$file;
        if(is_file($file)){
            extract($this->assign);
            include $file;
        }
    }

}