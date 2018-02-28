<?php

namespace simplon\dao;
use simplon\entities\Person;

/**
 * Un Dao, pour Data Access Object, est une classe dont le but est de faire
 * le lien entre les tables SQL et les objets PHP (ou autre langage).
 * Le but est de centraliser dans la ou les classes DAO tous les appels
 * SQL pour ne pas avoir de SQL qui se balade partout dans note application
 * (comme ça, si on change de SGBD, ou de table, ou de database, on aura
 * juste le DAO à modifier et le reste de notre appli restera inchangé)
 */
class DaoPerson {
    private $pdo;
    public function __construct(){
        $this->pdo = new \PDO('mysql:host=mysql;dbname=db;','root','root');
        $this->pdo->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_WARNING);
    }
    
    /**
     * La méthode getAll renvoie toutes les persons stockées en bdd
     * @return Person[] la liste des person ou une liste vide
     */
    public function getAll():array {
        //On commence par créer un tableau vide dans lequel on stockera
        //les person s'il y en a  et qu'on returnera dans tous les cas
        $tab = [];
        /*On crée une connexion à notre base de données en utilisant 
        l'objet PDO qui attend en premier argument le nom de notre SGBD,
        l'hôte où est notre bdd (ici c'est mysql du fait qu'on soit sur un docker)
        et le nom de la bdd, en deuxième argument le nom d'utilisateur de notre bdd et en troisième argument son
        mot de passe.
        On récupère une connexion à la base sur laquelle on pourra
        faire des requêtes et autre.
        */
        try {
        // $pdo = new \PDO('mysql:host=mysql;dbname=db;','root','root');
        /*On utilise la méthode prepare() de notre connexion pour préparer
        une requête SQL (elle n'est pas envoyée tant qu'on ne lui dit pas)
        La méthode prepare attend en argument une string SQL
        */
        $query = $this->pdo->prepare('SELECT * FROM person');
        //On dit à notre requête de s'exécuter, à ce moment là, le résultat
        //de la requête est disponible dans la variable $query
        $query->execute();
        /*On itère sur les différentes lignes de résultats retournées par
        notre requête en utilisant un $query->fetch qui renvoie une ligne
        de résultat sous forme de tableau associatif tant qu'il y a des
        résultat. On stock donc le retour de ce fetch dans une variable 
        $row et on boucle dessus
        */
        while($row = $query->fetch()) {
            /*
            A chaque tour de boucle, on se sert de notre ligne de résultat
            sous forme de tableau associatif pour créer une instance de 
            Person en lui donnant en argument les différentes valeurs des
            colonnes de la ligne de résultat.
            Les index de $row correspondent aux noms de colonnes dans notre
            SQL.
            */
            $pers = new Person($row['name'], 
                        new \DateTime($row['birth_date']), 
                        $row['email'],                        
                        $row['password'],
                        $row['nameblog'],
                        $row['resumeblog'],
                        $row['id']
                    );
            //On ajoute la person créée à notre tableau
            $tab[] = $pers;
        }
    }catch(\Exception $e) {
        echo $e;
    }
        //On return le tableau
        return $tab;
    }

    public function getByEmail(string $email) {
        $tab = [];
        try {
            // $pdo = new \PDO('mysql:host=mysql;dbname=db;','root','root');
            
            $query = $this->pdo->prepare('SELECT * FROM person WHERE email=:email');
            $query->bindValue(':email', $email, \PDO::PARAM_STR);
           
            $query->execute();
           
           if($row = $query->fetch()) {
                
                $pers = new Person($row['name'], 
                            new \DateTime($row['birth_date']), 
                            $row['email'],
                            $row['password'],                            
                            $row['nameblog'],
                            $row['resumeblog'],
                            $row['id']);
                            
            return $pers;
            
            }
        }catch(\Exception $e) {
            echo $e;
        }
            
            return null;    
    }

    public function getByNameblog(string $nameblog) {
        $tab = [];
        try {
            // $pdo = new \PDO('mysql:host=mysql;dbname=db;','root','root');
            
            $query = $this->pdo->prepare('SELECT * FROM person WHERE nameblog=:nameblog');
            $query->bindValue(':nameblog', $nameblog, \PDO::PARAM_STR);
           
            $query->execute();
           
           if($row = $query->fetch()) {
                
                $pers = new Person($row['name'], 
                            new \DateTime($row['birth_date']), 
                            $row['email'],
                            $row['password'],                            
                            $row['nameblog'],
                            $row['resumeblog'],
                            $row['id']);
                            
            return $pers;
            
            }
        }catch(\Exception $e) {
            echo $e;
        }
            
            return null;    
    }

    public function add(Person $pers) {
        // $tab = [];
        try {
            

            $query = $this->pdo->prepare("INSERT INTO person (name, birth_date, email, password, nameblog, resumeblog )VALUES (:name, :birth_date,:email, :password, :nameblog, :resumeblog)");
            $query->bindValue(':name', $pers->getName(), \PDO::PARAM_STR);
            $query->bindValue(':birth_date', $pers->getBirthdate()->Format('y,m,d'), \PDO::PARAM_STR);
            $query->bindValue(':email', $pers->getEmail(), \PDO::PARAM_STR);
            $query->bindValue(':password', $pers->getPassword(), \PDO::PARAM_STR);
            $query->bindValue(':nameblog', $pers->getNameblog(), \PDO::PARAM_STR);
            $query->bindValue(':resumeblog', $pers->getResumeblog(), \PDO::PARAM_STR);
            
            $query->execute();  
            
            $pers->setId($this->pdo->lastInsertId());
            
            
            
    
        }catch(\Exception $e) {
            echo $e;
        }
            
            return null;    
    }


    public function getByID(INT $id) {
        $tab = [];
        try {
            // $pdo = new \PDO('mysql:host=mysql;dbname=db;','root','root');
            
            $query = $this->pdo->prepare('SELECT * FROM person WHERE id=:id');
            $query->bindValue(':id', $id, \PDO::PARAM_INT);
           
            $query->execute();
           
           if($row = $query->fetch()) {
                
            $pers = new Person($row['name'], 
                new \DateTime($row['birth_date']), 
                $row['email'],
                $row['password'],                            
                $row['nameblog'],
                $row['resumeblog'],
                $row['id']);
                            
            return $pers;
            
            }
        }catch(\Exception $e) {
            echo $e;
        }
            
            return null;    
    }

    public function update(Person $pers) {
        // $tab = [];
        try {
            

            $query = Connect::getInstance()->prepare("UPDATE person SET name = ?, password = ?, nameblog = ?, resumeblog = ? WHERE id = ?");
            $query->execute(array($pers->getName(),
            $pers->getPassword(),
            $pers->getNameblog(), $pers->getResumeblog(),$pers->getId() )); 
                       
            
           // $pers->setId(Connect::getInstance()->lastInsertId());
            
            
            
    
        }catch(\Exception $e) {
            echo $e;
        }
            
            return null;    
    }


    

}