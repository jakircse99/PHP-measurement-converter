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
                    <form action="" method="GET" class="formbox">
                        <label for="inputData">Enter your number</label>
                        <input type="number" id=inputData>
                        <select value="">
                            <option name="kg" id="kg">KG</option>
                            <option name="pound" id="pound">Pound</option>
                        </select>
                        <label for="to">To</label>
                        <select value="">
                            <option name="kg" id="kg">KG</option>
                            <option name="pound" id="pound">Pound</option>
                        </select>
                        <input type="submit" value="Convert">

                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
