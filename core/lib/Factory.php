<?php
/**
 * Created by PhpStorm.
 * User: dragon
 * Date: 2017/5/5
 * Time: 18:36
 */

namespace core\lib;


class Factory
{
    static function createDataBase(){
        $obj = Object::getInstance();
        return $obj;
    }
}