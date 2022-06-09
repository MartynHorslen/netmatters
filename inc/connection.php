<?php 

    try {
        $dbh = new PDO("mysql:host=localhost;dbname=database;port=3306","root","");
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }

?>