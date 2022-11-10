<?php
    namespace DAO;

    use Models\Person as Person;

    class PersonDAO implements IPersonDAO{
        private $filename = ROOT . "/Data/People.json";
        private $people = array();

        public function add(Person $person){
            $this->GetData();
            $person->setId($this->GetNextId());
            array_push($this->people, $person);
            $this->SaveJson();
        }

        public function GetByUsername($username){
            $this->getData();

            $array = array_filter($this->people, function($person) use($username){
                return $person->getUsername() == $username;
            });

            $array = array_values($array);
            return (count($array) > 0) ? $array[0] : null;
        }

        private function GetData(){
            $this->people = array();

            if(file_exists($this->filename)){
                $jsonContent = file_get_contents($this->filename);
                $arrayDecode = ($jsonContent) ? json_decode($jsonContent, true) : array();

                foreach($arrayDecode as $value){
                    $person = new Person();
                    $person->setId($value["id"]);
                    $person->setFirstName($value["firstName"]);
                    $person->setLastName($value["lastName"]);
                    $person->setDni($value["dni"]);
                    $person->setBirthDate($value["birthDate"]);
                    $person->setGender($value["gender"]);
                    $person->setPhone($value["phone"]);
                    $person->setEmail($value["email"]);
                    $person->setUsername($value["username"]);
                    $person->setPassword($value["password"]);

                    array_push($this->people, $person);

                }
            }
        }

        private function SaveJson(){
            sort($this->people);
            $arrayEncode = array();

            foreach($this->people as $person){
                $value["id"] = $person->getId();
                $value["firstName"] = $person->getFirstName();
                $value["lastName"] = $person->getLastName();
                $value["dni"] = $person->getDni();
                $value["birthDate"] = $person->getBirthDate();
                $value["gender"] = $person->getGender();
                $value["phone"] = $person->getPhone();
                $value["email"] = $person->getEmail();
                $value["username"] = $person->getUsername();
                $value["password"] = $person->getPassword();

                array_push($arrayEncode, $value);
            }
            $jsonContent = json_encode($arrayEncode, JSON_PRETTY_PRINT);
            file_put_contents($this->filename , $jsonContent);
        }

        private function GetNextId(){
            $id = 0;

            foreach($this->people as $person){
                $id = ($person->getId() > $id) ? $person->getId() : $id;
            }
            return $id + 1;
        }
    }
?>