<?php
include "connection.php";
$query = "SELECT * FROM `products`";
$data = mysqli_query($connect, "$query");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title cl>shopInn.com:Home</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>

<body class="body">
    <div class="header">
        <br>
        <center>
            <h3 id="title"><a href="index.php" class="webTitle">shopInn.com</a></h3>
        </center>
        <p align="right" id="login"><a href="login.php" id="link"> Staff</a></p>
        <br>
        <br><br>
    </div>
    <br>
    <div class="content">
        <h2 style="color: #F8C471;">Welcome to shopInn</h2>
        <hr>

        <br>

        <div class="row">
            <p>
                Domestic trading policies in Rwandaspecifically Made In Rwanda, represent a vital part of the economy, being the source of various economic contributions through the generation of income viaexporting, providing new job opportunities, introducing innovations, stimulating competition, and engine for employment. Present economy is known as a knowledgebase economy where, playing on Cost of production, Improving Quality and Mind-Set Change have more importance on exportation rather than importing the goods and services. The role and importance of domestic trading policies has been highly appreciated and acknowledged.
            </p>
        </div>
        <div class="row">
            <?php while ($row = mysqli_fetch_array($data)) { ?>
                <a href="product_details.php?id=<?php echo $row[0] ?>">
                    <div class="product">
                        <br>
                        <center><img width="100" height="100" src="<?php echo $row[1] ?>" alt=""></center>

                        <p align="left" id="name"><?php echo $row[2] ?></p>
                        <p id="price" align="rigt"><?php echo $row[3] . " Frw" ?></p>
                    </div>
                </a>
            <?php } ?>
        </div>


    </div>

    <br>
    <div class="footer">
        <center><br>&copy; copy rigth By erukundo</center>
    </div>



</body>

</html>