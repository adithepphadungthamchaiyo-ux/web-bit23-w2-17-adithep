<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แปลงเซลเซียสเป็นแรงคิน</title>
    <style>
        body{background:#0a0a0a;color:#ccc;font-family:sans-serif;display:flex;justify-content:center;padding:3rem;}
        h1{color:#e0e0e0;font-weight:400;margin-bottom:1.5rem;}
        label{font-size:12px;color:#555;letter-spacing:0.1em;text-transform:uppercase;}
        input{display:block;margin-top:8px;background:#111;border:1px solid #222;border-radius:8px;color:#fff;padding:10px 14px;font-size:16px;outline:none;width:100%;}
        input:focus{border-color:#444;}
        input[type=submit]{margin-top:1rem;background:#1e1e1e;border:1px solid #333;color:#bbb;cursor:pointer;font-size:13px;letter-spacing:0.05em;transition:background 0.2s;}
        input[type=submit]:hover{background:#2a2a2a;color:#ddd;}
    </style>
</head>
<body>

<div>
    <h1>งานที่ 2 อดิเทพ bit.2/3 No.17</h1>

    <form action="result.php" method="post">
        <label>อุณหภูมิเซลเซียส °C</label>
        <input type="number" name="c" step="0.01">
        <br>
        <input type="submit" value="คำนวณ">
    </form>
</div>

</body>
</html>