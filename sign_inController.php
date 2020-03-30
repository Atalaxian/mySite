<?php
include ('session.php');
include_once ('autorizationProof.php');
protect_page(1);
include ('Include/connection.php');


$passwordClient=filter_var($_POST['passwordSignIn'],FILTER_SANITIZE_STRING);
$emailClient=filter_var($_POST['emailSignIn'],FILTER_SANITIZE_EMAIL);
$base='clients';
$sql1= "SELECT COUNT(*) FROM $base WHERE email=:emailClient";
$result = $connection->prepare($sql1);
$result->bindParam(':emailClient',$emailClient,PDO::PARAM_STR);
$result->execute();
$myString=$result->fetch();
$count=$myString['COUNT(*)'];
if($count==0){
    $_SESSION['email']=$emailClient;
    $_SESSION['invalidEmail']=1;
    header('Location: sign_in');
    exit();
}
else{
    $sql2= "SELECT password, name FROM $base WHERE email=:emailClient";
    $result = $connection->prepare($sql2);
    $result->bindParam(':emailClient',$emailClient,PDO::PARAM_STR);
    $result->execute();
    $myString=$result->fetch();
    $password=$myString['password'];
    $nameUser=$myString['name'];
    $password = trim($password);
    if(password_verify($passwordClient,$password)==true){
        $_SESSION['currentUser']=$nameUser;
        header('Location: /');
        exit();
        }
        else{
            $_SESSION['email']=$emailClient;
            $_SESSION['invalidPassword']=1;
            header('Location: sign_in');
            exit();
        }
    }
?>
