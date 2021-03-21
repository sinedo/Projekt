<?php

class Personal extends Database{
    private $username;
    private $password;


/*/
    public function getAll(){
        $pdo=$this->connect();
        $sql = "SELECT * from `personal`";
        
        $stmt->execute();
        $this->close($pdo);
        return $stmt;
    }
/*/
    public function verify($username, $password){

        $pdo=$this->connect();
        $sql = "SELECT idPersonal FROM personal 
        WHERE username = :username_v AND password = :password_v";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':username_v', $username, PDO::PARAM_STR);
        $stmt->bindParam(':password_v', $password, PDO::PARAM_STR);

        $stmt->execute();
        $this->close($pdo);

        return $stmt->fetch();


    }

}