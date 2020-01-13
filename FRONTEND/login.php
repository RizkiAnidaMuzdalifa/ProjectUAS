<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/app.css">
    
    <link rel="shortcut icon" type="favicon/favicon.gif" href="favicon/favicon.gif"/>

    <title>GAJIH</title>
</head>

<body>
    <div class="container-login container-fluid">
        <div class="form-login">
            <div class="card shadow-lg" style="width: 30rem;">
                <div class="card-header text-center">
                    <h2>Form Login Admin</h2>
                </div>
                <div class="card-body">
                   <form  action="proses_login.php" method="post">
                       <div class="form-group">
                           <label for="username">Username</label>
                           <input type="text" class="form-control" name="username" id="username">
                           <!-- <span style="color: red"><?=$errUser?></span> -->
                       </div>
                       <div class="form-group">
                            <label for="password">password</label>
                            <input type="password" name="password" id="password" class="form-control">
                            <!-- <span style="color: red"><?=$errPass?></span> -->
                       </div>
                       <button type="submit" class="btn btn-cost btn-lg btn-block" name="sumbit" id="sumbit" value="submit">Login</button>
                   </form>
                </div>
            </div>
        </div>
    </div>
    <script src="asset/js/jquery-3.4.1.min.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>
</body>

</html>