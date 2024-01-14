<?php 

    $con=mysqli_connect("localhost","root","","leaf_now");

    if(!$con){
        die("error".mysqli_connect_error());
    }
    //else{
     //    echo"connection build";
     //}

?>