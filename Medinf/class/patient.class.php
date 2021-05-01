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
    public function getpatient ($svn) {
        $pdo = $this->connect();
        $sql = "SELECT * FROM patients WHERE svn LIKE :svn";
        $result = $pdo->prepare($sql);
        $result->bindParam(':svn', $svn, PDO::PARAM_STR);
        $result->execute();
        $this->close($pdo);
        return $result->fetch();

    }
    public function editpatient ($name, $surname, $birthday, $svn, $address, $city, $post_code, $sex, $pronoun, $mobilephone) {
        $pdo = $this->connect();
        $sql = "UPDATE patients SET name = '$name', surname = '$surname', birthdate = '$birthday', sex = '$sex', pronoun = '$pronoun', address = '$address', city = '$city', post_code = '$post_code', mobilephone = '$mobilephone' WHERE svn = $svn";  
        $result = $pdo->prepare($sql);
        $result->execute();
        $this->close($pdo);
        $result->fetch();
    }
    public function addnewpatient ($name, $surname, $birthday, $svn, $address, $city, $post_code, $sex, $pronoun, $mobilephone) {
        $pdo = $this->connect();
        $sql = "SELECT svn FROM patients WHERE svn LIKE $svn";
        $result = $pdo->prepare($sql);
        $result->execute();
        $result->fetch();
        if ($result = $svn) {
            echo 'Dieser Patient existiert bereits!';
            return editpatient($svn);
        }
        else {
            $sql = "INSERT INTO patients (name, surname, svn, birthdate, sex, pronoun, address, city, post_code, mobilephone)
            VALUES ('$name', '$surname','$svn', '$birthday', '$sex', '$pronoun', '$address', '$city', '$post_code', '$mobilephone')";
            $result = $pdo->prepare($sql);

            $result->execute();
            $this->close($pdo);
            $result->fetch();
        }
    }
}

?>