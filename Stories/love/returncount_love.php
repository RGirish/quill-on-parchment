<?php
include("../../conn.php");

$sql="SELECT count(title) FROM tbl_status WHERE type='s' AND status='a' AND language='e' AND genre='lr';";
$result=mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
echo $row[0];
mysqli_close($con);
?>