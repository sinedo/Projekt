<?php

class Patient extends Database {

    public function searchbyname ($name) {
        $pdo = $this->connect();
        $sql = "SELECT name, surname, svn FROM patients WHERE name LIKE '".$name."%' OR surname LIKE '".$name."%'";
        $result = $pdo->query($sql);
        $this->close($pdo);
        return $result;
    }

}

?>