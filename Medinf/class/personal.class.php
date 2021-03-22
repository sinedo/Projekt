<?php

class Personal extends Database{

/*/
    public function getAll(){
        $pdo=$this->connect();
        $sql = "SELECT * from `personal`";
        
        $stmt->execute();
        $this->close($pdo);
        return $stmt;
    }
/*/
    public function getPasswordByUsername($username){

        $pdo=$this->connect();
        $sql = "SELECT password FROM personal 
        WHERE username = :uname";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':uname', $username, PDO::PARAM_STR);

        $stmt->execute();
        $this->close($pdo);
        return $stmt->fetch();
    }

}