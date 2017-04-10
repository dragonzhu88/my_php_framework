<?php

/**
 * Created by PhpStorm.
 * User: dragon
 * Date: 2017/4/8
 * Time: 18:14
 */
namespace app\controller;

class testController extends \core\z_frame
{
    public function index()
    {
       $data = 'hello';
       $this->assign('data',$data);
       $this->display('index.html');

    }
}