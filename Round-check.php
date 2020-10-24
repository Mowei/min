<?php 
session_start();
try{
    $arr = array( "R1" => $_SESSION['R1'] , "R2" => $_SESSION['R2'], "R3" => $_SESSION['R3'], "R4" => $_SESSION['R4'], "R5" => $_SESSION['R5'], "R6" => $_SESSION['R6']); 
    echo json_encode($arr); 

} catch(PDOException $e) {    
    echo "Connection failed: " . $e->getMessage();
}
?>