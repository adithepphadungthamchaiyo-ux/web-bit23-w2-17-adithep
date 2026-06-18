<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แปลงเซลเซียสเป็นแรงคิน</title>
</head>
<body>

<?php

    $c = $_POST["c"]; 

    $rankine = ($c + 273.15) * 9 / 5;

    echo "อุณหภูมิเซลเซียส : " . $c . " °C <br>";
    echo "อุณหภูมิแรงคิน : " . $rankine . " °R <br>";

?>

<a href="index.php">กลับหน้าแรก</a>

</body>
</html>