<?php
include 'nav.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Welcome</title>
    <style>
        body {
            min-height: 90vh;
            width: auto;
            background-image: linear-gradient(rgba(0, 0, 0, 0.85), rgba(0, 0, 0, 0.70)), url(back.jpg);
            background-size: cover;
            background-position: center;

        }

        .m {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            color: #fff;
        }

        #txt {
            font-size: 4rem;
        }

        #txt2 {
            font-size: 2rem;
        }

        .main {
            text-align: center;
        }

        .p {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 50px;
            text-transform: uppercase;
        }
       
.card {
 width: 190px;
 height: 254px;
 /* background: #3405a3; */
 background-color: rgb(17, 24, 39, 1);
 border-radius: 15px;
 box-shadow: 1px 5px 60px 0px #100a886b;
}

.card .card-border-top {
 width: 60%;
 height: 3%;
 background: #6b64f3;
 margin: auto;
 border-radius: 0px 0px 15px 15px;
}

.card span {
 font-weight: 600;
 color: white;
 text-align: center;
 display: block;
 padding-top: 10px;
 font-size: 16px;
}

.card .job {
 font-weight: 400;
 color: white;
 display: block;
 text-align: center;
 padding-top: 3px;
 font-size: 12px;
}

.card .img {
 width: 70px;
 height: 80px;
 background: #6b64f3;
 border-radius: 15px;
 margin: auto;
 margin-top: 25px;
}

.card button {
 padding: 8px 25px;
 display: block;
 margin: auto;
 border-radius: 8px;
 border: none;
 margin-top: 30px;
 background: #6b64f3;
 color: white;
 font-weight: 600;
}

.card button:hover {
 background: #534bf3;
}
@-webkit-keyframes fade {
  0%   { opacity: 0; }
  100% { opacity: 1; }
}
@-moz-keyframes fade {
  0%   { opacity: 0; }
  100% { opacity: 1; }
}
@-o-keyframes fade {
  0%   { opacity: 0; }
  100% { opacity: 1; }
}
@keyframes fade {
  0%   { opacity: 0; }
  100% { opacity: 1; }
}

.page {
 animation-name: fade;
 animation-duration: 3s; 
 animation-fill-mode: forwards; 
  
}
.img{
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2.5rem;
    color: #fff;
}
   </style>
</head>

<body>
    <section class="m">
        <div class="main page">
            <p id="txt">Welcome DosaBite</p>
            <p id="txt2">Who are you ?</p>
        </div>
        <div class="p page">
            <div>
                <div class="card">
                    <div class="card-border-top">
                    </div>
                    <div class="img">
                    <i class="fa-solid fa-box-open"></i>
                    </div>
                    <span>order online</span>
                    
                    <a href="login.php" target="_blank">
                    <button> view
                    </button></a>
                </div>
            </div>
            <div>
            <div class="card">
                    <div class="card-border-top">
                    </div>
                    <div class="img">
                    <i class="fa-solid fa-chair"></i>
                    </div>
                    <span> order on table</span>
                    
                    <a href="tableorder/link.php" target="_blank">
                    <button> view
                    </button></a>
                </div>
            </div>
            <div>
            <div class="card">
                    <div class="card-border-top">
                    </div>
                    <div class="img">
                    <i class="fa-solid fa-user-tie"></i>
                    </div>
                    <span>Admin</span>
                    <a href="admin/aadmin.php" target="_blank">
                    <button> view
                    </button></a>
                </div>
            </div>
        </div>
    </section>

</body>

</html>