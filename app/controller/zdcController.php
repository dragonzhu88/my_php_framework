<?php
/**
 * Created by PhpStorm.
 * User: dragon
 * Date: 2017/4/8
 * Time: 19:20
 */

namespace app\controller;


class zdcController
{
    public function testing(){
        $model = new \core\model\model();
        $sql = 'SELECT * FROM user';
        $ret = $model->query($sql);
        p($ret->fetchAll());
    }
}