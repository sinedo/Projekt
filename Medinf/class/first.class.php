<?php

class First{

    protected function connect() {
        echo "connect";
    }

    protected function close($pdo) {
        echo "close";
    }
}