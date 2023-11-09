<?php
require_once("functions.php");

function usernameIsValid(string $username): array
{
    $result = [
        'isValid' => true,
        'msg' => ''

    ];

    $userInDB = getUserByName($username);

    //var_dump($userInDB);

    //echo '<br><br>';
    //echo strlen($username);
    if (strlen($username) < 2) {
        $result = [
            'isValid' => false,
            'msg' => '<h2><center>ERROR!</center></H2>Le nom utilisé est trop court'

        ];
    } elseif (strlen($username) > 20) {
        echo '<br><br> Dans mon if strlen >20';
        echo strlen($username);  
        $result = [
            'isValid' => false,
            'msg' => '<h2><center>ERROR!</center></H2>Le nom utilisé est trop long'

        ];
    } elseif ($userInDB) {

        //echo '<br><br>';
        //var_dump($userInDB);
        //Doit être différent d'un user name déjà dans la DB

        /* 
        1) get user by username
        2) if exist : error
        */
        $result = [
            'isValid' => false,
            'msg' => '<h2><center>ERROR!</center></H2>Le nom est déjà utilisé!'

        ];
    }
    return $result;
}

function emailIsValid(string $email): array
{
    $result = [
        'isValid' => true,
        'msg' => ''
    ];

    $userInDB = getUserByEmail($email);

    //var_dump($userInDB);

    echo '<br><br>';
    if ($userInDB) {

        //echo '<br><br>';
        //var_dump($userInDB);
        $result = [
            'isValid' => false,
            'msg' => '<h2><center>ERROR!</center></H2>L\'email est déjà utilisé.'
        ];
    }
    return $result;
}

function pwdIsValid(string $pwd): array
{
    $length= strlen($pwd);
    $result=[
        "isValid"=>true,
        "msg"=>""
    ];
    if ($length < 6 ||$length  > 10) {
        $result=[
        'isValid'=>false,
        "msg"=>"<h2><center>ERROR!</H2>Le mot de passe est non valide car il doit avoir entre 6 et 10 caracteres</center></BR>"
        ];
      }  
    return $result; 
};  
?>