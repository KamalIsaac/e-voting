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
    
</head>
<body>
    
</body>
</html>