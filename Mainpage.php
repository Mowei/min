<?php 
session_start();
echo '目前組別：';
echo $_SESSION['UName'];
echo '關卡進度：';
echo $_SESSION['R1'];
//if($_SESSION['UID'] == NULL){
//    echo "<script type='text/javascript'>";
//    echo "window.location.href='index.php?'";
//    echo "</script>"; 
//}
?>

<!DOCTYPE HTML>
<html>

<head>
    <title>溯源旅程</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript>
        <link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>

<body class="is-preload" style="background-color:#87CEFA;">
    <div>
        <li><a href="#" id="logout">登出</a></li>
    </div>
    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Header -->
        <header id="header">
            <div class="logo">
                <span class="icon fa-gem"></span>
            </div>
            <div class="content">
                <div class="inner">
                    <Image>
                    </Image>
                    <h1>
                        <p>熙熙攘攘的台北街道上，偶爾會看到水圳遺址，
                            卻不曾為它停下腳步。這存在近300年的水路，和台北的經濟發展息息相關，那條承載著先民汗水和孩子們回憶的道路，值得被認識，使瑠公圳的記憶被傳承下去。.</p>
                    </h1>
                </div>
            </div>
            <nav>
                <ul>
                    <li><a href="front-video.html">前導片</a></li>
                    <li><a href="StartGame.html">開始遊戲</a></li>
                    <li><a href="Bag.html">背包</a></li>
                    <li><a href="Contect.html">聯絡我們</a></li>
                </ul>
            </nav>
        </header>
       

    </div>
    <!-- BG -->


    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>
    
    <script>
        $("#logout").click(function(){
            $.getJSON("destroy_session.php", function() {})
            window.location.href = "index.php";    
        })
        
    </script>
</body>


</html>
