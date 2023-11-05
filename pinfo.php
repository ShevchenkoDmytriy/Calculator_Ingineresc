<!DOCTYPE html>
<html>
<body>
<form method="post">
  <label for="num1">Число 1:</label>
  <input type="text" id="num1" name="num1"><br><br>
  <label for="num2">Число 2:</label>
  <input type="text" id="num2" name="num2"><br><br>
  <label for="operation">Оберіть операцію:</label>
  <select id="operation" name="operation">
    <option value="add">Додати</option>
    <option value="subtract">Відняти</option>
    <option value="multiply">Помножити</option>
    <option value="divide">Розділити</option>
    <option value="percentage">Відсоток</option>
    <option value="power">Ступінь</option>
  </select><br><br>
  <input type="submit" value="Обчислити">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];
    function add($x, $y) {
        return $x + $y;
    }
    function subtract($x, $y) {
        return $x - $y;
    }
    function multiply($x, $y) {
        return $x * $y;
    }
    function divide($x, $y) {
        if ($y == 0) {
            return "На нуль ділити не можна.";
        } else {
            return $x / $y;
        }
    }
    function percentage($x, $percent) {
        return $x * ($percent / 100);
    }
    function power($x, $y) {
        return pow($x, $y);
    }
    $result = 0;
    switch ($operation) {
        case "add":
            $result = add($num1, $num2);
            break;
        case "subtract":
            $result = subtract($num1, $num2);
            break;
        case "multiply":
            $result = multiply($num1, $num2);
            break;
        case "divide":
            $result = divide($num1, $num2);
            break;
        case "percentage":
            $result = percentage($num1, $num2);
            break;
        case "power":
            $result = power($num1, $num2);
            break;
        default:
            $result = "Невідома операція";
    }

    echo "Результат: " . $result;
}
?>
</body>
</html>
