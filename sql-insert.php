<?php 
header('Content-Type:text/html;Charset=utf-8'); 
$servername = "localhost";
$username = "id11968104_emperor_u";
$password = "anna80529";
$database = "id11968104_mingdb";
$teamname=$_GET['teamname'];
$tpassword=$_GET['tpassword'];
$Membernum=$_GET['Membernum'];


try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //先確認無重複TeamName
    $sql = "SELECT * FROM `MainTable` WHERE `TeamName` = '$teamname'";
//    echo "SQL字串: $sql <br/>";
    $query = $conn->query($sql);
    $count = $query->rowCount();
    if ($count == 0){
        //資料存入DB
        $sql_insert = "INSERT INTO `MainTable` (`TeamName`,`Password`,`TeamAmount`) VALUES ('$teamname','$tpassword',$Membernum)"; // 指定SQL字串
        
        $conn->exec($sql_insert);
//        echo "SQL字串: $sql_insert <br/>";

        //撈回DB賦予的TeamID
        $sql2 = "SELECT TeamID FROM `MainTable` WHERE `TeamName` = '$teamname'";
//        echo "SQL字串: $sql2 <br/>";
        $sth = $conn->prepare($sql2);
        $sth->execute();
        $teamid = $sth->fetchColumn(0);
        

        //Json回去
        $arr = array( "res" => 1 , "teamid" => $teamid); 
        echo json_encode($arr); 
    }
    else{
        $arr = array( "res" => 0); 
        echo json_encode($arr); 
    }

} catch(PDOException $e) {    
    echo "Connection failed: " . $e->getMessage();
    $arr = array( "res" => -1); 
    echo json_encode($arr); 
}
?>
