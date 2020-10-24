<?php 
header('Content-Type:text/html;Charset=utf-8'); 

session_start();
    $arr = array( "num" => $_SESSION['TeamAmount']); 

    echo json_encode($arr); 
?>
