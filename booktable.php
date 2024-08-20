<?php
   include 'nav.php';
   ?>
<?php
// Initialize the time variable
// $time_value = isset($_POST['time_input']) ? $_POST['time_input'] : date('H:i');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Time Input Example</title>
    <style>
      body{
        background: rgb(0,27,36);
background: linear-gradient(90deg, rgba(0,27,36,1) 5%, rgba(136,107,85,1) 47%, rgba(60,64,61,1) 66%, rgba(159,167,168,1) 100%);
      }
.form-container {
  width: 300px;
  background: linear-gradient(180deg,rgb(0, 183, 255) 25%,rgb(255, 255, 255) 20%);
  height: 550px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  position: relative;
}

.form {
  width: 80%;
  display: flex;
  flex-direction: column;
  margin-top: 40px;
}

.form-container p {
  position: absolute;
  top: 10%;
  left: 10%;
  font-size: 30px;
  font-weight: 900;
  color: rgb(255, 255, 255);
}

.form-container label {
  color: rgb(40, 42, 44);
  margin-top: 15px;
  margin-bottom: 5px;
  font-size: 15px;
}

.form-container .input {
  padding: 10px;
  height: 35px;
  border: none;
  background-color: rgb(224, 231, 236);
}

.form-container .input:focus {
  outline: none;
}

.form-container button {
  border: none;
  height: 35px;
  margin-top: 30px;
  background-color: rgb(0, 183, 255);
  color: white;
  font-size: 16px;
}
.tbook{
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 50px;
}
    </style>
</head>
<body>

<section class="tbook">
    <div>
   
<div class="form-container">
    <p>Book Table No <?php $tbno=$_GET['tbno']; echo $tbno;  ?></p>
<form class="form" method="post">
    <label>Name</label>
    <input type="text" class="input" placeholder="Enter yout Name" name="name">
    <label>Mobile</label>
    <input type="password" class="input" placeholder="Mobile" name="mo"> 
  
    <label for="time_input">Select a time:</label>
    <input type="time" id="time_input" class="input" name="time_input" value="<?php echo $time_value; ?>">
    <button>Submit</button>
</form>
</div>
    </div>
</section>



    


<?php
// Print the submitted time value
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'dataconnect.php';
    $time_value = isset($_POST['time_input']) ? $_POST['time_input'] : date('h:i');
    $tt=htmlspecialchars($time_value);
    $name=$_POST['name'];
    $name=$_POST['mo'];
    $status="book";
    // echo "<p>You selected: " . $tt . "</p>";
    $sql="UPDATE `reservation` SET `name`='$name',`mo`='$mo',`time`='$tt',`status`='$status' WHERE tbno='$tbno'";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        echo "<script>alert('table is booked');window.location.href = 'home.php';</script>";
    }
}
?>

</body>
</html>
