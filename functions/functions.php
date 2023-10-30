<?php
function selectUserByIdIndex($id) { 
    //recuperer une ligne dans un user
    global $conn;
    $result=mysqli_query($conn,"SELECT*FROM user WHERE id= ". $id);
    //avec fetch row : tableau indexé
    $data=mysqli_fetch_row($result);
    return $data;
   
}
function selectUserByIdAssoc($id) {
    //recuperer une ligne dans un user
    global $conn;
    $result=mysqli_query($conn,"SELECT*FROM user WHERE id= ". $id);
    //avec fetch row
    $data=mysqli_fetch_assoc($result);
    return $data;
}
function selectUserByIdAssocOrder($id) {
    //recuperer une ligne dans un user en choisissant lordre
    global $conn;
    $result=mysqli_query($conn,"SELECT user_name, email, id FROM user WHERE id= ". $id);
    //avec fetch assoc 
    $data=mysqli_fetch_assoc($result);
    return $data;
}

function getAllUsersAssoc() {
    //recuperer plusieurs lignes
    global $conn;
    $result=mysqli_query($conn,"SELECT* FROM user");
    $data=[];
    $i=0;
    //avec fetch assoc
    while($rangeeData = mysqli_fetch_assoc($result)){
    $data[$i]=$rangeeData;
    $i++;
    };
    //echo "<br> <br>mon array aura :".mysqli_num_rows($result)."lignes <br> <br>";
    return $data;
};

function getAllUsersIndex() {
    //recuperer plusieurs lignes
    global $conn;
    $result=mysqli_query($conn,"SELECT * FROM user");
    $data=[];
    $i=0;
    //avec fetch row
    while($rangeeData = mysqli_fetch_row($result)){
    $data[$i]=$rangeeData;
    $i++;
    };
    return $data;
};

function showData($title,$data) {
    global $conn;
    echo"<br> <br><strong>$title fetch</strong><br> <br>";
    var_dump($data);
    echo "<br> <br>";
};

/*function createUser($data) {
    global $conn;
    //$query="INSERT INTO 'user' ('id', 'user_name', 'email', 'pwd') VALUES (NULL,".$data['user_name']."," .$data['email'].",". $data['pwd'].") ";
    //$result=mysqli_query($conn, $query);
    $query="INSERT INTO user VALUES (NULL,?,?,?)";
    If( $stmt=mysqli_prepare($conn, $query)){
/* Lecture des marqueurs */
/*mysqli_stmt_bind_param($stmt,"s",$data['user_name']);
mysqli_stmt_bind_param($stmt,"s",$data['email']);
mysqli_stmt_bind_param($stmt,"s",$data['pwd']);*/
/* Exécution de la requête*/
//$result= mysqli_stmt_execute($stmt);
//var_dump($result);
//return $result;

/*lecture des variables resultantes*/
//mysqli_stmt_bind_result($stmt,$district);

/* Récupération des valeurs */
//mysqli_start_fetch ($stmt);

/*Fermeture du traitement*/
// mysqli_stmt_close($stmt);} };
 function createUser($data) {
    global $conn;
    $query="INSERT INTO user VALUES (NULL,?,?,?)";
    If( $stmt=mysqli_prepare($conn, $query)){
    /* Lecture des marqueurs */
    mysqli_stmt_bind_param($stmt,"sss",$data['user_name'],$data['email'],$data['pwd']);
    /* Exécution de la requête*/
    $result= mysqli_stmt_execute($stmt);
    echo "<br> <br>";
    echo"coucou je suis la";
    echo "<br> <br>";
    var_dump($result);
    return $result;
        }
        };
    
    


function updateUser($data) {
    global $conn;
    $query= "UPDATE user
             SET user_name=?, email=?, pwd =? 
             WHERE id =?";
    var_dump($query);
     If( $stmt=mysqli_prepare($conn, $query)){
    /* Lecture des marqueurs */
    mysqli_stmt_bind_param($stmt,
    "sssi",
    $data['user_name'],
    $data['email'],
    $data['pwd'],
    $data['id']);
    /* Exécution de la requête*/
    $result= mysqli_stmt_execute($stmt);
    echo "<br> <br>";
    echo"coucou je suis changee";
    echo "<br> <br>";
    var_dump($result);
    return $result;
}};
function updatUser($data) {
    global $conn;
    /*$query= "UPDATE user
             SET user_name=?, email=?, pwd =? 
             WHERE id =?";*/
    var_dump($data);
    $query= "UPDATE user
             SET ";
    foreach($data as $key=>$value) {
        if($key!="id"){
            $query.= $key."=? ,";
           // $query=trim($query,",");

        }
    };
    $query=trim($query,",");
    $query=$query." where id=?";
    var_dump($query);
     If( $stmt=mysqli_prepare($conn, $query)){
    /* Lecture des marqueurs */
    mysqli_stmt_bind_param($stmt,
    "sssi",
    $data['user_name'],
    $data['email'],
    $data['pwd'],
    $data['id']);
    /* Exécution de la requête*/
    $result= mysqli_stmt_execute($stmt);
    echo "<br> <br>";
    echo"coucou je suis changee";
    echo "<br> <br>";
    var_dump($result);
    return $result;
}};


/*function deleteUser($id) {
    global $conn;
    $query= "DELETE FROM user WHERE id = $id";
    $result=mysqli_query($conn, $query);
        echo "<br> <br>";
        echo"coucou je suis supprimee";
        echo "<br> <br>";
        var_dump($result);
        return $result;
    };
//};*/
/*function deleteUser($id) {
    global $conn;
    $query= "DELETE FROM user WHERE id = ?";
    If( $stmt=mysqli_prepare($conn, $query)){
        /* Lecture des marqueurs 
        mysqli_stmt_bind_param($stmt,"i",$id);
        /* Exécution de la requête
        $result= mysqli_stmt_execute($stmt);
        echo "<br> <br>";
        echo"coucou je suis supprimee";
        echo "<br> <br>";
        var_dump($result);
        return $result;
    };
}*/
?>