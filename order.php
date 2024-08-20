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
        <p class="fw-bold fs-1">Your Status  <i class="fa-solid fa-truck-fast"></i> </p>
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


                        $sql = "SELECT * FROM `cart` where username='$user' ";
                        $result = mysqli_query($conn, $sql);

                        while ($row = mysqli_fetch_array($result)) {
                    ?>

                            <tr>
                                <th scope="row" class="table-light"><img src="<?php echo $row['photo']; ?>" height="60px"></th>
                                <td class="table-primary"><?php echo $row['name']; ?></td>
                                <td class="table-dark"><?php echo $row['price']; ?></td>
                                <td class="table-light"><?php echo $row['qty']; ?></td>

                                <td class="table-dark"><?php echo $row['subtotal']; ?></td>
                                <td class="table-light" style="text-align: center;"><a style="border:2px black solid;color:black;padding:5px;" href="remove.php?id=<?php echo $row['id']; ?>" style="color: black;">Remove</a></td>
                            </tr>

                    <?php }
                    } ?>
                </tbody>
            </table>
           
        </div>
    </section>
</body>

</html>