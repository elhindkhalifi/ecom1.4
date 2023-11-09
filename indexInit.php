<?php
$server="localhost";
$userName="root";
$pwd="";
$db="ecom1";

$conn=mysqli_connect($server, $userName, $pwd, $db);
if ($conn){
    echo"connected to the $db database successfully";
    global $conn;
}else{
    echo"error:not connected";
};
require_once("functions/functions.php");
//recuperer une ligne dans un user avec row
$result1=mysqli_query($conn,"SELECT*FROM user WHERE id=2");
$data1=mysqli_fetch_row($result1);
//$data1=selectUserByIdIndex(2);
echo"<br>";
echo"<br>";
echo"<strong>premier fetch</strong>";
echo"<br>";
var_dump($result1);
echo"<br>";
echo"<br>";
var_dump($data1);

//recuperer une ligne dans un user avec assoc
$result2=mysqli_query($conn,"SELECT*FROM user WHERE id=1");
$data2=mysqli_fetch_assoc($result2);
echo"<br>";
echo"<br>";
echo"<strong>second fetch</strong>";
echo"<br>";
var_dump($result2);
echo"<br>";
echo"<br>";
var_dump($data2);

//recuperer une seule ligne mais en choisissant lordre des colonnes 
$result3=mysqli_query($conn,"SELECT user_name, email, id FROM user WHERE id=1");
$data3=mysqli_fetch_assoc($result3);
echo"<br>";
echo"<br>";
echo"<strong>troisieme fetch</strong>";
echo"<br>";
var_dump($result3);
echo"<br>";
echo"<br>";
var_dump($data3);

//recuperer pusieurs lignes dans un user en utilisant fetch assoc et while
$result4=mysqli_query($conn,"SELECT user_name, email, id FROM user");
$data4=[];
$i=0;
while($rangeeData = mysqli_fetch_assoc($result4)){
    $data4[$i]=$rangeeData;
    $i++;
    echo"<br>";
    echo"<br>";
    echo "nom de l'user :". $rangeeData["user_name"]."<br>";
    echo "courriel :". $rangeeData["email"]."<br>";
};

echo"<br>";
echo"<br>";
echo"<strong>quatrieme fetch</strong>";
echo"<br>";
echo"<br>";
echo "mon array aura :".mysqli_num_rows($result4)."lignes";
echo"<br>";
echo"<br>";
var_dump($result4);
echo"<br>";
echo"<br>";
var_dump($data4);

//recuperer pusieurs lignes dans un user en utilisant fetch assoc et for 
$result5=mysqli_query($conn,"SELECT *FROM user");
$data5=[];
$imax=mysqli_num_rows($result4);
for($i= 0;$i<$imax;$i++){
    $rangeeData=mysqli_fetch_assoc($result5);
    $data5[$i]=$rangeeData;
    echo"<br>";
    echo"<br>";
    echo "Nom de l'user :". $rangeeData["user_name"]."<br>";
    echo "Courriel :". $rangeeData["email"]."<br>";

};

echo"<br>";
echo"<br>";
echo"<strong>cinquieme fetch</strong>";
echo"<br>";
echo"<br>";
echo "mon array aura :".mysqli_num_rows($result5)."lignes";
echo"<br>";
echo"<br>";
var_dump($result5);
echo"<br>";
echo"<br>";
var_dump($data5);

//recuperer pusieurs lignes dans un user en utilisant  fetch row et while 
$result6=mysqli_query($conn,"SELECT * FROM user");
$data6=[];
$i=0;
while($rangeeData = mysqli_fetch_row($result6)){
    $data6[$i]=$rangeeData;
    $i++;
    echo"<br>";
    echo"<br>";
    echo "Nom de l'user :". $rangeeData[1]."<br>";
    echo "Courriel :". $rangeeData[2]."<br>";
};

echo"<br>";
echo"<br>";
echo"<strong>sixieme fetch</strong>";
echo"<br>";
echo"<br>";
echo "mon array aura :".mysqli_num_rows($result6)."lignes";
echo"<br>";
echo"<br>";
var_dump($result6);
echo"<br>";
echo"<br>";
var_dump($data6);

?>