<?php 
if(isset($_POST['bill']))
{
    include 'dataconnect.php';
    session_start();
    $user=$_SESSION['user'];
    $sql3 = "delete  FROM `cart` where username='$user' ";
    $result3 = mysqli_query($conn, $sql3);
    if($result3)
    {
        echo '<script>window.location.href = "menu.php";</script>';
    }
}
        ?>