<?php
//http://localhost:8080/project-1/DataBase.php
    $database = new mysqli(
        "localhost",
        "root",
        "usbw",
        "test",
        3307
    );

    $createUser = "CREATE TABLE person(
        `id` int auto_increment,
        `firstName` varchar(25),
        `lastName` varchar(25) not null,
        `email` varchar(40),
        primary key (`id`)
    )";

    $insertUser = "INSERT INTO person(firstName) VALUES ('Joao')";

        for ($i=1; $i < 100; $i++) { 
            $database->query($insertUser);
        }
        $database->query($createUser);
        
    
?>
