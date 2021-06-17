<?php

class Docs extends Database { 
    public function getDocs($id) {
        $pdo=$this->connect();
        $sql = "SELECT * FROM docs  
        WHERE fk_patients_id = $id ORDER BY created_at DESC";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $this->close($pdo);
        return $stmt;
    }

    public function addDocs($doc, $d, $id) {
        $pdo = $this->connect();
        $sql = "INSERT INTO docs (fk_patients_id, created_at, documentaion)
        VALUES ('$id','$d', '$doc')";
        $result = $pdo->prepare($sql);
        $result->execute();
        $this->close($pdo);
        $result->fetch();
    }

}
?>