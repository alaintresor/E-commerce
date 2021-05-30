<?php
session_start();
if (!isset($_SESSION['adminId'])) {
    header("location:login.php");
}
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
            <h3 id="title"><a href="index.php" class="webTitle">shopInn.com</a></h3>
        </center>
        <p align="right" id="login"><a href="logout.php" id="link"> Logout</a></p>
        <br>
        <br><br>
    </div>
    <br>
    <div class="content">

        <h2 id='page-title'>Dashboard</h2>
        <hr>

        <br>
        <div class="row">
            <a href="new_orders.php">
                <div class="card">
                    <br>
                    <center><img width="80" src="images/new_orders.png" alt=""></center>

                    <center>
                        <p>
                        <h3>New Order</h3>
                        </p>
                    </center>
                </div>
            </a>

            <a href="add_product.php">
                <div class="card">
                    <br>
                    <center><img width="80" src="images/toBook.png" alt=""></center>

                    <center>
                        <p>
                        <h3>Add Product</h3>
                        </p>
                    </center>
                </div>
            </a>

            <a href="view_products.php">
                <div class="card">
                    <br>
                    <center><img width="80" src="images/products.png" alt=""></center>

                    <center>
                        <p>
                        <h3>View Products</h3>
                        </p>
                    </center>
                </div>
            </a>

            <a href="derived_orders.php">
                <div class="card">
                    <br>
                    <center><img width="80" src="images/derived.png" alt=""></center>

                    <center>
                        <p>
                        <h3>Derived Orders</h3>
                        </p>
                    </center>
                </div>
            </a>

            <a href="customers.php">
                <div class="card">
                    <br>
                    <center><img width="80" src="images/customers.png" alt=""></center>

                    <center>
                        <p>
                        <h3>Customers</h3>
                        </p>
                    </center>
                </div>
            </a>

            <a href="admin_settings.php">
                <div class="card">
                    <br>
                    <center><img width="80" src="images/new_orders.png" alt=""></center>

                    <center>
                        <p>
                        <h3>Admin Settings</h3>
                        </p>
                    </center>
                </div>
            </a>
        </div>
    </div>
</body>

</html>