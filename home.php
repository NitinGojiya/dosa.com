<?php
   include 'nav.php';
   ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    body{
      min-height: 100vh;
        width: 100%;
        background-image: linear-gradient(rgba(0,0,0,0.85),rgba(0,0,0,0.70)), url(back.jpg);
        background-size: cover;
        background-position: center;
    }
    .intro{
  /* background: rgb(2,0,36); */
  /* background: linear-gradient(90deg, rgba(2,0,36,1) 5%, rgba(9,9,121,1) 47%, rgba(8,32,136,1) 66%, rgba(0,212,255,1) 100%); */
    background-color: #E1D7B7;
    color: #000;
    font-size: 2rem;
    display: flex;
    align-items: center;
    justify-content: center;
   
}
.tbl{
  
    margin-top: 70px;
    margin-bottom: 50px;
    margin-left: 100px;
    width: 1000px;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap ;
    gap: 30px;
    align-items: center;
    justify-content:space-evenly;
}
.intro{
  display: flex;
  flex-direction: column;
}

.fancy {
 background-color: transparent;
 border: 2px solid #000;
 border-radius: 0;
 box-sizing: border-box;
 color: #fff;
 cursor: pointer;
 display: inline-block;
 float: right;
 font-weight: 700;
 letter-spacing: 0.05em;
 margin: 0;
 outline: none;
 overflow: visible;
 padding: 1.25em 2em;
 position: relative;
 text-align: center;
 text-decoration: none;
 text-transform: none;
 transition: all 0.3s ease-in-out;
 user-select: none;
 font-size: 13px;
}

.fancy::before {
 content: " ";
 width: 1.5625rem;
 height: 2px;
 background: black;
 top: 50%;
 left: 1.5em;
 position: absolute;
 transform: translateY(-50%);
 transform-origin: center;
 transition: background 0.3s linear, width 0.3s linear;
}

.fancy .text {
 font-size: 1.125em;
 line-height: 1.33333em;
 padding-left: 2em;
 display: block;
 text-align: left;
 transition: all 0.3s ease-in-out;
 text-transform: uppercase;
 text-decoration: none;
 color: black;
}

.fancy .top-key {
 height: 2px;
 width: 1.5625rem;
 top: -2px;
 left: 0.625rem;
 position: absolute;
 background: #e8e8e8;
 transition: width 0.5s ease-out, left 0.3s ease-out;
}

.fancy .bottom-key-1 {
 height: 2px;
 width: 1.5625rem;
 right: 1.875rem;
 bottom: -2px;
 position: absolute;
 background: #e8e8e8;
 transition: width 0.5s ease-out, right 0.3s ease-out;
}

.fancy .bottom-key-2 {
 height: 2px;
 width: 0.625rem;
 right: 0.625rem;
 bottom: -2px;
 position: absolute;
 background: #e8e8e8;
 transition: width 0.5s ease-out, right 0.3s ease-out;
}

.fancy:hover {
 color: white;
 background: black;
}

.fancy:hover::before {
 width: 0.9375rem;
 background: white;
}

.fancy:hover .text {
 color: white;
 padding-left: 1.5em;
}

.fancy:hover .top-key {
 left: -2px;
 width: 0px;
}

.fancy:hover .bottom-key-1,
 .fancy:hover .bottom-key-2 {
 right: 0;
 width: 0;
}
.food{
  padding: 100px;
}
.fooditem{
  height: 200px;
  width: 200px;border-radius: 50px;
background: #e7e4e4;
box-shadow:  20px 20px 60px #c4c2c2,
             -20px -20px 60px #ffffff;
  display: flex;
  align-items:center;
  justify-content: flex-end;
  flex-direction: column;
}
.food{
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  gap: 50px;
}
.hfood{
  font-size: 2rem;
  color: #fff;
  text-transform: capitalize;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}
.foodcard{
  display: flex;
  align-items: center;
  justify-content: center;
  flex-wrap: wrap;
  gap: 10px;
}
  </style>
  </head>
  <body>
 
    <div>
 

    </div>
    <div class="slider">
    <div id="carouselExampleInterval" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="slider/download (1).jpeg" height="400px" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="slider/download (3).jpeg" height="400px" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="slider/download (2).jpeg" height="400px" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </div>
  <section class="intro">
 <div class="h">
      <div><i class="fa-solid fa-chair"></i><span style="color:red;font-weight:500;">Book Your Table Now </span> <br><br>Have a Look at Available Tables</div>
      </div>
      <div class="tbl">
      
      <?php
 include "dataconnect.php";
 $sql = "SELECT * FROM `reservation` WHERE status='unbook'";
              $result = mysqli_query($conn, $sql);
           
              while ($row = mysqli_fetch_array($result)) {
?>
<div>


<a class="fancy" href="booktable.php?tbno=<?php  echo $row['tbno']; ?>">
  <span class="top-key"></span>
  <span class="text"><?php echo "Table  ".$row['tbno']; ?></span>
  <span class="bottom-key-1"></span>
  <span class="bottom-key-2"></span>
</a>
</div>

<?php }?>
      </div>
 

  </section>
  <section class="food">
  <div class="hfood">
      <div><i class="fa-solid fa-utensils"></i> Our Delicious Menu<i class="fa-solid fa-utensils"></i></div>
      </div>
      <div class="foodcard">
      <?php

 $sql1 = "SELECT * FROM `menuitem` ";
              $result1 = mysqli_query($conn, $sql1);
           
              while ($row1 = mysqli_fetch_array($result1)) {
?>
      <div class="card" style="width: 18rem;">
  <img src="<?php echo $row1['photo'] ;?>" class="card-img-top" height="200px" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $row1['name'] ;?></h5>
    <a href="
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
    " class="btn btn-dark">Order online</a>
  </div>
</div>
<?php }?>
      </div>
  
  </section>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
<?php
        include 'footer.php';
   ?>