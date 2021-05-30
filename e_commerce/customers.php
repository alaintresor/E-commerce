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

        <h2 id='page-title'>Customers List</h2>
        <hr>
        <br><br>
        <center>
            <table border="1" class="table">
                <tbody>
                    <thead>
                        <tr class="trTitle">
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Gender</th>
                            <th>Phone</th>
                            <th>Adress</th>
                        </tr>
                    </thead>


                    <tr class="tr">
                        <td>Mugisha</td>
                        <td>Eric</td>
                        <td>Male</td>
                        <td>0780591253</td>
                        <td>Kigali,Gasabo,Muhima</td>
                    </tr>

                    <tr class="tr">
                        <td>Shema</td>
                        <td>Aranauld</td>
                        <td>Male</td>
                        <td>0785676790</td>
                        <td>Kigali,Kicukiro,Gikondo</td>
                    </tr>

                    <tr class="tr">
                        <td>Mugabe</td>
                        <td>Eloi</td>
                        <td>Male</td>
                        <td>0788905912</td>
                        <td>Kigali,Nyarugenge,Nyamirambo</td>
                    </tr>

                    <tr class="tr">
                        <td>Aline</td>
                        <td>Isimbi</td>
                        <td>Female</td>
                        <td>0735099080</td>
                        <td>Southern Province,Huye,Ngoma</td>
                    </tr>

                </tbody>
            </table>

        </center>
    </div>
</body>

</html>