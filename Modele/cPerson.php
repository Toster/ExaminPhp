<?php 

//création de classe Person

class Person {

// propriété de la classe Person

    private string $_Name;

    private string $_FirstName;

    private int $_Age;

    protected int $_IdPerson;

    protected string $_Email;

//on peut voir que les propriete qui ont ete cree sont pour le nom, le prenom et l'age

    public function __construct($_Name, $_FirstName, $_Age) 
            {

                $this -> _Name = strtolower($_Name);

                $this -> _FirstName = strtolower($_FirstName);

                $this -> _Age = $_Age;

                $this -> _IdPerson = $_IdPerson;

                $this -> _Email = $_Email;

//name=string, firstname=string, age=int

            }

            public function getName(){

                return $this-> _Name;

//permet de récupérer le contenu de la propriété nom

            }

            public function setName($_Name){

                $this-> _Name = $_Name;

//permet de modifier le contenu de la propriété nom

            }

            public function getFirstName(){

                return $this-> _FirstName;

//permet de récupérer le contenu de la propriété prénom

            }

            public function setFirstName($_FirstName){

                $this-> _FirstName = $_FirstName;

//permet de modifier le contenu de la propriété prénom

            }

            public function getAge(){

                return $this-> _Age;

//permet de récupérer le contenu de la propriété age

            }

            public function setAge($_Age){

                $this-> _Age = $_Age;
                
//permet de modifier le contenu de la propriété age

            }

            public function getBirthYear(){

                return 2021-($this->_Age);

//permet de retrouver l'annee de naissance

            }

            public function getIdPerson(){

                return $this-> _IdPerson;

//permet de récupérer le contenu de la propriété IdPerson

            }

            public function setIdPerson($_IdPerson){

                return $this-> _IdPerson;

//permet de modifier le contenu de la propriété IdPerson

            }

            public function getEmail(){

                return $this-> _Email;

//permet de récupérer le contenu de la propriété Email

            }

            public function setEmail($_Email){

                return $this-> _Email;

//permet de modifier le contenu de la propriété Email

            }

}

class Client extends Person {

    protected string $entrepriseName

    public function displayIdPerson() {

        parent :: getIdPerson();
    }

    public function displayEmail() {

        parent :: getEmail();

    }

}

    class Employee extends Person {

        protected string $entrepriseName
    
        public function displayIdPerson() {
    
            parent :: getIdPerson();
        }
    
        public function displayEmail() {
    
            parent :: getEmail();
    
        }
}

?>