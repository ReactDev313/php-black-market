<?php

namespace TestApp;

/**
 * Class User
 */
class Purchase extends Model
{
    public static $table_name = 'purchase';
    public static $saved_fields = ['user_id', 'item_id'];

    /**
     * @var string
     */
    protected $user_id;

    /**
     * @var
     */
    protected $item_id;

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
    public function getUserID(): string
    {
        return $this->user_id;
    }

    /**
     * @param string $user_id
     * @return Purchase
     */
    public function setUserID(string $user_id): Purchase
    {
        $this->user_id = $user_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getItemID()
    {
        return $this->item_id;
    }

    /**
     * @param mixed $item_id
     * @return Purchase
     */
    public function setItemID($item_id): Purchase
    {
        $this->item_id = $item_id;
        return $this;
    }

}