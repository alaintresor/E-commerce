<?php
session_start();
if (!isset($_SESSION['adminId'])) {
    header("location:login.php");
}
include "connection.php";

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

        <h2 id='page-title'>Admin Settings</h2>
        <hr>
        <br><br>

        <center>
            <form action="#" method="POST" id="add-form" enctype='multipart/form-data'>
                <caption><span id="changeTitle">Reset Password</span></caption>
                <table>
                    <tr>
                        <td>New Username:</td>
                    </tr>
                    <tr>
                        <td><input type="text" name="image" class="add" required=""></td>
                    </tr>
                    <tr>
                        <td>New Password:</td>
                    </tr>
                    <tr>
                        <td><input type="password" name="name" class="add" required=""></td>
                    </tr>
                    <tr>
                        <td>Comfirm Password:</td>
                    </tr>
                    <tr>
                        <td><input type="password" name="price" class="add" required=""></td>
                    </tr>
                    <tr>
                        <td>Old Password:</td>
                    </tr>
                    <tr>
                        <td><input type="password" name="quantity" class="add" required=""></td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td align="center"><input type="submit" value="Save Change" name="done" style="height: 0.7cm;width: 9.3cm;"></td>
                    </tr>
                </table>
            </form>
        </center>
        <br><br><br>
    </div>
</body>

</html>