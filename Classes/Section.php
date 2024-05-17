<?php

class Section implements JsonSerializable {
    private $id;
    private $name;

    private $description;
    private $creation_date;
    private $avaliable;

    private $section_id;

    /**
     * @param $id
     * @param $name
     * @param $description
     * @param $creation_date
     * @param $avaliable
     * @param $section_id
     */
    public function __construct($id, $name, $description, $creation_date, $avaliable, $section_id)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->creation_date = $creation_date;
        $this->avaliable = $avaliable;
        $this->section_id = $section_id;
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
    public function getAvaliable()
    {
        return $this->avaliable;
    }

    /**
     * @param mixed $avaliable
     */
    public function setAvaliable($avaliable)
    {
        $this->avaliable = $avaliable;
    }

    /**
     * @return mixed
     */
    public function getSectionId()
    {
        return $this->section_id;
    }

    /**
     * @param mixed $section_id
     */
    public function setSectionId($section_id)
    {
        $this->section_id = $section_id;
    }


    public function jsonSerialize()
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'creation_date' => $this->creation_date,
            'avaliable' => $this->avaliable,
            'section_id' => $this->section_id,
        ];
    }
}
