
<a href="pages/signUp.php">enregistrement</a>
<?php
require_once("functions/functions.php");
require_once("config/connexion.php");
//recuperer une ligne dans un user avec row
$data1=selectUserByIdIndex(2);
showData("premier",$data1);

//recuperer une ligne dans un user avec assoc
$data2=selectUserByIdAssoc(1);
showData("second",$data2);

//recuperer une seule ligne mais en choisissant lordre des colonnes 
$data3=selectUserByIdAssocOrder(1);
showData("troisieme",$data3);

//recuperer pusieurs lignes dans un user en utilisant fetch assoc et while
$data4=getAllUsersAssoc() ;
showData("quatrieme",$data4);
foreach ($data4 as $key => $value) {
    echo "Nom de l'user :". $value["user_name"]."<br>";
    echo "Courriel :". $value["email"]."<br><br>";
    };
    

//recuperer pusieurs lignes dans un user en utilisant  fetch row et while 
$data6=getAllUsersIndex() ;
showData("sixieme",$data6);
foreach ($data6 as $key => $value) {
    echo "Nom de l'user :". $value[1]."<br>";
    echo "Courriel :". $value[2]."<br><br>";
    };


//create User AKA Ajouter une ligne a la table user 
// les donnes pourraient venir par exemple de $_POST["email"];
$data7=[
    "user_name"=> "michel",
    "email"=> "michel@michel.ca",
    "pwd"=> "",
];
//$newUser=createUser($data7);
// if($_POST["action"]=="signup"){
// $data8=[
//     "user_name"=>$_POST["user_name"],
//     "email"=>$_POST["email"],
//     "pwd"=> $_POST["pwd"],
// ];
// };
//$newUser=createUser($data8);

//update user AKA changer une ligne dans la table user
$data9=[
    "id"=> "2",
    "user_name"=> "bob",
    "email"=> "bob@bob.ca",
    //"pwd"=> "",
];
//updateUser($data9);

//supprimer un user
//deleteUser(48);








// $toto="hdfihv,,,fhj,";
// echo$toto;
// echo "<br> <br>";
// /*$string=substr_replace($toto ,"",-1);
// echo$string;*/

// /*$trim=rtrim($toto,",");
// echo $trim;*/
// $trim=trim($toto,",");
// echo $trim;
?>


