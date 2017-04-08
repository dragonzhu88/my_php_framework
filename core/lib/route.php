<?php
/**
 * Created by PhpStorm.
 * User: dragon
 * Date: 2017/4/8
 * Time: 15:35
 */

namespace core\lib;

class route
{

    public $controller;
    public $action;

    public function __construct()
    {
        //1.隐藏index.php
        //2.获取URL参数部分
        //3.返回对应控制器和方法
        $param = [];

        if (isset($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI'] != '/') {
            //index/index
            $path = $_SERVER['REQUEST_URI'];
            $pathArray = explode('/', trim($path, '/'));

            if (isset($pathArray[0])) {
                $this->controller = $pathArray[0];
                unset($pathArray[0]);
            }

            if (isset($pathArray[1])) {
                $this->action = $pathArray[1];
                unset($pathArray[1]);
            } else {
                $this->action = 'index';
            }

            p($pathArray);

            //url的多余部分，转换成参数
            $count = count($pathArray) + 2;
            $i = 2;
            while ($i < $count) {

                if(isset($pathArray[$i + 1])){
                    $param[$pathArray[$i]] = $pathArray[$i + 1];
                }

                $i += 2;
            }
            p($param);

        } else {
            $this->controller = 'index';
            $this->action = 'index';
        }

    }
}