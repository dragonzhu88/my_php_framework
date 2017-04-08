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

    static public function run(){
//        p('run');
        $route = new \core\lib\route();
        p($route);
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
//            p($file);
            if($file){
                include $file;
                self::$classMap[$class] = $class;
            }else{
                return false;
            }
        }

    }

}