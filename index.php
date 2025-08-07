<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="asset-admin/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset-admin/css/style.css">
</head>
<body>
    <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <form role="form" method="post" class="form-horizontal" id="form_login" action="loginproses.php">
                    <fieldset>
                        <div class="form-group">
                        <input class="form-control" placeholder="username" name="username" type="username" autofocus="">
                        </div>
                        <div class="form-group">
                        <input class="form-control" placeholder="password" name="password" type="password" autofocus="">
                        </div>
                        <div class="checkbox"></div>
                        <input type="submit" value="Login" class="btn btn-block btn-info" name="login">
                    </fieldset>    
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>