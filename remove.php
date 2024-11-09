<?php
$id= $_GET['id'];
include 'dataconnect.php';
$sql1="delete from cart where id='$id'";
$result1 = mysqli_query($conn, $sql1);
if($result1)
{
    header("location:menu.php");
}
?>