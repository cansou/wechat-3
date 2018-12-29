<?php
/**
 * Created by PhpStorm.
 * User: yf
 * Date: 2018-12-29
 * Time: 22:55
 */

namespace EasySwoole\WeChat\Exception;


class OfficialAccount extends Exception
{
    private $errorCode;

    /**
     * @return mixed
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }

    /**
     * @param mixed $errorCode
     */
    public function setErrorCode($errorCode): void
    {
        $this->errorCode = $errorCode;
    }

    public static function hasException(array $jsonData):?OfficialAccount
    {
        if(isset($jsonData['errcode']) && $jsonData['errcode'] != 0){
            $ex = new OfficialAccount($jsonData['errmsg']);
            $ex->setErrorCode($jsonData['errcode']);
            return $ex;
        }
        return null;
    }
}