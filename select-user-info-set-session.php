<?php 
header('Content-Type:text/html;Charset=utf-8'); 
session_start();

$servername = "localhost";
$username = "id11968104_emperor_u";
$password = "anna80529";
$database = "id11968104_mingdb";
$id=$_GET['id'];
$pas=$_GET['pas'];

//$id='1';
//$pas='1';

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    echo "Connected successfully"; 
    

    $sql = "SELECT * FROM `MainTable` WHERE `TeamName` = '$id' AND `Password` = '$pas'";
//    echo "SQL字串: $sql <br/>";
    $query = $conn->query($sql);
    $count = $query->rowCount();
    
    if($count == 1){
    $sth = $conn->prepare($sql);
    $sth->execute();
    $row = $sth->fetch(PDO::FETCH_ASSOC);
    


    $_SESSION['UName'] = $id;
    $_SESSION['R1'] = $row['CP1'];
    $_SESSION['R2'] = $row['CP2'];
    $_SESSION['R3'] = $row['CP3'];
    $_SESSION['R4'] = $row['CP4'];
    $_SESSION['R5'] = $row['CP5'];
    $_SESSION['R6'] = $row['CP6'];
    $_SESSION['TeamAmount'] = $row['TeamAmount'];
    

    }
    
    $arr = array( "match" => $count); 

    echo json_encode($arr); 
    
} catch(PDOException $e) {    
    echo "Connection failed: " . $e->getMessage();
}
?>