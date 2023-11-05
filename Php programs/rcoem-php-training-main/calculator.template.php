<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div style="margin: 20px;">
    <form method="post" action="calculator.php">
        <div>
            <label>Value 1</label>
            <input type="text" name="value1">
        </div>
        <div>
            <label>Value 2</label>
            <input type="text" name="value2">
        </div>
        <div>
            <input type="submit" name="operation" value="Sum">
            <input type="submit" name="operation" value="Multiply">
        </div>
    </form>
</div>
</body>
</html>