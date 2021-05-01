<?php

class Patient extends Database {

    public function searchbyname ($patientname) {
        $patientname = $patientname.'%';
        $pdo = $this->connect();
        $sql = "SELECT name, surname, svn FROM patients WHERE name LIKE :pname OR surname LIKE :pname";
        $result = $pdo->prepare($sql);
        $result->bindParam(':pname', $patientname, PDO::PARAM_STR);
       
        $result->execute();
        $this->close($pdo);
        return $result;
    }

    public function editpatient ($svn) {
        $pdo = $this->connect();
        $sql = "SELECT * FROM Patients WHERE svn LIKE $svn";
        $result = $pdo->prepare($sql);
        $result->execute();
        $result->fetch();

        
    }
    public function addnewpatient ($name, $surname, $birthday, $svn, $adress, $city, $post_code, $sex, $pronoun, $mobilephone) {
        $pdo = $this->connect();
        $sql = "SELECT svn FROM Patients WHERE svn LIKE $svn";
        $result = $pdo->prepare($sql);
        $result->execute();
        $result->fetch();
        if ($result = $svn) {
            echo 'Dieser Patient existiert bereits!';
           // editpatient($svn);
        }
        else {
            $sql = "INSERT INTO patients (name, surname, svn, birthdate, sex, pronoun, address, city, post_code, mobilephone)
            VALUES ('$name', '$surname','$svn', '$birthday', '$sex', '$pronoun', '$adress', '$city', '$post_code', '$mobilephone')";
            $result = $pdo->prepare($sql);

            $result->execute();
            $this->close($pdo);
            $result->fetch();
        }
    }
}

?>