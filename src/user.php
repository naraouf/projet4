<?php

class User
{
    // Les propriétés name et age de la classe Human sont privées, cela signifie que celles-ci ne sont pas accessibles depuis l'instance.
    // Le seul moyen d'accéder à ces propriétés est donc d'utiliser les getter et les setter.
    private $name;
    private $email;
    private $password;
    private $age;
    private $toto;

    // pour instancier un objet de type human, on doit fournir les valeurs de name et age au constructeur.
    public function __construct($name, $email, $password, $age)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->age = $age;
    }

    // on créé les getter pour age et name
    public function get_age()
    {
        return $this->age;
    }

    

    public function get_name()
    {
        return $this->name;
    }
    public function get_email()
    {
        return $this->email;
    }
    public function get_password()
    {
        return $this->password;
    }



    // // age est modifié uniquement par incrémentation (on ne peut pas rajeunir un humain, et on ne peut pas vieillir de plusieurs années)
    // public function birthday()
    // {
    //     ++$this->age;
    // }
}

class article extends User
{
    // Pour construire un objet de type toto, on à besoin uniquement de son age. Un objet de type toto porte forcément le nom "toto"
    public function __construct($age)
    {
        parent::__construct('toto', $age);
    }

    public function finger_in_the_nose()
    {
        echo 'disgusting !';
    }

    // On accède à la méthode get_age() du parent.
    public function get_age()
    {
        return 'toto à '.parent::get_age().' ans';
    }

    /**
     * Get the value of toto
     */ 
    
}

// // on instancie un nouveau toto
// $toto = new Toto(10);
// // on affiche les propriétés de l'objet $toto
// var_dump($toto);
// echo '<br>';
// // on appelle la méthode finger_in_the_nose() de l'objet $toto
// $toto->finger_in_the_nose();
// echo '<br>';
// // on recupère l'age de toto
// echo $toto->get_age();
