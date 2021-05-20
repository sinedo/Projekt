<?php

class Patient extends Database {

    public function searchbyname ($patientname) {
        $patientname = $patientname.'%';
        $pdo = $this->connect();
        $sql = "SELECT name, surname, svn, idPatients FROM patients WHERE name LIKE :pname OR surname LIKE :pname";
        $result = $pdo->prepare($sql);
        $result->bindParam(':pname', $patientname, PDO::PARAM_STR);
       
        $result->execute();
        $this->close($pdo);
        return $result;
    }
}

?>
