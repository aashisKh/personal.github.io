<?php

include 'databaseConnection.php';

$newUser = new dataBaseConnection();
$newUser->dbConnection();
$newUser->selectDatabase();
$id = $_POST['Id'];
$username = $_POST['Username'];
$password = $_POST['Password'];
$response = $newUser->updateUserData($id ,$username , $password);

$newUser->closeConnection();

echo json_encode($response);
?>