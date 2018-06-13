<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/12
 * Time: 16:05
 */

class User
{
    private $username;
    private $age;
    private $password;
    private $sex;
    private $home;
    private $hobby;
    private $like;
    private $userlevel;
    private $ispass;

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }



    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }



    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * @param mixed $sex
     */
    public function setSex($sex)
    {
        $this->sex = $sex;
    }

    /**
     * @return mixed
     */
    public function getHome()
    {
        return $this->home;
    }

    /**
     * @param mixed $home
     */
    public function setHome($home)
    {
        $this->home = $home;
    }

    /**
     * @return mixed
     */
    public function getHobby()
    {
        return $this->hobby;
    }

    /**
     * @param mixed $hobby
     */
    public function setHobby($hobby)
    {
        $this->hobby = $hobby;
    }

    /**
     * @return mixed
     */
    public function getLike()
    {
        return $this->like;
    }

    /**
     * @param mixed $like
     */
    public function setLike($like)
    {
        $this->like = $like;
    }

    /**
     * @return mixed
     */
    public function getUserlevel()
    {
        return $this->userlevel;
    }

    /**
     * @param mixed $userlevel
     */
    public function setUserlevel($userlevel)
    {
        $this->userlevel = $userlevel;
    }

    /**
     * @return mixed
     */
    public function getIspass()
    {
        return $this->ispass;
    }

    /**
     * @param mixed $ispass
     */
    public function setIspass($ispass)
    {
        $this->ispass = $ispass;
    }



}

?>