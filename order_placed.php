<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>bill</title>
    <style>
        .bill {
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            font-size: 2rem;
        }
    </style>
</head>

<body>
    <section class="bill">
        <div id="contentToPrint">


            <div>
                <h1>:Order is Placed:</h1><br>
               
            </div>
            <div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Qty</th>
                            <th scope="col">Total</th>

                        </tr>
                    <tbody>
                        </thead>
                        <?php
                        include 'dataconnect.php';
                        session_start();
                        $user = $_SESSION['user'];


                        $sql = "SELECT * FROM `cart` where username='$user' ";
                        $result = mysqli_query($conn, $sql);
                        $no = 0;
                        $total = 0;
                        while ($row = mysqli_fetch_array($result)) {
                            $total = $total + $row['subtotal'];
                        ?>

                            <tr>
                                <th scope="row"><?php echo $no + 1; ?></th>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['price']; ?></td>
                                <td><?php echo $row['qty']; ?></td>

                                <td><?php echo $row['subtotal']; ?></td>

                            </tr>

                        <?php $no = $no + 1;
                        } ?>
                        <tr>
                            <td colspan="5" class="table-dark">Total Bill Rs:-<?php echo  $total; ?></td>
                        </tr>
                    </tbody>
                </table>


            </div>
        </div>
        <div>
            <form action="cart_del.php" method="post">
            <button onclick="printDiv('contentToPrint')" name="bill">Print Bill</button>
            </form>
        
            <script>
                function printDiv(divId) {
                    var divContent = document.getElementById(divId).innerHTML;
                    var printWindow = window.open('', '', 'height=600,width=800');
                    printWindow.document.write('<html><head><title>Bill</title>');
                    printWindow.document.write('</head><body>');
                    printWindow.document.write(divContent);
                    printWindow.document.write('</body></html>');
                    printWindow.document.close();
                    printWindow.print();
                }
            </script>
        </div>

    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>