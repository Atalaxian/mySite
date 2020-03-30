<?php
include_once('session.php');
include_once ('autorizationProof.php');
protect_page();
unset($_SESSION['currentUser']);
header('Location: /');
