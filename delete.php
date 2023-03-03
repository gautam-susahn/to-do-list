<?php
include "config.php";
$Id=$_GET['ID'];
mysqli_query($con,"DELETE FROM `tbltodo` WHERE id=$Id");
header("location:index.php");

?>