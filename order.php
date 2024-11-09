<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>order</title>
</head>

<body>
    <?php
    include 'nav.php';
    ?>
    <section>
        <div>
        <p class="fw-bold fs-1">Your Order Status  <i class="fa-solid fa-truck-fast"></i> </p>
        </div>
        <div>


            <table class="table table-hover">
                <thead>
                    <tr class="table-info">
                        <th scope="col" class="table-success">#</th>
                        <th scope="col">Name</th>
                        <th scope="col" class="table-success">Price</th>
                        <th scope="col">Qty</th>
                        <th scope="col" class="table-success">Total</th>
                        <th scope="col">Status</th>
                    </tr>

                </thead>
                <tbody>
                    <?php
                    if ($_SESSION['login'] == true) {


                        $sql = "SELECT * FROM `admin_cart` where username='$user' and aaction='Not Accept'";
                        $result = mysqli_query($conn, $sql);

                        while ($row = mysqli_fetch_array($result)) {
                    ?>

                            <tr>
                                <th scope="row" class="table-light"><img src="<?php echo $row['photo']; ?>" height="60px"></th>
                                <td class="table-primary"><?php echo $row['name']; ?></td>
                                <td class="table-dark"><?php echo $row['price']; ?></td>
                                <td class="table-light"><?php echo $row['qty']; ?></td>

                                <td class="table-dark"><?php echo $row['subtotal']; ?></td>
                                <td class="table-light" style="text-align: center;"><?php echo $row['aaction']; ?></td>
                            </tr>

                    <?php }
                    } ?>
                </tbody>
            </table>
           
        </div>
        <div>
        <p class="fw-bold fs-1">Your Arrivel Order <i class="fa-solid fa-box-open"></i> </p>
        </div>
        <div>


            <table class="table table-hover">
                <thead>
                    <tr class="table-info">
                        <th scope="col" class="table-success">#Order Id</th>
                        <th scope="col">Date & Time</th>
                        <th scope="col" class="table-success">Total Rs</th>
                        <th scope="col" >order deliverd</th>
                    
                        
                    </tr>

                </thead>
                <tbody>
                    <?php
                    if ($_SESSION['login'] == true) {


                        $sql = "SELECT * FROM `final_order` where username='$user' and ostatus='Accept'";
                        $result = mysqli_query($conn, $sql);

                        while ($row = mysqli_fetch_array($result)) {
                    ?>

                            <tr>
                                <th scope="row" class="table-light"><?php 
                                $oid=$row['id'];
                                echo $oid; ?></th>
                                <td class="table-primary"><?php echo $row['dat']; ?></td>
                              
                                <td class="table-dark"><?php echo $row['total']; ?></td>
                                <td class="table-primary">15 Minutes</td>
                            </tr>

                    <?php }
                    } ?>
                </tbody>
            </table>
           
        </div>
    </section>
</body>

</html>