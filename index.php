<?php
    include_once "./inc/functions.php";

    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Measurement converter</title>

    <!-- miligram css link -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">

    <!-- custom css link -->
    <link rel="stylesheet" href="./assets/style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="column">
                <h2>PHP Measurement Converter</h2>
                <div class="box">
                    <button onclick="location.href='./kg-pound.php';">KG and Pound</button>
                    <button onclick="location.href='./feet-inch.php';">Feet and Inch</button>
                    <button onclick="location.href='./temperature.php';">Temperature</button>
                    <button>Date</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
