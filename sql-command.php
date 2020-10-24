<?php
$servername = "localhost";
$username = "id11968104_emperor_u";
$password = "anna80529";
$database = "id11968104_mingdb";
$testvalue = 4;
    
try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    
    $sql_insert = "INSERT INTO `MainTable` VALUES ($testvalue,$testvalue,$testvalue,$testvalue,$testvalue,$testvalue,$testvalue,$testvalue,$testvalue,$testvalue)"; // 指定SQL字串
    
    
    $conn->exec($sql_insert);
    echo "SQL字串: $sql_insert <br/>";
    
    $sql = "SELECT * FROM `MainTable`";
    echo "SQL字串: $sql <br/>";
    $query = $conn->query($sql);
    $datalist = $query->fetchAll();
    
    foreach ($datalist as $datainfo)
    {
        echo $datainfo['TeamID'] . "<br>";
    }

} catch(PDOException $e) {    
    echo "Connection failed: " . $e->getMessage();
    }
?>