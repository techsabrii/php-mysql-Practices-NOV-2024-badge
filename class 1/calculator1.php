<?php

$display = "";
function calculate($expression) {
    $operators = ['+', '-', '*', '/'];
    foreach ($operators as $op) {
        $pos = strpos($expression, $op);
        if ($pos !== false) {
            $num1 = substr($expression, 0, $pos);
            $num2 = substr($expression, $pos + 1);
            $num1 = trim($num1);
            $num2 = trim($num2);
            if (!is_numeric($num1) || !is_numeric($num2)) {
                return "Invalid";
            }
            $num1 = (float)$num1;
            $num2 = (float)$num2;
            switch ($op) {
                case '+': return $num1 + $num2;
                case '-': return $num1 - $num2;
                case '*': return $num1 * $num2;
                case '/': return ($num2 != 0) ? $num1 / $num2 : "Error";
            }
        }
    }
    return "Invalid";
}
if (($_POST['btn'])) {
    $btn = $_POST['btn'];
    $display = $_POST['display'];
    if ($btn == 'C') {
        $display = "";
    } elseif ($btn == '=') {
        $display = calculate($display);
    } else {
        $display .= $btn;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Basic PHP Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        .calculator {
            display: inline-block;
            background-color: #f0f0f0;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.2);
        }
        input[type="text"] {
            width: 100%;
            height: 50px;
            font-size: 24px;
            text-align: right;
            border-radius: 8px;
            padding-right: 10px;
            margin-bottom: 10px;
        }
        .btn {
            width: 60px;
            height: 60px;
            margin: 5px;
            font-size: 20px;
            border-radius: 10px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<div class="calculator">
    <form method="post">
        <input type="text" name="display" value="<?php echo $display; ?>" readonly><br>
        <button class="btn" type="submit" name="btn" value="7">7</button>
        <button class="btn" type="submit" name="btn" value="8">8</button>
        <button class="btn" type="submit" name="btn" value="9">9</button>
        <button class="btn" type="submit" name="btn" value="/">/</button><br>
        <button class="btn" type="submit" name="btn" value="4">4</button>
        <button class="btn" type="submit" name="btn" value="5">5</button>
        <button class="btn" type="submit" name="btn" value="6">6</button>
        <button class="btn" type="submit" name="btn" value="*">*</button><br>
        <button class="btn" type="submit" name="btn" value="1">1</button>
        <button class="btn" type="submit" name="btn" value="2">2</button>
        <button class="btn" type="submit" name="btn" value="3">3</button>
        <button class="btn" type="submit" name="btn" value="-">-</button><br>
        <button class="btn" type="submit" name="btn" value="0">0</button>
        <button class="btn" type="submit" name="btn" value=".">.</button>
        <button class="btn" type="submit" name="btn" value="=">=</button>
        <button class="btn" type="submit" name="btn" value="+">+</button><br>
        <button class="btn" type="submit" name="btn" value="C">C</button>
    </form>
</div>

</body>
</html>
