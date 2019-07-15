<?php
/**
 * Created by PhpStorm.
 * User: charles
 * Date: 2019/7/15
 * Time: 上午11:12
 */

class RedisArray
{
    public function __call($function_name,$arguments){}
    public function __construct($name_or_hosts,$options){}
    public function _distributor(){}
    public function _function(){}
    public function _hosts(){}
    public function _instance($host){}
    public function _rehash($callable){}
    public function _target($key){}
    public function bgsave(){}
    public function del($keys){}
    public function discard(){}
    public function exec(){}
    public function flushall($async){}
    public function flushdb($async){}
    public function getOption($opt){}
    public function info(){}
    public function keys($pattern){}
    public function mget($keys){}
    public function mset($pairs){}
    public function multi($host,$mode){}
    public function ping(){}
    public function save(){}
    public function select($index){}
    public function setOption($opt,$value){}
    public function unlink(){}
    public function unwatch(){}
    public function delete($keys){}
    public function getMultiple($keys){}
}