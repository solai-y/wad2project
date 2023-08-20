<?php

class User{
    private $username;
    private $password;
    private $campusID;
    private $primaryDegree;
    private $secondaryDegree;
    private $yearOfMatriculation;

    public function __construct($campusID, $username,$password, $primaryDegree, $secondaryDegree, $yearOfMatriculation){
        $this->campusID = $campusID;
        $this->username = $username;
        $this->password = $password;
        $this->primaryDegree = $primaryDegree;
        $this->secondaryDegree = $secondaryDegree;
        $this->yearOfMatriculation = $yearOfMatriculation;
    }
    public function getCampusID(){
        return $this->campusID;
    }
    public function getUser(){
        return $this->username;
    }
    public function getPassword(){
        return $this->password;
    }
    public function getPrimaryDegree(){
        return $this->primaryDegree;
    }
    public function getSecondaryDegree(){
        return $this->secondaryDegree;
    }
    public function getYearOfMatriculation(){
        return $this->yearOfMatriculation;
    }
}

?>