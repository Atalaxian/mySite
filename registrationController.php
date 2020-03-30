<?php
include ('session.php');
include_once ('autorizationProof.php');
protect_page(1);
include ("Include/connection.php");

if(isset($_POST['register'])){
    $data=$_POST;
    $nameClient=filter_var(trim($_POST['nameRegistration']),FILTER_SANITIZE_STRING);
    $password=filter_var(trim($_POST['passwordRegistration']),FILTER_SANITIZE_STRING);
    $passwordClient=password_hash($password,PASSWORD_DEFAULT);
    $emailClient=filter_var(trim($_POST['emailRegistration']),FILTER_SANITIZE_EMAIL);
    $base='clients';
    $sql = "SELECT COUNT(*) FROM $base WHERE name=:nameClient";
    $sql1= "SELECT COUNT(*) FROM $base WHERE email=:emailClient";
    $result = $connection->prepare($sql);
    $result->bindParam(':nameClient',$nameClient,PDO::PARAM_STR);
    $result->execute();
    $myString=$result->fetch();
    $count=$myString['COUNT(*)'];
    if($count!=0){
        $_SESSION['invalidName']=$count;
        $_SESSION['name']=$nameClient;
        $_SESSION['email']=$emailClient;
        header('Location: registrationForm');
        exit();

    }

    $result = $connection->prepare($sql1);
    $result->bindParam(':emailClient',$emailClient,PDO::PARAM_STR);
    $result->execute();
    $myString=$result->fetch();
    $count=$myString['COUNT(*)'];
    if($count!=0){
        $_SESSION['invalidEmail']=$count;
        $_SESSION['name']=$nameClient;
        $_SESSION['email']=$emailClient;
        header('Location: registrationForm');
        exit();

    }

    if(!defined('COUNT') AND !defined('COUNT_EMAIL')){
        $prepared = $connection->prepare("INSERT INTO $base(name,password,email) VALUES ('$nameClient','$passwordClient','$emailClient')");
        $result = $prepared->execute();
        $_SESSION['currentUser']=$nameClient;
        header('Location: /');
        exit();
    }
}
?>
