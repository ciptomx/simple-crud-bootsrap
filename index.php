<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container" style="margin-top: 10px">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center signin-title">Form Login</h1>
            <div class="account-wall">
                <form class="form-signin" action="login.php" method="post">
                <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
                <input type="password" name="password" class="form-control" placeholder="Password" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit" name="login" style="margin-top: 10px">
                    Login</button>
                <a href="#" class="pull-right need-help">Bantuan? </a><span class="clearfix"></span>
                </form>
            </div><br>
            <p class="text-center"> Belum punya akun? <a href="daftar.php" class="text-center">Klik disini </a>
        </div>
    </div>
</div>
</body>
</html>