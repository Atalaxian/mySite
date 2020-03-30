<?php
include_once ('session.php');
function logged_in(){
    return(isset($_SESSION['currentUser'])) ? true : false;
}

function protect_page($numeric=0){
    if ($numeric==0 and logged_in() === false ) {
        header('Location: /');
    }
    if($numeric==1 and logged_in()==true){
        header('Location: /');
    }
}

