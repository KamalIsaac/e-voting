<?php
session_start();

if(!empty($_SESSION['username'])and
!empty($_SESSION['password'])) {
include("../koneksi/koneksi.php");
    define("INDEX",true);
}
?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-voting</title>
    <link rel="stylesheet" href="asset-admin/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset-admin/css/datepicker3.css">
    <link rel="stylesheet" href="asset-admin/css/style.css.css">
    <script src="asset-admin/js/lumino.glyphs.js"></script>
    <link rel="stylesheet" href="asset-admin/alert/dist/sweetalert.css" type="text/css">
    <script src="asset-admin/alert/dist/sweetalert.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="asset-admin/alert/pace/pace.css" type="text/css">
    <script src="asset-admin/alert/pace/pace.js" type="text/javascript"></script>
    <script src="asset-admin/grafik/Chart.bundle.min.js" type="text/javascript"></script>
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapse" data-toggle="collapse" data-target="#sidebar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand"><span>E</span>Voting</a>
                <ul class="user-menu">
                    <li class="dropdown pull-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyphs stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>User <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="?page=ubah_akun"><svg class="glyphs stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>Ubah Akun</a></li>
                            <li><a href="logout.php"><svg class="glyphs stroked cancel"><use xlink:href="#stroked-cancel"></use></svg>Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <form role="search">
            <div class="form-group">
                <input type="text" class="form-control" placholder="search">
            </div>
        </form>
    </div>
</body>
</html>