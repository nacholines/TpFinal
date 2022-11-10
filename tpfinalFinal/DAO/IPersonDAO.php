<?php

    namespace DAO;

    use Models\Person as Person;

    interface IPersonDAO{
        function Add(Person $person);
        function GetByUsername($username);
    }
?>