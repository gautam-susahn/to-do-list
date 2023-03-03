<?php

include "config.php";
$LIST=$_POST['list'];
mysqli_query($con,"INSERT INTO `tbltodo`( `list`) VALUES ('$LIST')");
header("location:index.php");
?>