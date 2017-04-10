<?php

/**
 * Created by PhpStorm.
 * User: dragon
 * Date: 2017/4/8
 * Time: 19:33
 */

namespace core\model;

class model extends \PDO
{
    public function __construct()
    {
        $dsn = "mysql:host=localhost;dbname=mysql_test";
        $username = 'root';
        $passwd = '111111';
        $options = null;

        try{
            parent::__construct($dsn, $username, $passwd, $options);
        }catch (\PDOException $e){
            p($e->getMessage());
        }

    }

}