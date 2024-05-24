<?php
session_start(); 
if(isset($_SESSION["ID"])){
include 'config.php';
$ID= $_SESSION["ID"];
$sql=mysqli_query($conn,"SELECT * FROM register where ID='$ID' ");
$row  = mysqli_fetch_array($sql);
}else{
    header ("Location: login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<script src="./tinymce/tinymce.min.js"></script>
 <script> tinymce.init({
    selector:'#editor'
 });
</script>
<title><h1>Welcome to Address Portal</h1></title>
</head>
<body>
    <div>
    <form action="addp.php" method="post" >
    <h2>Enter Your Address</h2>
    <div class="form-group">
    <textarea name="address" id="editor" rows="10" cols="50" placeholder="Address"><?php if(!empty($row['address']) && $row['address']!= NULL) { echo $row['address']; }else{ echo "";} ?></textarea>
        </div>
        <div class="form-group">
            <button type="submit" name="save" class="btn btn-success btn-lg btn-block">Continue</button></div>
    </form>
</div>
</body>
</html>
