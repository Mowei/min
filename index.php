<!DOCTYPE HTML>
<html>

<head>
    <title>冒險啟航</title>
    
    <script src="assets/js/jquery.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

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
                            <input type="text" id="account" class="form-control" placeholder="小隊稱號">

                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" id="password" class="form-control" placeholder="密碼">
                        </div>
                        <div class="row align-items-center remember">
                            <input type="checkbox">記住我
                        </div>
                        <div class="form-group">
                            <input type="" id="btn1" value="開始旅程" class="btn float-right login_btn">
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-center links">
                        還沒拿到冒險手冊?<a href="Signup-page.html">點我領取</a>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="Password-reset.html">弄丟了你的冒險手冊？</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $("#btn1").click(function() {
            $.getJSON("select-user-info-set-session.php", {
                    id: $("#account").val(),
                    pas: $("#password").val()
                }, function(result) {
                    if (result.match == 1) {
//                        //call set user cookie php
//                        $.getJSON("select-user-info-set-session.php", {UID: $("#account").val()} ,function(){})
//                        
                        window.location.href = "Mainpage.php";
                    } else {
                        alert("帳號密碼錯誤");
                    }
                })
                .done(function() {
//                    alert('getJSON request succeeded!');
                })
                .fail(function(jqxhr, textStatus, errorThrown) {
                    alert('getJSON request failed! ' + textStatus);
                })
        });
    </script>
</body></html>
