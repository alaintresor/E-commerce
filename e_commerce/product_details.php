<?php
include "connection.php";
$id = $_GET['id'];
$query1 = "SELECT * FROM `products` WHERE `id`='$id'";
$data1 = mysqli_query($connect, "$query1");
$productInfor = mysqli_fetch_array($data1);

$query = "SELECT * FROM `products` WHERE `id`!='$id'";
$data = mysqli_query($connect, "$query");

if (isset($_POST['done'])) {
    echo "<script>alert('You added Product Successful');window.open('product_details.php','_self');</script>";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shopInn.com:Home</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>

<body class="body">
    <div class="header">
        <br>
        <center>
            <h3 id="title"><a href="index.php" class="webTitle">shopInn.com</a></h3>
        </center>
        <p align="right" id="login"><a href="login.php" id="link"> Login</a></p>
        <br>
        <br><br>
    </div>
    <br>
    <div class="content">

        <h2>Product Details</h2>
        <hr>

        <br>
        <div id='flex'>
            <div>
                <h2>
                    <?php echo $productInfor[2] ?>
                </h2>
                <br>
                <img src="<?php echo $productInfor[1] ?>" alt="" width="600" height="500">
            </div>
            <div id="buy">
                <h3>Product Description:</h3>

                <p>
                    <?php echo $productInfor[4] ?>
                </p>
                <br>
                <div style="display: flex;">
                    <div>
                        <h3>Price:&nbsp; <?php echo $productInfor[3] ?> FRW</h3>
                    </div>
                    <div style="margin-left: 4cm;">
                        <h3>Availabe In stoke:&nbsp; <?php echo $productInfor[5] ?></h3>
                    </div>
                </div>
                <br>
                <div style="display: flex;">
                    <h3 style="margin-top: -0.1px;">Quantity:</h3>&nbsp;<button style="height: 0.8cm;" onclick="min()">-</button>
                    <h3 style="margin-top: -0.5px;" id="qty">''</h3><button style="height: 0.8cm;" onclick="add()">+</button> <button style="height: 1cm;margin-left: 4cm;background-color:#282c34; width: 4cm; border-radius: 20px;border: none; color: white;">Add To Card</button>
                </div>
                <br><br>
                <button type="submit" name="done" style="background-color:red; width: 100%;height: 1.5cm; border: none;border-radius: 20px;">BUY NOW</button>
            </div>
        </div>
        <br>
        <h2>Similar Products</h2>
        <hr>
        <div class="row">
            <?php while ($row = mysqli_fetch_array($data)) { ?>
                <a href="product_details.php?id=<?php echo $row[0] ?>">
                    <div class="product">
                        <br>
                        <center><img width="100" height="100" src="<?php echo $row[1] ?>" alt=""></center>

                        <p align="left" id="name"><?php echo $row[2] ?></p>
                        <p id="price" align="rigt"><?php echo $row[3] ?></p>
                    </div>
                </a>
            <?php } ?>
        </div>
        <br><br>
    </div>

    <br><br><br><br>
    <div class="footer">
        <center><br>&copy; copy rigth By erukundo</center>
    </div>
    <script>
        var q = 1;
        window.onload(qty.innerHTML = `&nbsp; ${q} &nbsp;`);

        function add() {
            q = q + 1;
            qty.innerHTML = `&nbsp; ${q} &nbsp;`;
        }

        function min() {
            if (q > 1) {
                q = q - 1;
            }
            qty.innerHTML = `&nbsp; ${q} &nbsp;`
        }
    </script>


</body>

</html>