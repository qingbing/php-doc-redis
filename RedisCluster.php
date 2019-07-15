<?php
/**
 * Created by PhpStorm.
 * User: charles
 * Date: 2019/7/15
 * Time: 上午11:13
 */

class RedisCluster
{
    const REDIS_NOT_FOUND = 0;
    const REDIS_STRING = 1;
    const REDIS_SET = 2;
    const REDIS_LIST = 3;
    const REDIS_ZSET = 4;
    const REDIS_HASH = 5;
    const ATOMIC = 0;
    const MULTI = 1;
    const OPT_SERIALIZER = 1;
    const OPT_PREFIX = 2;
    const OPT_READ_TIMEOUT = 3;
    const OPT_TCP_KEEPALIVE = 6;
    const OPT_COMPRESSION = 7;
    const SERIALIZER_NONE = 0;
    const SERIALIZER_PHP = 1;
    const COMPRESSION_NONE = 0;
    const OPT_SCAN = 4;
    const SCAN_RETRY = 1;
    const SCAN_NORETRY = 0;
    const OPT_SLAVE_FAILOVER = 5;
    const FAILOVER_NONE = 0;
    const FAILOVER_ERROR = 1;
    const FAILOVER_DISTRIBUTE = 2;
    const FAILOVER_DISTRIBUTE_SLAVES = 3;
    const AFTER = 'after';
    const BEFORE = 'before';
    public function __construct($name,$seeds,$timeout,$read_timeout,$persistent){}
    public function _masters(){}
    public function _prefix($key){}
    public function _redir(){}
    public function _serialize($value){}
    public function _unserialize($value){}
    public function append($key,$value){}
    public function bgrewriteaof($key_or_address){}
    public function bgsave($key_or_address){}
    public function bitcount($key){}
    public function bitop($operation,$ret_key,$key,$other_keys){}
    public function bitpos($key,$bit,$start,$end){}
    public function blpop($key,$timeout_or_key,$extra_args){}
    public function brpop($key,$timeout_or_key,$extra_args){}
    public function brpoplpush($src,$dst,$timeout){}
    public function clearlasterror(){}
    public function client($key_or_address,$arg,$other_args){}
    public function close(){}
    public function cluster($key_or_address,$arg,$other_args){}
    public function command($args){}
    public function config($key_or_address,$arg,$other_args){}
    public function dbsize($key_or_address){}
    public function decr($key){}
    public function decrby($key,$value){}
    public function del($key,$other_keys){}
    public function discard(){}
    public function dump($key){}
    public function echo($msg){}
    public function eval($script,$args,$num_keys){}
    public function evalsha($script_sha,$args,$num_keys){}
    public function exec(){}
    public function exists($key){}
    public function expire($key,$timeout){}
    public function expireat($key,$timestamp){}
    public function flushall($key_or_address,$async){}
    public function flushdb($key_or_address,$async){}
    public function geoadd($key,$lng,$lat,$member,$other_triples){}
    public function geodist($key,$src,$dst,$unit){}
    public function geohash($key,$member,$other_members){}
    public function geopos($key,$member,$other_members){}
    public function georadius($key,$lng,$lan,$radius,$unit,$opts){}
    public function georadiusbymember($key,$member,$radius,$unit,$opts){}
    public function get($key){}
    public function getbit($key,$offset){}
    public function getlasterror(){}
    public function getmode(){}
    public function getoption($option){}
    public function getrange($key,$start,$end){}
    public function getset($key,$value){}
    public function hdel($key,$member,$other_members){}
    public function hexists($key,$member){}
    public function hget($key,$member){}
    public function hgetall($key){}
    public function hincrby($key,$member,$value){}
    public function hincrbyfloat($key,$member,$value){}
    public function hkeys($key){}
    public function hlen($key){}
    public function hmget($key,$keys){}
    public function hmset($key,$pairs){}
    public function hscan($str_key,$i_iterator,$str_pattern,$i_count){}
    public function hset($key,$member,$value){}
    public function hsetnx($key,$member,$value){}
    public function hstrlen($key,$member){}
    public function hvals($key){}
    public function incr($key){}
    public function incrby($key,$value){}
    public function incrbyfloat($key,$value){}
    public function info($key_or_address,$option){}
    public function keys($pattern){}
    public function lastsave($key_or_address){}
    public function lget($key,$index){}
    public function lindex($key,$index){}
    public function linsert($key,$position,$pivot,$value){}
    public function llen($key){}
    public function lpop($key){}
    public function lpush($key,$value){}
    public function lpushx($key,$value){}
    public function lrange($key,$start,$end){}
    public function lrem($key,$value){}
    public function lset($key,$index,$value){}
    public function ltrim($key,$start,$stop){}
    public function mget($keys){}
    public function mset($pairs){}
    public function msetnx($pairs){}
    public function multi(){}
    public function object($field,$key){}
    public function persist($key){}
    public function pexpire($key,$timestamp){}
    public function pexpireat($key,$timestamp){}
    public function pfadd($key,$elements){}
    public function pfcount($key){}
    public function pfmerge($dstkey,$keys){}
    public function ping($key_or_address){}
    public function psetex($key,$expire,$value){}
    public function psubscribe($patterns){}
    public function pttl($key){}
    public function publish($channel,$message){}
    public function pubsub($key_or_address,$arg,$other_args){}
    public function punsubscribe($pattern,$other_patterns){}
    public function randomkey($key_or_address){}
    public function rawcommand($cmd,$args){}
    public function rename($key,$newkey){}
    public function renamenx($key,$newkey){}
    public function restore($ttl,$key,$value){}
    public function role(){}
    public function rpop($key){}
    public function rpoplpush($src,$dst){}
    public function rpush($key,$value){}
    public function rpushx($key,$value){}
    public function sadd($key,$value){}
    public function saddarray($key,$options){}
    public function save($key_or_address){}
    public function scan($i_iterator,$str_node,$str_pattern,$i_count){}
    public function scard($key){}
    public function script($key_or_address,$arg,$other_args){}
    public function sdiff($key,$other_keys){}
    public function sdiffstore($dst,$key,$other_keys){}
    public function set($key,$value,$opts){}
    public function setbit($key,$offset,$value){}
    public function setex($key,$expire,$value){}
    public function setnx($key,$value){}
    public function setoption($option,$value){}
    public function setrange($key,$offset,$value){}
    public function sinter($key,$other_keys){}
    public function sinterstore($dst,$key,$other_keys){}
    public function sismember($key,$value){}
    public function slowlog($key_or_address,$arg,$other_args){}
    public function smembers($key){}
    public function smove($src,$dst,$value){}
    public function sort($key,$options){}
    public function spop($key){}
    public function srandmember($key,$count){}
    public function srem($key,$value){}
    public function sscan($str_key,$i_iterator,$str_pattern,$i_count){}
    public function strlen($key){}
    public function subscribe($channels){}
    public function sunion($key,$other_keys){}
    public function sunionstore($dst,$key,$other_keys){}
    public function time(){}
    public function ttl($key){}
    public function type($key){}
    public function unsubscribe($channel,$other_channels){}
    public function unlink($key,$other_keys){}
    public function unwatch(){}
    public function watch($key,$other_keys){}
    public function xack($str_key,$str_group,$arr_ids){}
    public function xadd($str_key,$str_id,$arr_fields,$i_maxlen,$boo_approximate){}
    public function xclaim($str_key,$str_group,$str_consumer,$i_min_idle,$arr_ids,$arr_opts){}
    public function xdel($str_key,$arr_ids){}
    public function xgroup($str_operation,$str_key,$str_arg1,$str_arg2,$str_arg3){}
    public function xinfo($str_cmd,$str_key,$str_group){}
    public function xlen($key){}
    public function xpending($str_key,$str_group,$str_start,$str_end,$i_count,$str_consumer){}
    public function xrange($str_key,$str_start,$str_end,$i_count){}
    public function xread($arr_streams,$i_count,$i_block){}
    public function xreadgroup($str_group,$str_consumer,$arr_streams,$i_count,$i_block){}
    public function xrevrange($str_key,$str_start,$str_end,$i_count){}
    public function xtrim($str_key,$i_maxlen,$boo_approximate){}
    public function zadd($key,$score,$value){}
    public function zcard($key){}
    public function zcount($key,$min,$max){}
    public function zincrby($key,$value,$member){}
    public function zinterstore($key,$keys,$weights,$aggregate){}
    public function zlexcount($key,$min,$max){}
    public function zrange($key,$start,$end,$scores){}
    public function zrangebylex($key,$min,$max,$offset,$limit){}
    public function zrangebyscore($key,$start,$end,$options){}
    public function zrank($key,$member){}
    public function zrem($key,$member,$other_members){}
    public function zremrangebylex($key,$min,$max){}
    public function zremrangebyrank($key,$min,$max){}
    public function zremrangebyscore($key,$min,$max){}
    public function zrevrange($key,$start,$end,$scores){}
    public function zrevrangebylex($key,$min,$max,$offset,$limit){}
    public function zrevrangebyscore($key,$start,$end,$options){}
    public function zrevrank($key,$member){}
    public function zscan($str_key,$i_iterator,$str_pattern,$i_count){}
    public function zscore($key,$member){}
    public function zunionstore($key,$keys,$weights,$aggregate){}
}