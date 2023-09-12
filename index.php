<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>basic calculator</title>
</head>
<body>
    <div class="container">
        <h2>basic calculator</h2>
        <form method="post" action="">
            <input type="number" name="num1" placeholder="Enter first number" required><br><br><br>
            <input type="number" name="num2" placeholder="Enter second number" required><br><br><br>
            <select name="operation">
                <option value="add">Addition</option>
                <option value="substract">Substraction</option>
                <option value="multiply">Multiplication</option>
                <option value="divide">Divition</option>
                <option value="binary">Binary Conversion</option>
                <option value="octal">octal conversion</option>
                <option value="hexadecimal">hexadecimal conversion</option>
            </select><br><br>
            <button type="submit">CALCULATE</button>
        </form>
    </div id="result">
</body>
</html>