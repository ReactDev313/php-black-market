<?php

namespace TestApp;

/**
 * Class User
 */
class Item extends Model
{
    public static $table_name = 'items';
    public static $saved_fields = ['IP', 'user_name', 'pwd', 'price'];

    /**
     * @var string
     */
    protected $IP;

    /**
     * @var
     */
    protected $user_name;

    /**
     * @var
     */
    protected $pwd;

   /**
     * @var
     */
    protected $price;
    
    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getIP(): string
    {
        return $this->IP;
    }

    /**
     * @param string $IP
     * @return Item
     */
    public function setIP(string $ip): Item
    {
        $this->IP = $ip;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->user_name;
    }

    /**
     * @param mixed $username
     * @return User
     */
    public function setUsername($user_name): Item
    {
        $this->user_name = $user_name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPwd()
    {
        return $this->pwd;
    }

    /**
     * @param mixed $pwd
     * @return Item
     */
    public function setPwd($pwd): Item
    {
        $this->pwd = $pwd;
        return $this;
    }

    public function getPrice() 
    {
         return $this->price;
    }

    public function setPrice($price): Item
    {
        $this->price = $price;
        return $this;
    }
}