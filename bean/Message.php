<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/12
 * Time: 16:24
 */

class Message
{
    private $From;
    private $To;
    private $message;
    private $time;

    /**
     * @return mixed
     */
    public function getFrom()
    {
        return $this->From;
    }

    /**
     * @param mixed $From
     */
    public function setFrom($From)
    {
        $this->From = $From;
    }

    /**
     * @return mixed
     */
    public function getTo()
    {
        return $this->To;
    }

    /**
     * @param mixed $To
     */
    public function setTo($To)
    {
        $this->To = $To;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * @return mixed
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @param mixed $time
     */
    public function setTime($time)
    {
        $this->time = $time;
    }


}