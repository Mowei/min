<?php 
session_start();

if($_SESSION['UName'] == NULL){
    echo "<script type='text/javascript'>";
    echo "window.location.href='index.php?'";
    echo "</script>"; 
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>溯源旅程</title>

    <script src="assets/js/jquery.min.js"></script>
    <!-- Bootstrap core CSS -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

    <!-- Custom styles for this template -->
    <link href="assets/css/main2.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">

    <script src="assets/js/chart.js"></script>

</head>

<body style="background-color:#87CEFA;">

    <!-- Fixed navbar -->
    <div>
        <li><a href="#" id="logout">登出</a></li>
        <li><a href="Mainpage.php">首頁</a></li>
    </div>
    <div class="container">
        <div class="row centered mt grid">
            <h3>尋寶日記</h3>
            <div class="mt"></div>
            <div class="col-lg-4" align="center" id="R1">
                <div class="card" style="width: 18rem;">
                    <a href="a01.html"><img src="images/mo05.png" height="150px" width="102px" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <p class="card-text">第一關</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4" align="center" id="R2">
                <div class="card" style="width: 18rem;">
                    <a href="a02.html"><img src="images/mo.png" alt="..." width="102" height="150" class="card-img-top"></a>
                    <div class="card-body">
                        <p class="card-text">第二關</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4" align="center" id="R3">
                <div class="card" style="width: 18rem;">
                    <a href="a03.html"><img src="images/mo03.png" alt="..." width="98" height="150" class="card-img-top"></a>
                    <div class="card-body">
                        <p class="card-text">第三關</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row centered mt grid">
            <div class="mt"></div>
            <div class="col-lg-4" align="center" id="R4">
                <div class="card" style="width: 18rem;">
                    <a href="a04.html"><img src="images/mo06.png" alt="..." width="150" height="150" class="card-img-top"></a>
                    <div class="card-body">
                        <p class="card-text">第四關</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4" align="center" id="R5">
                <div class="card" style="width: 18rem;">
                    <a href="a05.html"><img src="images/mo04.png" alt="..." width="150" height="150" class="card-img-top"></a>
                    <div class="card-body">
                        <p class="card-text">第五關</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4" align="center" id="R6">
                <div class="card" style="width: 18rem;">
                    <a href="a06.html"><img src="images/mo02.png" alt="..." width="150" height="150" class="card-img-top"></a>
                    <div class="card-body">
                        <p class="card-text">第六關</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section id="contact"></section>
    <div id="social">
        <div class="container">
            <div class="row centered">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="col-md-3">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                    </div>
                    <div class="col-md-3">
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                    </div>
                    <div class="col-md-3">
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </div>
                    <div class="col-md-3">
                        <a href="#"><i class="fa fa-envelope"></i></a>
                    </div>
                </div>
            </div>
        </div><!-- /container -->
    </div><!-- /social -->
    </div>
    </div>
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script>
        $.getJSON("Round-check.php", function(result) {
                var r2 = document.getElementById("R2");
                if (result.R2 != "1") {
                    r2.style.display = "none";
                }
                var r3 = document.getElementById("R3");
                if (result.R3 != "1") {
                    r3.style.display = "none";
                }
                var r4 = document.getElementById("R4");
                if (result.R4 != "1") {
                    r4.style.display = "none";
                }
                var r5 = document.getElementById("R5");
                if (result.R5 != "1") {
                    r5.style.display = "none";
                }
                var r6 = document.getElementById("R6");
                if (result.R6 != "1") {
                    r6.style.display = "none";
                }
            })
            .done(function() {
                //                    alert('getJSON request succeeded!');
            })
            .fail(function(jqxhr, textStatus, errorThrown) {
                alert('getJSON request failed! ' + textStatus);
            })
        $("#logout").click(function() {
            $.getJSON("destroy_session.php", function() {})
            window.location.href = "Mainpage.php";
        })

    </script>
</body>

</html>
