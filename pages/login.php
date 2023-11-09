<?php
//if $_post action signup faire le traitement 
require_once("../functions/functions.php");
var_dump($_POST);
if (isset($_POST["action"]) && $_POST["action"] == "signup") {
    createUser($_POST);
};
?>
<center><a href="../utils/results.php">Retour Acceuil</a></center>
 
<form method="post" action="../index.php">
        <label for="user_name">Nom d'utilisateur :</label>
        <input type="text" id="user_name" name="user_name" required>
        <br>
        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="pwd">Mot de Passe :</label>
        <input type="password" id="pwd" name="pwd" required>
        <br>
        <input type="submit" value="log in">
    </form>
