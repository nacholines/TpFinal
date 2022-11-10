<?php

namespace Models;

class Pet{
    private static $numberPet = 0;
    private $idPet;
    private $idOwner;
    private $name;
    private $photo;
    private $size;
    private $photoPlanVacunacion;
    private $observaciones;
    private $video;
    private $petType;


    public function __constructor($idOwner, $name, $photo, $size, $photoPlanVacunacion, $observaciones, $video, $petType){
        $this->idPet = $this::$numberPet+1;
        $this->idOwner = $idOwner;

        $this->name = $name;
        $this->photo = $photo;
        $this->size = $size;
        $this->photoPlanVacunacion = $photoPlanVacunacion;
        $this->observaciones = $observaciones;
        $this->video = $video;
        $this->petType = $petType;

        
        MyClass::$numberPet++;
    }

    public function getId(){
        return $this->id;
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     */
    public function setName($name): self
    {
        $this->name = $name;

        return $this;
    }
}

?>