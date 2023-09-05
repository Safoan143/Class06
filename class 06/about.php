<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app.css">
    <title></title>
</head>
<body style="text-align: center;">

<h3 style="font-size: 18px;">02 : Auth Sysyem</h3><br>
<!-- php Start -->

<?php

// print_r($_REQUEST ['email_Check'] );
// echo "<br>";
// print_r($_REQUEST ['password_Check']);
// echo "<br>";

$UserName = "chowdhurytoha7@gmail.com";
$Password = "@Safoan143#";


if($UserName ==($_REQUEST ['email_Check'] )){
    if($Password ==($_REQUEST ['password_Check'])){
        echo'<span>&#9989;</span> ';
        echo "You Are Log In";
       

    }else{
        echo '<span>&#10060;</span> ';
        echo " Wrong Password";
    }
}else{
    echo'<span>&#x274C;</span> ';
    echo "Incorrect Email Address";
}

?>


<!-- php end -->

</body>
</html>