<?php
namespace Models;

class Pet{
    private $id;
    private $name;
    private $raza;
    private $planVacunacion;
    private $foto;
    private $petsType;


    public function setId($id){$this->id = $id;return $this;}
    public function getName(){return $this->name;
    } 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    } 
    public function getRaza()
    {
        return $this->raza;
    }
    public function setRaza($raza)
    {
        $this->raza = $raza;

        return $this;
    } 
    public function getPlanVacunacion()
    {
        return $this->planVacunacion;
    }
    public function setPlanVacunacion($planVacunacion)
    {
        $this->planVacunacion = $planVacunacion;

        return $this;
    } 
    public function getFoto()
    {
        return $this->foto;
    }
    public function setFoto($foto)
    {
        $this->foto = $foto;

        return $this;
    }
}



?>