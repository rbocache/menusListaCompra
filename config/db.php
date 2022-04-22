<?php

class ConnectDB {
    public static function connect() {
        $db = new mysqli('localhost','root','root','menus_db');
        $db->query("SET NAMES 'utf8'");

        return $db;
    }
}