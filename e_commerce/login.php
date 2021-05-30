<?php
session_start();
include "connection.php";
if (isset($_POST['done'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password'";

    $data = mysqli_query($connect, "$query");
    if (mysqli_num_rows($data)) {
        $adminInfor = mysqli_fetch_array($data);
        $_SESSION['adminId'] = $adminInfor[0];
        header("location:admin.php");
    } else {
        echo "<script>alert('Worng username or password!');window.open('login.php','_self')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>

<body class="body">
    <div class="content">
        <center>
            <form action="#" method="POST" id="login-form">
                <h3 id="title"><a href="admin.php" class="webTitle">Admin Login</a></h3>

                <table>
                    <tr>
                        <td>Username:</td>
                    </tr>
                    <tr>
                        <td><input type="text" name="username" required></td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                    </tr>
                    <tr>
                        <td><input type="password" name="password" required></td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td align="center"><input type="submit" value="Login" name="done" style="height: 0.7cm;width: 7.3cm;"></td>
                    </tr>
                </table>
            </form>
        </center>
    </div>
</body>

</html>