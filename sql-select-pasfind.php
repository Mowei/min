<?php 
header('Content-Type:text/html;Charset=utf-8'); 
$servername = "localhost";
$username = "id11968104_emperor_u";
$password = "anna80529";
$database = "id11968104_mingdb";
$teamid=$_GET['teamid'];
$teamname=$_GET['teamname'];


try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    echo "Connected successfully"; 

    $sql = "SELECT Password FROM `MainTable` WHERE `TeamID` = '$teamid' AND `TeamName` = '$teamname'";
//    echo "SQL字串: $sql <br/>";
    $query = $conn->prepare($sql);
    $query->execute();
    $count = $query->rowCount();
    $passw = $query->fetchColumn(0);
    
    if($count == 1){
        $arr = array( "res" => 1 , "password" => $passw); 
        echo json_encode($arr); 
    }
    else{
        $arr = array( "res" => 0); 
        echo json_encode($arr); 
    }

    
} catch(PDOException $e) {    
    echo "Connection failed: " . $e->getMessage();
}
?>
