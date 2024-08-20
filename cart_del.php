<?php 

if(isset($_POST['bill']))
{
   
   
   
    include 'dataconnect.php';
    session_start();
    $user=$_SESSION['user'];
// insert
$sql="select * from `cart` where username='$user'";
$result=mysqli_query($conn,$sql);
while ($row = mysqli_fetch_array($result)) {
    $name=$row['name'];
    $price=$row['price'];
    $qty=$row['qty'];
    $photo=$row['photo'];
    $subtotal=$row['subtotal'];
    $username=$row['username'];
    $action="Not Accept";
    $sql="INSERT INTO `admin_cart`( `name`, `price`, `qty`, `photo`, `subtotal`, `username`,`action`) VALUES ('$name','$price','$qty','$photo','$subtotal','$username','$action')";
    $result1=mysqli_query($conn,$sql);
}
//    delete 
    $sql3 = "delete  FROM `cart` where username='$user' ";
    $result3 = mysqli_query($conn, $sql3);
    if($result3)
    {
        echo '<script>window.location.href = "menu.php";</script>';
    }
}
        ?>