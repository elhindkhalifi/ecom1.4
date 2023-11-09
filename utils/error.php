<?php
require_once("../config/connexion.php");
require_once("../functions/functions.php");
require_once "../functions/validation.php";


session_start();
 $result=usernameIsValid($_SESSION["user_name"]);
 echo $result['msg'];
 $result=emailIsValid($_SESSION["email"]);
 echo $result['msg'];
 $result=pwdIsValid($_SESSION["pwd"]);
 echo $result['msg'];
?>