<?php
/**
 * Created by PhpStorm.
 * User: dragon
 * Date: 2017/4/8
 * Time: 14:29
 * 入口文件
 * 1，定义常量
 * 2，加载函数库
 * 3，启动框架
 */

//定义函数库
define('Z_FRAME',realpath(''));
define('CORE',Z_FRAME.'/core');
define('APP',Z_FRAME.'app');

define('DEBUG',true);

if(DEBUG){
    ini_set('display_error','On');
}else{
    ini_set('display_error','Off');
}

//加载函数库
include CORE.'/common/function.php';
include CORE.'/z_frame.php';

spl_autoload_register('\core\z_frame::load');

//启动框架
\core\z_frame::run();
