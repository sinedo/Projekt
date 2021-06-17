<?php

class Vitals extends Database { 
    public function getVitals($id) {
        $pdo=$this->connect();
        $sql = "SELECT * FROM vitals  
        WHERE fk_patients_id = $id ORDER BY created_at ASC";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $this->close($pdo);
        return $stmt;
    }
    public function getVitalsDESC($id) {
        $pdo=$this->connect();
        $sql = "SELECT * FROM vitals  
        WHERE fk_patients_id = $id ORDER BY created_at DESC";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $this->close($pdo);
        return $stmt;
    }

}
?>