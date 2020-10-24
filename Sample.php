<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE HTML>
<html>
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
<head>
	<title>Login Page</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="assets/css/Login.css">
</head>

<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>登入你們的冒險手冊</h3>
			</div>
			<div class="card-body">
				<form>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="小隊稱號">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="密碼">
					</div>
					<div class="row align-items-center remember">
						<input type="checkbox">記住我
					</div>
					<div class="form-group">
						<input type="submit" value="開始旅程" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					還沒拿到冒險手冊?<a href="#">點我領取</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="#">弄丟了你的冒險手冊？</a>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
