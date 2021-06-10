<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="POST">
    <h2> Submit your Form </h2>
    <p>Your name <input type="text" name="name" id="name" placeholder = "Enter your name" ></p>
    <p>Your mother name <input type="text" name="mname" id="mname" placeholder = "Enter your mother name" ></p>
    <p>Enter your email <input type="email" name="email" id="email" placeholder = "enter your email"></p>
    <input type="submit" name="submit" value="register">
    </form>
</body>
</html>
<?php
    include 'connection.php';
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $mname = $_POST['mname'];
        $email = $_POST['email'];

        $insertquery = "insert into chanda(name,mname,email) values ('$name','$mname','$email')";
        $res = mysqli_query($conn,$insertquery);
        if($res){
            ?>
            <script> alert('data inserted')</script>
            <?php
        }else{
            ?>
            <script> alert('data not inserted')</script>
            <?php
        }

    }
?>