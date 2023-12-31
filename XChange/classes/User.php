<?php

class User{
    private $campusID;
    private $username;
    private $primaryDegree;
    private $secondaryDegree;
    private $yearOfMatriculation;

    public function __construct($campusID, $username, $primaryDegree, $secondaryDegree, $yearOfMatriculation){
        $this->campusID = $campusID;
        $this->username = $username;
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