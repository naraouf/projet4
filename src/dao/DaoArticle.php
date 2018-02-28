<?php

namespace simplon\dao;
use simplon\entities\Article;
use simplon\entities\Person;
use simplon\dao\Connect;

/**
 * Un Dao, pour Data Access Object, est une classe dont le but est de faire
 * le lien entre les tables SQL et les objets PHP (ou autre langage).
 * Le but est de centraliser dans la ou les classes DAO tous les appels
 * SQL pour ne pas avoir de SQL qui se balade partout dans note application
 * (comme ça, si on change de SGBD, ou de table, ou de database, on aura
 * juste le DAO à modifier et le reste de notre appli restera inchangé)
 */
class DaoArticle {
    private $pdo;
    public function __construct(){
        $this->pdo = new \PDO('mysql:host=mysql;dbname=db;','root','root');
        $this->pdo->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_WARNING);
    }
    
   
     
    public function getAll():array {
        $tab = [];
     
        
        try {
        
        $query = $this->pdo->prepare('SELECT * FROM articles');
        $query->execute();
        while($row = $query->fetch()) {
           
            $pers = new Article($row['titre'], 
                        $row['message'],                        
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

    

    public function getByCompareId( $id) {
        $tab = [];
        try {

            $query = $this->pdo->prepare('SELECT articles.* FROM articles
            INNER JOIN table_jointure ON articles.id = table_jointure.article_id
            INNER JOIN person ON person.id = table_jointure.person_id 
            WHERE person_id= :id');
            // $pdo = new \PDO('mysql:host=mysql;dbname=db;','root','root');
            
            
            // $query = $this->pdo->prepare('SELECT article_id FROM table_jointure WHERE person_id=:id');
            $query->bindValue(':id', $id, \PDO::PARAM_INT);
            //var_dump($query);
            $query->execute();
           
            while($row = $query->fetch()) {                
                 $pers = new Article($row['titre'], 
                             $row['message'],                        
                             $row['id']                            


                         );
                         //var_dump($row['id']);
                 //On ajoute la person créée à notre tableau
                 $tab[$row['id']] = $pers;
            
            }
            return $tab;

        }catch(\Exception $e) {
            echo $e;
        }
            
            return null;    
    }


    public function getByID(INT $id) {
        $tab = [];
        try {
            // $pdo = new \PDO('mysql:host=mysql;dbname=db;','root','root');
            
            $query = $this->pdo->prepare('SELECT * FROM articles WHERE id=:id');
            $query->bindValue(':id', $id, \PDO::PARAM_INT);
           
            $query->execute();
           
           if($row = $query->fetch()) {
                
                $pers = new Article($row['titre'],                           
                            $row['message'],                            
                            $row['id']);
                            
            return $pers;
            
            }
        }catch(\Exception $e) {
            echo $e;
        }
            
            return null;    
    }

    public function add(Article $pers) {
        // $tab = [];
        try {          

            $query = $this->pdo->prepare("INSERT INTO articles (titre, message)VALUES (:titre, :message)");
            $query->bindValue(':titre', $pers->getTitre(), \PDO::PARAM_STR);
            $query->bindValue(':message', $pers->getMessage(), \PDO::PARAM_STR);
            $query->execute();
            $pers->setId($this->pdo->lastInsertId());
            //var_dump($pers->setId($this->pdo->lastInsertId()));
            $lastidartic = $this->pdo->lastInsertId();
            $idpers=($_SESSION["user"]->getId());
            $query = $this->pdo->prepare("INSERT INTO table_jointure (	person_id ,article_id )VALUES (:person_id, :article_id)");
            $query->bindValue(':person_id', $idpers, \PDO::PARAM_STR);
            $query->bindValue(':article_id', $lastidartic, \PDO::PARAM_STR);
            $query->execute();       
            
        }catch(\Exception $e) {
            echo $e;
        }
            
            return null;    
    }

    public function update(Article $pers) {
        // $tab = [];
        try {
            

            $query = Connect::getInstance()->prepare("UPDATE articles SET titre = ?,message = ? WHERE id = ?");
            $query->execute(array($pers->getTitre(),
            $pers->getMessage(), $pers->getId() )); 
                       
            
           // $pers->setId(Connect::getInstance()->lastInsertId());
            
            
            
    
        }catch(\Exception $e) { 
            echo $e;
        }
            
            return null;    
    }


    public function delete(Article $pers) {
        // $tab = [];
        try {
            
             
            $query = Connect::getInstance()->prepare("DELETE  FROM articles WHERE id = ?");
            $query->execute(array( $pers->getId() ));             
            
           // $pers->setId(Connect::getInstance()->lastInsertId());
            
            
            
    
        }catch(\Exception $e) {
            echo $e;
        }
            
            return null;    
    }


    public function getByTitre(string $titre) {
        $tab = [];
        try {
            // $pdo = new \PDO('mysql:host=mysql;dbname=db;','root','root');
            
            $query = $this->pdo->prepare('SELECT * FROM articles WHERE titre=:titre');
            $query->bindValue(':titre', $titre, \PDO::PARAM_INT);
           
            $query->execute();
           
           if($row = $query->fetch()) {
                
                $pers = new Article($row['titre'],                           
                            $row['message'],                            
                            $row['id']);
                            
            return $pers;
            
            }
        }catch(\Exception $e) {
            echo $e;
        }
            
            return null;    
    }

    public function getByWord(string $word) {
            $tab = [];
            
               
               try {
               
               $query = $this->pdo->prepare("SELECT * FROM articles WHERE message like '%$word%'  ");
               $query->execute();
               while($row = $query->fetch()) {
                  
                   $pers = new Article($row['titre'], 
                               $row['message'],                        
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
    


    

}