<?php

namespace simplon\entities;

class Person {
    private $id;
    private $name;
    private $birthdate;  // - --- -- - - - -- - 
    private $email;   // - - - - - - -- - - - - 
    private $password;
    private $nameblog;
    private $resumeblog;

    public function __construct(string $name,
                                \Datetime $birthdate,
                                string $email,                            
                                
                                
                                string $password,
                                string $nameblog,
                                string $resumeblog,

                                int $id=null
                                ) {
        $this->id = $id;
        $this->name = $name;
        $this->birthdate = $birthdate;
        $this->email = $email;
        $this->password = $password;
        $this->nameblog = $nameblog;
        $this->resumeblog = $resumeblog;
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
     * Get the value of name
     */ 
    public function getName():string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of birthdate
     */ 
    public function getBirthdate(): \Datetime
    {
        return $this->birthdate; 
    }

    /**
     * Set the value of birthdate
     *
     * @return  self
     */ 
    public function setBirthdate(\Datetime $birthdate)
    {
        $this->birthdate = $birthdate;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail(string $email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setPassword(string $password)
    {
        $this->password = $password;

        return $this;
    }

    public function getNameblog(): string
    {
        return $this->nameblog;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setNameblog(string $nameblog)
    {
        $this->nameblog = $nameblog;

        return $this;
    }

    public function getResumeblog(): string
    {
        return $this->resumeblog;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setResumeblog(string $resumeblog)
    {
        $this->resumeblog = $resumeblog;

        return $this;
    }
}