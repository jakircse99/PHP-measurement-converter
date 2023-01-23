<?php
    require_once "./inc/functions.php";

    $date1 = '';
    $date2 = '';
    $result = '';
    if(isset($_GET['submit'])) {
        $date1 = $_GET['date1'];
        $date2 = $_GET['date2'];
        
        if($date1 != "" && $date2 !="") {
            
            $result = dateCalculator($date1, $date2);
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date Calculator</title>

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
                <h2>Date Calculator</h2>
                <div class="box">
                    <form action="" method="GET" class="formbox">
                        <label for="inputData">Enter your date</label>
                        <input type="date" name="date1">
                        <label for="to">To</label>
                        <input type="date" name="date2">
                        <input type="submit" name="submit" value="Calculate">

                    </form>
                    <?php
                        if($result != "") {
                            ?>
                            <blockquote><?php echo "Result: {$result}" ?></blockquote>
                            <?php 
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
