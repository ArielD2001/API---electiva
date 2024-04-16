<?php


class Connection{
    
    static public function infoDatabase(){

        $info = array(

            "database" => "api-electiva",
            "user" => "root",
            "pass" => ""

        );

        return $info;
    }

    static public function connect(){

        try{

            $conn = new PDO(
                'mysql:host=localhost;dbname='.Connection::infoDatabase()['database'],
                                               Connection::infoDatabase()['user'], 
                                               Connection::infoDatabase()['pass']
            );

            $conn->exec('set names utf8');  

        }catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }

        return $conn;
    }

}
