<?php
/**
 * Created by PhpStorm.
 * User: charles
 * Date: 2019/7/15
 * Time: 上午11:11
 */

class Redis
{
    const REDIS_NOT_FOUND = 0;
    const REDIS_STRING = 1;
    const REDIS_SET = 2;
    const REDIS_LIST = 3;
    const REDIS_ZSET = 4;
    const REDIS_HASH = 5;
    const PIPELINE = 2;
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
    const AFTER = 'after';
    const BEFORE = 'before';
    public function __construct(){}
    public function __destruct(){}
    public function _prefix($key){}
    public function _serialize($value){}
    public function _unserialize($value){}
    public function append($key,$value){}
    public function auth($password){}
    public function bgSave(){}
    public function bgrewriteaof(){}
    public function bitcount($key){}
    public function bitop($operation,$ret_key,$key,$other_keys){}
    public function bitpos($key,$bit,$start,$end){}
    public function blPop($key,$timeout_or_key,$extra_args){}
    public function brPop($key,$timeout_or_key,$extra_args){}
    public function brpoplpush($src,$dst,$timeout){}
    public function clearLastError(){}
    public function client($cmd,$args){}
    public function close(){}
    public function command($args){}
    public function config($cmd,$key,$value){}
    public function connect($host,$port,$timeout,$retry_interval){}
    public function dbSize(){}
    public function debug($key){}
    public function decr($key){}
    public function decrBy($key,$value){}
    public function delete($key,$other_keys){}
    public function discard(){}
    public function dump($key){}
    public function echo($msg){}
    public function eval($script,$args,$num_keys){}
    public function evalsha($script_sha,$args,$num_keys){}
    public function exec(){}
    public function exists($key,$other_keys){}
    public function expireAt($key,$timestamp){}
    public function flushAll($async){}
    public function flushDB($async){}
    public function geoadd($key,$lng,$lat,$member,$other_triples){}
    public function geodist($key,$src,$dst,$unit){}
    public function geohash($key,$member,$other_members){}
    public function geopos($key,$member,$other_members){}
    public function georadius($key,$lng,$lan,$radius,$unit,$opts){}
    public function georadiusbymember($key,$member,$radius,$unit,$opts){}
    public function get($key){}
    public function getAuth(){}
    public function getBit($key,$offset){}
    public function getDBNum(){}
    public function getHost(){}
    public function getKeys($pattern){}
    public function getLastError(){}
    public function getMode(){}
    public function getMultiple($keys){}
    public function getOption($option){}
    public function getPersistentID(){}
    public function getPort(){}
    public function getRange($key,$start,$end){}
    public function getReadTimeout(){}
    public function getSet($key,$value){}
    public function getTimeout(){}
    public function hDel($key,$member,$other_members){}
    public function hExists($key,$member){}
    public function hGet($key,$member){}
    public function hGetAll($key){}
    public function hIncrBy($key,$member,$value){}
    public function hIncrByFloat($key,$member,$value){}
    public function hKeys($key){}
    public function hLen($key){}
    public function hMget($key,$keys){}
    public function hMset($key,$pairs){}
    public function hSet($key,$member,$value){}
    public function hSetNx($key,$member,$value){}
    public function hStrLen($key,$member){}
    public function hVals($key){}
    public function hscan($str_key,$i_iterator,$str_pattern,$i_count){}
    public function incr($key){}
    public function incrBy($key,$value){}
    public function incrByFloat($key,$value){}
    public function info($option){}
    public function isConnected(){}
    public function lGet($key,$index){}
    public function lGetRange($key,$start,$end){}
    public function lInsert($key,$position,$pivot,$value){}
    public function lPop($key){}
    public function lPush($key,$value){}
    public function lPushx($key,$value){}
    public function lRemove($key,$value,$count){}
    public function lSet($key,$index,$value){}
    public function lSize($key){}
    public function lastSave(){}
    public function listTrim($key,$start,$stop){}
    public function migrate($host,$port,$key,$db,$timeout,$copy,$replace){}
    public function move($key,$dbindex){}
    public function mset($pairs){}
    public function msetnx($pairs){}
    public function multi($mode){}
    public function object($field,$key){}
    public function pconnect($host,$port,$timeout){}
    public function persist($key){}
    public function pexpire($key,$timestamp){}
    public function pexpireAt($key,$timestamp){}
    public function pfadd($key,$elements){}
    public function pfcount($key){}
    public function pfmerge($dstkey,$keys){}
    public function ping(){}
    public function pipeline(){}
    public function psetex($key,$expire,$value){}
    public function psubscribe($patterns){}
    public function pttl($key){}
    public function publish($channel,$message){}
    public function pubsub($cmd,$args){}
    public function punsubscribe($pattern,$other_patterns){}
    public function rPop($key){}
    public function rPush($key,$value){}
    public function rPushx($key,$value){}
    public function randomKey(){}
    public function rawcommand($cmd,$args){}
    public function renameKey($key,$newkey){}
    public function renameNx($key,$newkey){}
    public function restore($ttl,$key,$value){}
    public function role(){}
    public function rpoplpush($src,$dst){}
    public function sAdd($key,$value){}
    public function sAddArray($key,$options){}
    public function sContains($key,$value){}
    public function sDiff($key,$other_keys){}
    public function sDiffStore($dst,$key,$other_keys){}
    public function sInter($key,$other_keys){}
    public function sInterStore($dst,$key,$other_keys){}
    public function sMembers($key){}
    public function sMove($src,$dst,$value){}
    public function sPop($key){}
    public function sRandMember($key,$count){}
    public function sRemove($key,$member,$other_members){}
    public function sSize($key){}
    public function sUnion($key,$other_keys){}
    public function sUnionStore($dst,$key,$other_keys){}
    public function save(){}
    public function scan($i_iterator,$str_pattern,$i_count){}
    public function script($cmd,$args){}
    public function select($dbindex){}
    public function set($key,$value,$opts){}
    public function setBit($key,$offset,$value){}
    public function setOption($option,$value){}
    public function setRange($key,$offset,$value){}
    public function setTimeout($key,$timeout){}
    public function setex($key,$expire,$value){}
    public function setnx($key,$value){}
    public function slaveof($host,$port){}
    public function slowlog($arg,$option){}
    public function sort($key,$options){}
    public function sortAsc($key,$pattern,$get,$start,$end,$getList){}
    public function sortAscAlpha($key,$pattern,$get,$start,$end,$getList){}
    public function sortDesc($key,$pattern,$get,$start,$end,$getList){}
    public function sortDescAlpha($key,$pattern,$get,$start,$end,$getList){}
    public function sscan($str_key,$i_iterator,$str_pattern,$i_count){}
    public function strlen($key){}
    public function subscribe($channels){}
    public function swapdb($srcdb,$dstdb){}
    public function time(){}
    public function ttl($key){}
    public function type($key){}
    public function unlink($key,$other_keys){}
    public function unsubscribe($channel,$other_channels){}
    public function unwatch(){}
    public function wait($numslaves,$timeout){}
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
    public function zAdd($key,$score,$value){}
    public function zCard($key){}
    public function zCount($key,$min,$max){}
    public function zDelete($key,$member,$other_members){}
    public function zDeleteRangeByRank($key,$start,$end){}
    public function zDeleteRangeByScore($key,$min,$max){}
    public function zIncrBy($key,$value,$member){}
    public function zInter($key,$keys,$weights,$aggregate){}
    public function zLexCount($key,$min,$max){}
    public function zRange($key,$start,$end,$scores){}
    public function zRangeByLex($key,$min,$max,$offset,$limit){}
    public function zRangeByScore($key,$start,$end,$options){}
    public function zRank($key,$member){}
    public function zRemRangeByLex($key,$min,$max){}
    public function zRevRange($key,$start,$end,$scores){}
    public function zRevRangeByLex($key,$min,$max,$offset,$limit){}
    public function zRevRangeByScore($key,$start,$end,$options){}
    public function zRevRank($key,$member){}
    public function zScore($key,$member){}
    public function zUnion($key,$keys,$weights,$aggregate){}
    public function zscan($str_key,$i_iterator,$str_pattern,$i_count){}
    public function del($key,$other_keys){}
    public function evaluate($script,$args,$num_keys){}
    public function evaluateSha($script_sha,$args,$num_keys){}
    public function expire($key,$timeout){}
    public function keys($pattern){}
    public function lLen($key){}
    public function lindex($key,$index){}
    public function lrange($key,$start,$end){}
    public function lrem($key,$value,$count){}
    public function ltrim($key,$start,$stop){}
    public function mget($keys){}
    public function open($host,$port,$timeout,$retry_interval){}
    public function popen($host,$port,$timeout){}
    public function rename($key,$newkey){}
    public function sGetMembers($key){}
    public function scard($key){}
    public function sendEcho($msg){}
    public function sismember($key,$value){}
    public function srem($key,$member,$other_members){}
    public function substr($key,$start,$end){}
    public function zRem($key,$member,$other_members){}
    public function zRemRangeByRank($key,$min,$max){}
    public function zRemRangeByScore($key,$min,$max){}
    public function zRemove($key,$member,$other_members){}
    public function zRemoveRangeByScore($key,$min,$max){}
    public function zReverseRange($key,$start,$end,$scores){}
    public function zSize($key){}
    public function zinterstore($key,$keys,$weights,$aggregate){}
    public function zunionstore($key,$keys,$weights,$aggregate){}
}
