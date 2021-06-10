<?php

    $username = "root";
    $passward = "";
    $db = "chandan3";
    $server = "localhost";

    $conn = mysqli_connect($server,$username,$passward,$db);
    if($conn){
        //echo "connection sucessful";
        ?>
        <script> alert('connection successful')</script>
        <?php
    }else{
       
        echo "connection not sucessful";
    }
    ?>