<?php

class Patient extends class Database {

    public function searchbyname ($name) {
        $pdo = $this->connect();
        $sql = "SELECT name, surname, svn FROM patients WHERE name LIKE '$name%' OR surname LIKE '$name%'";
        $result = $this->query($sql);
        $this->close($pdo);
        return $result;
    }

}

?>