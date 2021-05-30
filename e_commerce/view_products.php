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
                <h3 id="title">Admin Page</h3>
            </a>
        </center>
        <p align="right" id="login"><a href="logout.php" id="link"> Logout</a></p>
        <br>
        <br><br>
    </div>
    <br>
    <div class="content">

        <h2 id='page-title'>Product List</h2>
        <hr>
        <br><br>
        <center>
            <table border="1">
                <tbody>
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <?php if (mysqli_num_rows($data)) {
                        while ($row = mysqli_fetch_array($data)) { ?>

                            <tr>
                                <td><img src="<?php echo $row[1] ?>" width="80" height="80" alt=""></td>
                                <td><?php echo $row[2] ?></td>
                                <td><?php echo $row[3] . " Frw" ?></td>
                                <td><?php echo $row[5] ?></td>
                                <td><?php echo $row[4] ?></td>
                                <td><a href="edit_product.php?id=<?php echo $row[0] ?>">&nbsp;&nbsp;<button> Edit</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="delete_product.php?id=<?php echo $row[0] ?>"><button> Delete</button></a>&nbsp;&nbsp;</td>
                            </tr>
                        <?php } ?>
                </tbody>
            </table>
        <?php } else { ?>
            <h1 id="no-found">No Data Found</h1>
        <?php } ?>
        </center>
    </div>
</body>

</html>