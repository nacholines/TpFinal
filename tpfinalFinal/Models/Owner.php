<?php

namespace Models;

class Owner extends Person{
    private static $numberOwner = 0;
    private $idOwner;
    private $petList;

    public function __constructor($firstName, $lastName, $bitrhDate, $dni, $gender, $phone, $email, $password, $disponibilidad, $precio, $tipo){
        super($firstName, $lastName, $bitrhDate, $dni, $gender, $phone, $email, $password);

        $this->idOwner = $this::$numberOwner+1;

        $this->petList = array();

        MyClass::$numberOwner++;
    }

    /* Agregar una mascota a la lista de mascotas*/

    public function addPet($pet){
        array_push($this->petList, $pet);
    }

    /**
     * Get the value of petList
     */
    public function getPetList()
    {
        return $this->petList;
    }

    /**
     * Get the value of idOwner
     */
    public function getIdOwner()
    {
        return $this->idOwner;
    }

    /**
     * Set the value of idOwner
     */
    public function setIdOwner($idOwner): self
    {
        $this->idOwner = $idOwner;

        return $this;
    }
}
?>