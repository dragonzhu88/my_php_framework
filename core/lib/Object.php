<?php
/**
 * Created by PhpStorm.
 * User: dragon
 * Date: 2017/5/4
 * Time: 14:38
 */

namespace core\lib;


class Object
{
    protected $array = [];
    protected static $obj;

    private function __construct()
    {
        echo "Object constructed";
    }

    static function getInstance(){
        if(self::$obj){
            return self::$obj;
        }else{
            self::$obj = new self();
            return self::$obj;
        }
    }


    public function __set($name, $value)
    {
        // TODO: Implement __set() method.
        var_dump(__METHOD__);
        $this->array[$name] = $value;

    }

    public function __get($name)
    {
        // TODO: Implement __get() method.
        var_dump(__METHOD__);
        return $this->array[$name];
    }

    public function __call($name, $arguments)
    {
        // TODO: Implement __call() method.
        var_dump($name,$arguments);
        return "magic function\n";
    }

    static function __callStatic($name, $arguments)
    {
        // TODO: Implement __callStatic() method.
        var_dump($name,$arguments);
        return "magic static function\n";
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return __CLASS__;

    }

    public function __invoke($param)
    {
        // TODO: Implement __invoke() method.
        var_dump($param);
        return "invoke";
    }
}