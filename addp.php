<?php
session_start();
if(isset($_SESSION["ID"])){
    $uid =  $_SESSION['ID'];
    extract($_POST);
    //header ("Location: home.php");
}
echo $uid;
if(isset($_POST['save'])){
    include 'config.php';
    $sql=mysqli_query($conn,"UPDATE  register SET address='$address' where ID=$uid");
    header("Location: home.php");
    //$row  = mysqli_fetch_array($sql);
    // if(is_array($row))
    // {
    //     //$_SESSION["address"] = $row['address'];
    //     header("Location: home.php"); 
    // }
    // else {
    //     echo "invalid";
    // }
   
}