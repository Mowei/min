<?php 
header('Content-Type:text/html;Charset=utf-8'); 
session_start();
$servername = "localhost";
$username = "id11968104_emperor_u";
$password = "anna80529";
$database = "id11968104_mingdb";
$round = $_GET['round'];    //CP
$UName = $_SESSION['UName'];    //UserNmae
$SID = $_GET['SID'];    //R
$_SESSION[$SID] = '1'; //open next round

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $input = array(':round' => $round);
    $sql = "UPDATE `MainTable` SET `" . $round ."` = '1' WHERE `TeamName` = '$UName'";
    echo $sql;
    $sth = $conn->prepare($sql);
    $sth->execute();

} catch(PDOException $e) {    
    echo "Connection failed: " . $e->getMessage();
    $arr = array( "res" => -1); 
    echo json_encode($arr); 
}
?>
