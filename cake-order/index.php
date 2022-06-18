<?php

include 'conn.php';

if(isset($_REQUEST['submit'])){
    header('location:ragister.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAKE-ORDER</title>
    <link href="../emp_demo/bootstrap.min.css" rel="stylesheet">
    <style>
        h2,h1,h5{
            color:white; 
        }
        a{
            float:right;
        }
        body{
            background-image: url("image/body-cake.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            opacity: 0.9;
        }
        .center{
            transform:translate(10%,100%);
        }
        button{
            margin-top:50px;
        }




    </style>
</head>
<body>
    <nav class=" navbar bg-danger p-3">
        <h2>Sweet Cake</h2>
        <a href="ragister.php" class="btn btn-outline-dark btn-lg">Ragister</a>
    </nav>
    <div class="center">
        <h1>Always Fresh & Testy</h1>
        <h5>The best things in life are sweet</h5>  
        <button class="btn btn-danger" >ORDER NOW </button>

    </div>
    
</body>
</html>