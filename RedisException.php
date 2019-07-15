<?php
/**
 * Created by PhpStorm.
 * User: charles
 * Date: 2019/7/15
 * Time: 上午11:14
 */

class RedisException extends Exception
{
    public function __construct($message,$code,$previous){}
    public function __wakeup(){}
}