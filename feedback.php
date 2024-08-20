<?php 
include 'dataconnect.php';
$id=$_POST['id'];
$feed=$_POST['feed'];

$sql2 = "UPDATE `final_order` SET `feedback` = '$feed' WHERE `final_order`.`id` = '$id'";
    $result2 = mysqli_query($conn, $sql2);
    if ($result2) {
        // header("location:menu.php");
        //echo "<script>alert('done..');</script>";
        echo '<script>window.location.href = "feedback_history.php";</script>';
    }
?>ss