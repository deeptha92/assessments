<?php
include '../includes/dbconnection.php';

$name =htmlspecialchars($_POST['name']);
$regno = htmlspecialchars($_POST['regno']);
$nic = htmlspecialchars($_POST['nic']);
$email = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);
$repassword = htmlspecialchars($_POST['repassword']);

$sql1="insert into student values ('$name','$regno','$nic','$email','$password')";

if(mysqli_query($conn, $sql1)){
    ?>
    <script type="text/javascript">
        confirm("successfully Added");
    </script>
    <?php

   
   // header("Location: http://localhost:1234/asm/addStudents.php");
   
} else {
    echo 'post failed';
}
    



