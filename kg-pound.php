<?php
    require_once "./inc/functions.php";

    $selectbox1 = '';
    $selectbox2 = '';
    $inputData = '';
    $result = '';
    if(isset($_GET['submit'])) {
        $selectbox1 = $_GET['selectbox1'];
        $selectbox2 = $_GET['selectbox2'];
        $inputData = $_GET['inputdata'];
        
        if($selectbox1 != "" && $selectbox2 !="" && $inputData !="") {
            
            $result = kgPoundConverter($inputData, $selectbox1, $selectbox2);
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KG and Pound converter</title>

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
                <h2>KG and Pound Converter</h2>
                <div class="box">
                    <form action="./kg-pound.php" method="GET" class="formbox">
                        <label for="inputData">Enter your number</label>
                        <input type="number" name="inputdata" id=inputData>
                        <select name="selectbox1">
                            <option value="1">KG</option>
                            <option value="2">Pound</option>
                        </select>
                        <label for="to">To</label>
                        <select name="selectbox2" value="1">
                            <option value="1">KG</option>
                            <option value="2">Pound</option>
                        </select>
                        <input type="submit" name="submit" value="Convert">

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
