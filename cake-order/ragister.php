<?php 

include 'conn.php';

$query = "SELECT * FROM CAKE_ORDER";
if(!mysqli_query($conn,$query)){
    $createtbl = "CREATE TABLE cake_Order(
        cust_Name text,
        Mob int(10),
        Email text,
        list_of_Cake text,
        Rate int(10),
        Qty int(3),
        total_Amount int(10)
    )";
    $tblchk = mysqli_query($conn,$createtbl);
    if(!$tblchk){
        echo mysqli_error($conn);
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../emp_demo/bootstrap.min.css" rel="stylesheet">
    <style>
        form{
            padding:30px;
            background-color:lightgray;  
        }
        .error{
            color:red;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 style="text-align:center;">Ragister</h1>
        <form action="" mathod="post" class="bg-danger" style="margin:30px;">
            <div class="form-group">
                <label for="">Name:</label>
                <input type="text" name="cname" class="form-control">
            </div>     
            <div class="form-group">
                <label for="">Mobile No:</label>
                <input type="text" name="mob" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Email:</label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="">List Of Cake:</label>
                <select name="" name="cake" class="form-control">
                    <option value="select">-SELECT- </option>
                    <option value="red">RED-VELVET</option>
                    <option value="royal">ROYAL-CHOCALET</option>
                    <option value="venila">VENILA-FLEVER</option>
                    <option value="mango">MANGO-MASTI</option>
                    <option value="pinepal">PINEPAL</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Rate:</label>
                <select name="" name="rate" class="form-control">
                    <option value=""></option>
                    <option value="">2000</option>
                    <option value="">1200</option>
                    <option value="">1000</option>
                    <option value="">1300</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Quntity:</label>
                <input type="number" name="qty" class="form-control">
            </div>
            <!-- <div class="form-group">
                <label for="">total_Amount:</label>

            </div> -->
            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-dark">
                <a href="index.php">back to home</a>
            </div>
    
        </form>
    </div>
</body>
</html>