<?php
/**
 * User: zyj
 * Date: 2020/6/10
 *
 */

namespace MyGreeter;

class Client
{
    public function __construct()
    {
        echo $this->getGreeting();
    }
    /**
     *  Return time greetings
     *  @return string the message;
     * */
    public function getGreeting(){

        $hour = date("H"); //获取当前小时
        $hour = intval($hour);
        $message = '';
        switch ($hour)
        {
            case $hour<12:
                $message = 'Good morning';
                break;
            case $hour<18;
                $message = 'Good afternoon';
                break;
            case $hour<24;
                $message = 'Good evening';
                break;
        }
        return $message;
    }

}