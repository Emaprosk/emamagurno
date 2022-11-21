<?php
namespace Models;

class PetsType{
    private $description;
    private $id;

    public function getDescription()
    {
        return $this->description;
    } 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}



?>