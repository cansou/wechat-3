<?php
/**
 * Created by PhpStorm.
 * User: yf
 * Date: 2018-12-29
 * Time: 22:04
 */

namespace EasySwoole\WeChat\AbstractInterface;


interface StorageInterface
{
    public function __construct(string $tempDir,$appId);
    public function get($key);
    public function set($key,$value,int $expire = null);
    public function lock(string $appId,float $timeout = 3.0):bool ;
    public function unlock(string $appId,float $timeout = 3.0):bool ;
}