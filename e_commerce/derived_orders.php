<?php
session_start();
if (!isset($_SESSION['adminId'])) {
    header("location:login.php");
}
include "connection.php";
// fecthing products datas from database

$query = "SELECT * FROM `products`";
$data = mysqli_query($connect, "$query");


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>

<body class="body">
    <div class="header">
        <br>
        <center>
            <a href="admin.php">
                <h3 id="title"><a href="index.php" class="webTitle">shopInn.com</a></h3>
            </a>
        </center>
        <p align="right" id="login"><a href="logout.php" id="link"> Logout</a></p>
        <br>
        <br><br>
    </div>
    <br>
    <div class="content">

        <h2 id='page-title'>Derived Orders</h2>
        <hr>
        <br><br>
        <center>
            <table border="1" class="table">
                <tbody>
                    <thead>
                        <tr class="trTitle">
                            <th>Date</th>
                            <th>Time</th>
                            <th>Customer</th>
                            <th>Phone</th>
                            <th>Product</th>
                            <th>Unit Price</th>
                            <th>Ordered Quantity</th>
                            <th>Total Payout</th>

                        </tr>
                    </thead>


                    <tr class="tr">
                        <td>15/01/2021</td>
                        <td>13:15</td>
                        <td>Mugisha Eric</td>
                        <td>078857524</td>
                        <td>RICE</td>
                        <td>1000 Frw</td>
                        <td>20 Kg</td>
                        <td>20000 Frw</td>

                    </tr>

                    <tr class="tr">
                        <td>15/01/2021</td>
                        <td>13:15</td>
                        <td>Mugisha Eric</td>
                        <td>078857524</td>
                        <td>RICE</td>
                        <td>1000 Frw</td>
                        <td>20 Kg</td>
                        <td>20000 Frw</td>

                    </tr>

                    <tr class="tr">
                        <td>15/01/2021</td>
                        <td>13:15</td>
                        <td>Mugisha Eric</td>
                        <td>078857524</td>
                        <td>RICE</td>
                        <td>1000 Frw</td>
                        <td>20 Kg</td>
                        <td>20000 Frw</td>

                    </tr>

                    <tr class="tr">
                        <td>15/01/2021</td>
                        <td>13:15</td>
                        <td>Mugisha Eric</td>
                        <td>078857524</td>
                        <td>RICE</td>
                        <td>1000 Frw</td>
                        <td>20 Kg</td>
                        <td>20000 Frw</td>

                    </tr>

                </tbody>
            </table>

        </center>
    </div>
</body>

</html>