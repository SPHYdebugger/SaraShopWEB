<?php

class Section implements JsonSerializable {
    private $id;
    private $name;

    private $description;
    private $creation_date;
    private $available;

    private $shop_id;

    /**
     * @param $id
     * @param $name
     * @param $description
     * @param $creation_date
     * @param $available
     * @param $shop_id
     */
    public function __construct($id, $name, $description, $creation_date, $available, $shop_id)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->creation_date = $creation_date;
        $this->available = $available;
        $this->shop_id = $shop_id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getCreationDate()
    {
        return $this->creation_date;
    }

    /**
     * @param mixed $creation_date
     */
    public function setCreationDate($creation_date)
    {
        $this->creation_date = $creation_date;
    }

    /**
     * @return mixed
     */
    public function getAvailable()
    {
        return $this->available;
    }

    /**
     * @param mixed $available
     */
    public function setAvailable($available)
    {
        $this->available = $available;
    }

    /**
     * @return mixed
     */
    public function getShopId()
    {
        return $this->shop_id;
    }

    /**
     * @param mixed $shop_id
     */
    public function setShopId($shop_id)
    {
        $this->shop_id = $shop_id;
    }



    public function jsonSerialize()
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'creation_date' => $this->creation_date,
            'available' => $this->available,
            'shop_id' => $this->shop_id,
        ];
    }
}
