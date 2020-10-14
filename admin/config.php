<?
    
    $siteurl = "http://localhost/training/template/dailyShop/admin/";

    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "password";
    $dbname = "products";

    $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);


    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    ?>