<?php
include("include/connect.php");
$result = mysqli_query($con, "UPDATE testing set " . $_POST["column"] . " = '".$_POST["editval"]."' WHERE  id=".$_POST["id"]);
?>