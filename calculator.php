<!DOCTYPE html>
<html>
<head>
    <title>PHP Calculator</title>
</head>
<body>
    <h1>Simple PHP Calculator</h1>
    <form method="post" action="">
        <input type="text" name="num1" placeholder="Enter number 1">
        <input type="text" name="num2" placeholder="Enter number 2">
        <select name="operator">
            <option value="add">Addition</option>
            <option value="subtract">Subtraction</option>
            <option value="multiply">Multiplication</option>
            <option value="divide">Division</option>
        </select>
        <input type="submit" name="calculate" value="Calculate">
    </form>

    <?php
    if (isset($_POST['calculate'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operator = $_POST['operator'];

        if (is_numeric($num1) && is_numeric($num2)) {
            if ($operator == 'add') {
                $result = $num1 + $num2;
            } elseif ($operator == 'subtract') {
                $result = $num1 - $num2;
            } elseif ($operator == 'multiply') {
                $result = $num1 * $num2;
            } elseif ($operator == 'divide') {
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = "Cannot divide by zero";
                }
            } else {
                $result = "Invalid operator";
            }
            echo "Result: $result";
        } else {
            echo "Please enter valid numeric values for both numbers.";
        }
    }
    ?>
</body>
</html>
