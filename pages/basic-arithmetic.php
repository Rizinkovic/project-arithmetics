
<!DOCTYPE html>
<html lang="english">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Arithmetics</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/af0db50a6f.js" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="nav-calculator">
        <a href="../index.php"><i class="fa-solid fa-house"></i></a>
        <a href="../calculator.php"><i class="fa-solid fa-right-from-bracket"></i></a>
    </nav>
    <div class="calc">
        <h1>Basic Arithmetic Operations</h1>
        <p>Enter two numbers and select an operation to perform:</p>
        <form action="basic-arithmetic.php" method="POST">
            <input type="text" name="number1">
            <label for="operation">Select an operation:</label>
            <select name="operation" id="operation">
                <option value="add">Addition</option>
                <option value="minus">Subtraction</option>
                <option value="times">Multiplication</option>
                <option value="division">Division</option>
            </select>
            <input type="text" name="number2">
            
            <input type="submit" name="submit">
        </form>
    <div class="answer">
                <?php 
                              if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number1 = floatval($_POST["number1"]); 
                $number2 = floatval($_POST["number2"]);
                $operation = $_POST["operation"];
                $result = 0;

                if ($operation == "add") {
                    $result = $number1 + $number2;
                } elseif ($operation == "minus") {
                    $result = $number1 - $number2;
                } elseif ($operation == "times") {
                    $result = $number1 * $number2;
                } elseif ($operation == "division") {
                    $result = $number1 / $number2;
                }
                // Display the result
    echo "Result: " . $result;
} 
                ?>
            </div>
    </div>
            
</body>
</html>