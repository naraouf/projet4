<?php

namespace simplon\entities;

class Article {
    private $id;
    private $titre;   
    private $message;   // - - - - - - -- - - - - 
    

    public function __construct(string $titre,                                
                                string $message,                       
                                
                                int $id=null
                                ) {
        $this->id = $id;
        $this->titre = $titre;        
        $this->message = $message;
        
    }
    

    /**
     * Get the value of id
     */ 
    public function getId():int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId(int $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of titre
     */ 
    public function getTitre():string
    {
        return $this->titre;
    }

    /**
     * Set the value of titre
     *
     * @return  self
     */ 
    public function settitre(string $titre)
    {
        $this->titre = $titre;

        return $this;
    }

    

    /**
     * Get the value of message
     */ 
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * Set the value of message
     *
     * @return  self
     */ 
    public function setmessage(string $message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get the value of message
     */ 
    
}