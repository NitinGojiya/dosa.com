<?php
session_start();
$id = $_GET['id'];
$qty=$_GET['no'];


include "dataconnect.php";
$sql = "select * from menuitem where id=$id";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_array($result)) {
    $name = $row['name'];
    $price = $row['price'];
    $photo = $row['photo'];
}

$stotal = $price * $qty;



if ($result) {
   
        $user=$_SESSION['user'];
    $sql1 = "INSERT INTO `cart`( `name`, `price`, `qty`, `photo`, `subtotal`,`username`) VALUES ('$name','$price','$qty','$photo','$stotal','$user')";
    $result1 = mysqli_query($conn, $sql1);
    if ($result1) {
        header("location:menu.php");
    }
}
?>