<?php
session_start();
if (!isset($_SESSION['adminId'])) {
    header("location:login.php");
}
include "connection.php";
//add product data into database
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

    $image = "./images/upload/" . $_FILES['image']['name'];
    $imgName = $_FILES['image']['name'];
    $target_dir = "./images/upload/";
    $target_photo = $target_dir . basename($_FILES["image"]["name"]);

    // Select file type
    $imageFileType = strtolower(pathinfo($target_photo, PATHINFO_EXTENSION));

    // Valid file extensions
    $extensions_arr = array("jpg", "jpeg", "png", "gif");

    // Check extension
    if (in_array($imageFileType, $extensions_arr)) {

        $query = "INSERT INTO `products` (`id`, `image`, `name`, `price`, `description`, `quantity`) VALUES ('', '$image', '$name', '$price', '$description', '$quantity');";
        $isDone = mysqli_query($connect, "$query");

        $isUploaded = move_uploaded_file($_FILES['image']['tmp_name'], $target_dir . $imgName);
        if ($isDone && $isUploaded) {
            echo "<script>alert('You added Product Successful');window.open('admin.php','_self');</script>";
        }
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

        <h2 id='page-title'>Add New Product</h2>
        <hr>
        <br><br>

        <center>
            <form action="#" method="POST" id="add-form" enctype='multipart/form-data'>
                <table>
                    <tr>
                        <td>Product Image:</td>
                    </tr>
                    <tr>
                        <td><input type="file" name="image" class="add" required=""></td>
                    </tr>
                    <tr>
                        <td>Product Name:</td>
                    </tr>
                    <tr>
                        <td><input type="text" name="name" class="add" required=""></td>
                    </tr>
                    <tr>
                        <td>Unit Price:</td>
                    </tr>
                    <tr>
                        <td><input type="number" name="price" class="add" required=""></td>
                    </tr>
                    <tr>
                        <td>Quantity:</td>
                    </tr>
                    <tr>
                        <td><input type="text" name="quantity" class="add" required=""></td>
                    </tr>
                    <tr>
                        <td>Description:</td>
                    </tr>
                    <tr>
                        <td><textarea name="description"></textarea></td>
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