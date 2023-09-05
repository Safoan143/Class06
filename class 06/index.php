<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap link here -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- css link here -->
    <link rel="stylesheet" href="app.css">
    <title>Document</title>
</head>
<body>
<div class="prime_number">
    <h4>01 : Prime Number Check</h4>
<?php

// prime Number Check //
$num = 13;
$remainder = 0;
for($i = 2; $i <$num; $i++){

    if($num % $i == 0){
       
        $remainder =1;
        break;
        
    }
}

if($remainder==0){
    echo'<span>&#9989;</span> ';
    echo "Yeah! $num is an Prime Number. ";
}else{
    echo " $num Is not prime number";
}

// prime Number check End //

?>
</div>
<br><br>
<div class="mb-3 col-4 mx-auto mt-5">
    <form action="./about.php" method="POST">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input name="email_Check" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input name="password_Check" type="password" class="form-control" id="exampleInputPassword1">
    <button type="submit" class="btn btn-primary mt-3 ">Submit</button>
  </div>
</form>
</body>
</html>