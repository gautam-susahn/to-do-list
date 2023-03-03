<?php
include "config.php";
$List=$_POST['list'];
$id=$_POST['Id'];
mysqli_query($con,"UPDATE `tbltodo` SET `list`='$List' WHERE Id=$id ");
header("location:index.php");
?>




