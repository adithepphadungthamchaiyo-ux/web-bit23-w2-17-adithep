<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แปลงเซลเซียสเป็นแรงคิน</title>
    <style>
        body{background:#0a0a0a;color:#ccc;font-family:sans-serif;display:flex;justify-content:center;padding:3rem;}
        h1{color:#e0e0e0;font-weight:400;margin-bottom:1.5rem;}
        p{font-size:14px;color:#888;margin-bottom:6px;}
        span{color:#e0e0e0;}
        a{display:inline-block;margin-top:1.5rem;font-size:12px;color:#555;letter-spacing:0.08em;text-decoration:none;border:1px solid #222;border-radius:8px;padding:8px 16px;transition:all 0.2s;}
        a:hover{border-color:#444;color:#bbb;}
    </style>
</head>
<body>

<div>
    <?php
        $c = $_POST["c"];
        $rankine = ($c + 273.15) * 9 / 5;

        echo "<p>อุณหภูมิเซลเซียส : <span>" . $c . " °C</span></p>";
        echo "<p>อุณหภูมิแรงคิน : <span>" . $rankine . " °R</span></p>";
    ?>

    <a href="index.php">← กลับหน้าแรก</a>
</div>

</body>
</html>