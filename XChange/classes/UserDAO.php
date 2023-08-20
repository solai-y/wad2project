<?php
class UserDAO{
// does this need a constructor?
    // public function __construct(){
        
    // }

    // # add user function needs to be adjusted
    // public function add($username, $hashedPassword){
    //     $conn_manager = new ConnectionManager();
    //     $pdo = $conn_manager->getConnection();
        
    //     $sql = "insert into user (username, hashed_password) 
    //             values (:username, :hashed_password)";
    //     $stmt = $pdo->prepare($sql);
    //     $stmt->bindParam(":username",$username);
    //     $stmt->bindParam(":hashed_password",$hashedPassword);
    //     $status = $stmt->execute();
        

    //     $stmt = null;
    //     $pdo = null;
    //     return $status;
    // }

    # Retrieve a user with a given username
    # Return null if no such user exists
    public function retrieve($username, $password){
        $conn_manager = new ConnectionManager();
        $pdo = $conn_manager->getConnection();
        
        $sql = "select * from user where user=:username";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":username",$username,PDO::PARAM_STR);
        $stmt->execute();
        
        $user = null;
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        if($row = $stmt->fetch()){
            $user = new User($row['id'],$row["user"],$row["password"], $row["primary_degree"], $row['secondary_degree'], $row["year_of_matriculation"]);
        }
        
        $stmt = null;
        $pdo = null;
        return $user;
    }
}

?>