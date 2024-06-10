<?php
//Host: http://localhost:8080/project-1/client.php
    $database = new mysqli(
        "localhost",
        "jpha",
        "123",
        "jpha",
        3306
    );

//  Create User`s and yours tables
    $createUser = "CREATE TABLE client(
        `id` int auto_increment,
        `firstName` varchar(25),
        `lastName` varchar(25),
        `email` varchar(40),
        `wage` float(7,2),
        primary key (`id`)
    )";

    //  Clean table
        $cleanTable = "TRUNCATE TABLE client";
        $database->query($cleanTable);

    //  Create Users in For (Loop) and put a Random wage
        for ($i=1; $i <= 100; $i++) {
            $wage = rand(1, 10);
            $insertUser = "INSERT INTO client(firstName,lastName,wage) VALUES ('Joao', 'ln', $wage * 1412.00)";
            $database->query($insertUser);
            
        }
        $database->query($createUser);
        
    
?>
