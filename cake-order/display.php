<?php

include 'conn.php';


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
        table{
            margin:auto;
            border:2px solid black;
        }
        th,td{
            padding:10px;
            border-bottom:2px solid black;
            border-right:2px solid blue;
            text-align:center;
        }
    </style>
</head>
<body>
    <div class="container">
        <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>C_NAME</th>
                <th>Mobile</th>
                <th>Email</th>
                <th>List_Of_Cake</th>
                <th>Rate</th>
                <th>Quntity</th>
                <th>Total_Amount</th>
            </tr>
        </thead>
        <tbody>
        <?php  while ( $data = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <th><?php echo $data['id']; ?></th>
                <th><?php echo $data['cust_Name']; ?></th>
                <th><?php echo $data['Mob']; ?></th>
                <th><?php echo $data['Email']; ?></th>
                <th><?php echo $data['list_of_Cake']; ?></th>
                <th><?php echo $data['Rate']; ?></th>
                <th><?php echo $data['Qty']; ?></th>
                <th><?php echo $data['total_Amount']; ?></th>
                <th><a href="">DELETE</a></th>
                <th><a href="">EDIT</th>
            </tr>
        <?php } ?>
        </tbody>
        </table>
    </div>
</body>
</html>