<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="style.css" rel="stylesheet">
  <style>
@import url('https://fonts.googleapis.com/css2?family=Matemasie&family=New+Amsterdam&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap');
</style>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <header>
    <div class="hstack gap-3">
      <div class="p-2" style="font-family:Matemasie;"><span style="color:red;font-size:2.1em;font-weight:500;">D</span>osa.com</div>
      <div class="p-2 ms-auto pp-2"><a class="rr"  href="home.php">Home</a></div>
      <div class="vr"></div>
      <div class="p-2 pp-2 "> <a class="rr" href="
           <?php 
                 
                 session_start();
                    error_reporting(0);
                    if($_SESSION['login']==true)
                    {
                        echo 'menu.php';
                    }
                    else{
                        echo "login.php";
                    }
                   
                    
                    ?>
      
      ">Menu</a></div>
      <div class="vr"></div>
      <div class="p-2 pp-2"><a class="rr"  href="
      <?php 
                 
                
                    error_reporting(0);
                    if($_SESSION['login']==true)
                    {
                        echo 'order.php';
                    }
                    else{
                        echo "login.php";
                    }
                   
                    
                    ?>
      ">Your orders</a></div>
      <div class="vr"></div>
      <div class="p-2 pp-2"><a class="rr" href="contact.php">Contact</a></div>
      <div class="vr"></div>
      <div class="p-2 pp-2"><a class="rr" href="about.php">About us</a></div>
      <div class="vr"></div>
      <div class="p-2 pp-2"><a class="rr"  href="feedback.php">feedback</a></div>
      <?php 
                 
                 session_start();
                    error_reporting(0);
                    if($_SESSION['login']==true)
                    {
                        echo '<div class="p-2 pp-2"><a class="rr"  href="logout.php"><i class="fa-solid fa-right-from-bracket"></i></a></div>';
                    }
                    else{
                        echo '<div class="p-2 pp-2"><a class="rr"  href="login.php"><i class="fa-solid fa-user"></i></a></div>';
                    }
                   
                    
                    ?>
      
      <div class="p-2">
        <?php
         include "dataconnect.php";
         $user=$_SESSION['user'];
         $sql2 = "SELECT * FROM `cart` where username='$user' ";
         $result2 = mysqli_query($conn, $sql2);
         $cnt=mysqli_num_rows($result2);
          
        ?>
        <font style="background-color:white;border:1px black solid;  padding:10px; color:black; border-radius: 50%;"><?php if($_SESSION['login']==true){echo $cnt;}   ?></font>
        <button class="btn btn-success" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="fa-solid fa-cart-shopping"></i></button>

        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasRightLabel">
              <?php 
            
              $sql1 = "SELECT * FROM `cart` where username='$user'  ";
              $result1 = mysqli_query($conn, $sql1);
          $total=0;
              while ($row1 = mysqli_fetch_array($result1)) {
                    $total=$total+$row1['subtotal'];
              }
              ?>
           Total Bill :-<?php  echo $total;?></h5>
           &nbsp;&nbsp;&nbsp;&nbsp;
        <a href="place_order.php">
           <input type="button" value="Place Order" class="btn btn-success"></a> <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <div>

              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Qty</th>
                    <th scope="col">Total</th>
                    <th scope="col">Action</th>
                  </tr>
                  <tbody>
                </thead>
                <?php
                 if($_SESSION['login']==true){

               
                $sql = "SELECT * FROM `cart` where username='$user' ";
                $result = mysqli_query($conn, $sql);

                while ($row = mysqli_fetch_array($result)) {
                ?>
               
    <tr>
      <th scope="row"><img src="<?php echo $row['photo']; ?>" height="40px"></th>
      <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['price']; ?></td>
                    <td><?php echo $row['qty']; ?></td>

                    <td><?php echo $row['subtotal']; ?></td>
                    <td><a style="border:2px black solid;color:black;" href="remove.php?id=<?php  echo $row['id'];?>" style="color: black;">Remove</a></td>
    </tr>
                  
                <?php }} ?>
                </tbody>
              </table>




            </div>
          </div>
        </div>
      </div>
     
    </div>
  </header>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>