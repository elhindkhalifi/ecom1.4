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

//recuperer une ligne dans un user
$result1=mysqli_query($conn,"SELECT*FROM user WHERE id=2");

$data1=mysqli_fetch_row($result1);
echo"<br>";
echo"<br>";
echo"premier fetch";
echo"<br>";
var_dump($result1);
echo"<br>";
echo"<br>";
var_dump($data1);

$result2=mysqli_query($conn,"SELECT*FROM user WHERE id=1");

$data2=mysqli_fetch_assoc($result2);
echo"<br>";
echo"<br>";
echo"second fetch";
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
echo"second fetch";
echo"<br>";
var_dump($result3);
echo"<br>";
echo"<br>";
var_dump($data3);
?>