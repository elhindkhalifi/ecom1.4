<a href="../pages/signUp.php">enregistrement</a>

<?php
require_once("../config/connexion.php");
require_once("../functions/functions.php");
require_once "../functions/validation.php";


$users=getAllUsersIndex() ;
echo"<br><br>Mes users<br><br>";

//showData("sixieme",$data1);
foreach ($users as $key => $value) {
    echo "Nom de l'user :". $value[1]."<br>";
    echo "Courriel :". $value[2]."<br><br>";
    };
// if (isset($_POST)) {
//     var_dump($_POST);
//     switch ($_POST["action"]){
//         case "Signup":
//             $isValid=true;
//         $newUserData=[
//             "id"=>"10",
//             "user_name"=>$_POST["user_name"],
//             "email"=>$_POST["email"],
//             "pwd"=> $_POST["pwd"],
//         ];};
//         if($isvalid){
//         $newUser=createUser($newUserData);}
//         else{
//         header("location:../pages/login.php")
//         ;};
// };
if (isset($_POST["action"]) && $_POST["action"] == "signup") {
    
    $newUserData = [
        "id" => "10",
        "user_name" => $_POST["user_name"],
        "email" => $_POST["email"],
        "pwd" => $_POST["pwd"],
    ];
    $usernameIsValid=usernameIsValid($_POST["user_name"]);
    $emailIsValid=emailIsValid($_POST["email"]);
    $pwdIsValid=pwdIsValid($_POST["pwd"]);
    if ($usernameIsValid["isValid"] &&$emailIsValid["isValid"] &&$pwdIsValid["isValid"]) {
        $newUser = createUser($newUserData);
        if ($newUser) {
            echo '<br><br> Ça a marché je devrai avoir un user en plus';
            header("Location: ../pages/login.php"); 
        } else {
            echo "User creation failed.";
        }
    } else {
        session_start();
        $_SESSION['pwd'] = $_POST["pwd"];
        $_SESSION["user_name"] = $_POST["user_name"];
        $_SESSION["email"] = $_POST["email"];
        $result=usernameIsValid($_POST["user_name"]);
        header("Location: error.php"); 
        
    }
}

//$newUser=createUser($newUserData);
echo"<br><br>Mes users avec les nouveaux<br><br>";
      
foreach ($users as $key => $value) {
    echo "Nom de l'user :". $value[1]."<br>";
    echo "Courriel :". $value[2]."<br><br>";
            };
    ?>
    
