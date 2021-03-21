<?php
require('databse.class.php');
use DatabaseConnector\DatabaseConnector;


class Personal{

    public function getAll(){
        $instance = DatabaseConnector::getInstance();

        $mysql = $instance->getConnection();

        $stmnt= $mysql->prepare("SELECT * from `personal`");
        $stmnt->execute();
        $result = $stmnt->fetchAll();
        return $result;
    }
}