<?php
session_start();
if (!isset($_SESSION['adminId'])) {
    header("location:login.php");
}
include "connection.php";
//add product data into database
$id = $_GET['id'];

// select data of selected product
$query = "SELECT * FROM `products` WHERE `id`='$id'";
$productInfor = mysqli_fetch_array(mysqli_query($connect, "$query"));

if (isset($_POST['done'])) {
    //get data from form
    $name = $_POST['name'];
    $name = trim($name);
    $name = stripslashes($name);
    $name = htmlspecialchars($name);

    $price = $_POST['price'];
    $price = trim($price);
    $price = stripslashes($price);
    $price = htmlspecialchars($price);

    $quantity = $_POST['quantity'];
    $quantity = trim($quantity);
    $quantity = stripslashes($quantity);
    $quantity = htmlspecialchars($quantity);

    $description = $_POST['description'];
    $description = trim($description);
    $description = stripslashes($description);
    $description = htmlspecialchars($description);



    $query = "UPDATE `products` SET `name`='$name', `price`='$price', `description`='$description', `quantity`='$quantity' WHERE `id`='$id' ;";
    $isDone = mysqli_query($connect, "$query");

    if ($isDone) {
        echo "<script>alert('you updated the product `$name`');window.open('view_products.php','_self');</script>";
    }
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

        <h2 id='page-title'>Edit Product</h2>
        <hr>
        <br><br>

        <center>
            <form action="#" method="POST" id="add-form" enctype='multipart/form-data'>
                <table>

                    <tr>
                        <td>Product Name:</td>
                    </tr>
                    <tr>
                        <td><input type="text" name="name" class="add" required="" value="<?php echo $productInfor[2] ?>"></td>
                    </tr>
                    <tr>
                        <td>Unit Price:</td>
                    </tr>
                    <tr>
                        <td><input type="number" name="price" class="add" required="" value="<?php echo $productInfor[3] ?>"></td>
                    </tr>
                    <tr>
                        <td>Quantity:</td>
                    </tr>
                    <tr>
                        <td><input type="text" name="quantity" class="add" required="" value="<?php echo $productInfor[5] ?>"></td>
                    </tr>
                    <tr>
                        <td>Description:</td>
                    </tr>
                    <tr>
                        <td><textarea name="description"><?php echo $productInfor[4] ?></textarea></td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td align="center"><input type="submit" value="save" name="done" style="height: 0.7cm;width: 9.3cm;"></td>
                    </tr>
                </table>
            </form>
        </center>
        <br><br><br>
    </div>
</body>

</html>