<?php
namespace Controllers;

use Models\Person as Person;
use DAO\PersonDAO as PersonDAO;

use Models\Guardian as Guardian;
use DAO\GuardianDAO as GuardianDAO;

use Models\Owner as Owner;
use DAO\OwnerDAO as OwnerDAO;


class HomeController{
    private $ownerDAO;  
    private $guardianDAO;  
    private $personDAO;

    function __construct(){
        $this->personDAO = new PersonDAO();
        $this->guardianDAO = new GuardianDao();
        $this->ownerDAO = new OwnerDao();
    }

    public function Index($message = ""){
        require_once(VIEWS_PATH."login.php");
    }

    public function ShowRegisterView($message = "", $type = ""){
        require_once(VIEWS_PATH."register.php");
    }

    public function Register($firstName, $lastName, $dni, $birthDate, $gender, $phone, $email, $username, $password){
        if(!$this->personDAO->getByUsername($username)){
            $this->RegisterPerson($firstName, $lastName, $dni, $birthDate, $gender, $phone, $email, $username, $password);
            $this->Index("Se registro el usuario exitosamente.");
        }else{
            $this->ShowRegisterView("El nombre de usuario esta en uso.");
        }
    }

    public function RegisterPerson($firstName, $lastName, $dni, $birthDate, $gender, $phone, $email, $username, $password){
        $person = new Person();
        $person = $person->setFirstName($firstName);
        $person = $person->setLastName($lastName);
        $person = $person->setDni($dni);
        $person = $person->setBirthDate($birthDate);
        $person = $person->setGender($gender);
        $person = $person->setPhone($phone);
        $person = $person->setEmail($email);
        $person = $person->setUsername($username);
        $person = $person->setPassword($password);

        /*/if(is_null(PersonDAO)){
            echo "persondao es null";
        }

        $random = $this;
        echo "this is " . $random;/*/
        
        $this->PersonDAO->Add($person);
    }

    public function login($email,$pass){
        //$user = $this->UserDao->getByEmail($email);
        $user = $this->userExist($email);

        if($user!=null && $user->getPassword() == $pass){
            $_SESSION["loggedUser"]= $user; 
            
            if($user instanceof Guardian){
                $guardianC = new GuardianController();
                $guardianC->showHomeView();
            }else if($user instanceof Owner){
                $OwnerC = new OwnerController();
                $OwnerC->showHomeView();
            }
        }else{
            //echo '<script>alert("Credentials dont match, try again")</script>';
            session_destroy(); 
            $this->Index("Credentials dont match, try again");
        }
    }

}
?>
