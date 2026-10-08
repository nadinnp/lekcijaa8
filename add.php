<?php

//With this file we include the database connection
include_once('config.php');

//isset() function determines if a variable is declared and is different than NULL
if(isset($_POST['submit'])) {

    /*
    Use var_dump() for each variable created
    */

    //$_POST['name'] gets data from input with name='name'
    $name = $_POST['name'];

    //$_POST['surname'] gets data from input with name='surname'
    $surname = $_POST['surname'];

    //$_POST['email'] gets data from input with name='email'
    $email = $_POST['email'];

    $sql = "INSERT INTO users(name,surname,email) VALUES (:name, :surname, :email)";

    $sqlQuery = $connect->prepare($sql);

    $sqlQuery->bindParam(':name', $name);
    $sqlQuery->bindParam(':surname', $surname);
    $sqlQuery->bindParam(':email', $email);

    $sqlQuery->execute();

    echo "The user was added successfully!";

}

?>