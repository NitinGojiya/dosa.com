<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>order</title>
    <style>
        #feed i:hover {
            color: red;
        }

        /* From Uiverse.io by vinodjangid07 */
        .Btn {
            width: 140px;
            height: 35px;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            border: none;
            border-radius: 5px;
            overflow: hidden;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.089);
            cursor: pointer;
            background-color: transparent;
        }

        .leftContainer {
            width: 60%;
            height: 100%;
            background-color: rgb(238, 0, 0);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .leftContainer .like {
            color: white;
            font-weight: 600;
        }

        .likeCount {
            width: 40%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: rgb(238, 0, 0);
            font-weight: 600;
            position: relative;
            background-color: white;
        }

        .likeCount::before {
            height: 8px;
            width: 8px;
            position: absolute;
            content: "";
            background-color: rgb(255, 255, 255);
            transform: rotate(45deg);
            left: -4px;
        }

        .Btn:hover .leftContainer {
            background-color: rgb(219, 0, 0);
        }

        .Btn:active .leftContainer {
            background-color: rgb(201, 0, 0);
        }

        .Btn:active .leftContainer svg {
            transform: scale(1.15);
            transform-origin: top;
        }
    </style>
</head>

<body>
    <?php
    include 'nav.php';
    ?>
    <section>


        <div>
            <p class="fw-bold fs-1">Your History <i class="fas fa-history"></i> </p>

        </div>
        <div>


            <table class="table table-hover">
                <thead>
                    <tr class="table-info">
                        <th scope="col" class="table-success">#Order Id</th>
                        <th scope="col">Date & Time</th>
                        <th scope="col" class="table-success">Total Rs</th>

                        <th scope="col" class="table-success" id="feed">Feedback<i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i></th>

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
                                                                    $oid = "2024" . $row['id'];
                                                                    echo $oid; ?></th>
                                <td class="table-primary"><?php echo $row['dat']; ?></td>

                                <td class="table-dark"><?php echo $row['total']; ?></td>
                                <td class="table-primary">
                                    <form action="feedback.php" method="post">
                                <textarea cols="40" placeholder="Enter your Answer" name="feed" required></textarea>
                                    <input type="text" value="<?php echo $row['id'];?>" name="id" hidden>
                                    <button class="Btn" onclick="view();">
                                    
                                        <span class="leftContainer">
                                            <svg fill="white" viewBox="0 0 512 512" height="1em" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"></path>
                                            </svg>
                                            <span class="like">Send</span>
                                        </span>
                                        <span class="likeCount">
                                            2,050
                                        </span>
                                        
                                    </button>
                                    <script>
                                        function view()
                                        {
                                            alert("Your answer is sumited");
                                        }
                                    </script>
                                    </form>
                                </td>

                            </tr>

                    <?php }
                    } ?>
                </tbody>
            </table>

        </div>
    </section>
</body>

</html>