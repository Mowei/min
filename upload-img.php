<?php 
header('Content-Type:text/html;Charset=utf-8'); 
$servername = "localhost";
$username = "id11968104_emperor_u";
$password = "anna80529";
$database = "id11968104_mingdb";


if ( 0 < $_FILES['myFile']['error'] ) {
    echo 'Error: ' . $_FILES['myFile']['error'] . '<br>';
}
else {
    move_uploaded_file($_FILES['myFile']['tmp_name'], 'uploads/' . $_FILES['myFile']['tmp_name']);
    echo 'Upload Success!';
}

?>