<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interest</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/af0db50a6f.js" crossorigin="anonymous"></script>
    <style>
        .interest-rate-calculator {
  width: 100%;
  max-width: 500px; 
  background-color: #f9f9f9;
  padding: 25px;
  border-radius: 10px;
  border: 1px solid #ccc;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
  margin: 20px auto;
    text-align: center;
}

        .answer-box {
            width: 100%;
            height: 50px;
            background-color: #f0f0f0;
            border: 1px solid #ccc;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5em;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <nav class="nav-calculator">
        <a href="../index.php"><i class="fa-solid fa-house"></i></a>
        <a href="../calculator.php"><i class="fa-solid fa-right-from-bracket"></i></a>
    </nav>
    <div class="content">
        <div class="interest-rate-calculator">
        <form id="interestForm" action="interest-rate.php" method="post">
        <h1>Interest Rate Calculator</h1>
        <p>Choose the type of Interest to be Calculated</p>
        <label for="interest-type">Interest Type:</label>
        <select id="interest-type" name="interest-type">
            <option value="simple">Simple Interest</option>
            <option value="compound">Compound Interest</option>
        </select>
        <label for="principal">Principal Amount:</label>
        <input type="number" id="principal" name="principal" required>

        <label for="rate">Rate of Interest (%):</label>
        <input type="number" id="rate" name="rate" required>

        <label for="time">Time (in years):</label>
        <input type="number" id="time" name="time" required>

        <button type="submit">Calculate</button>
    </form>
    <div class="answer-box">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $interestType = $_POST["interest-type"];
            $principal = $_POST["principal"];
            $rate = $_POST["rate"];
            $time = $_POST["time"];

            if ($interestType == "simple") {
                $simpleInterest = ($principal * $rate * $time) / 100;
                echo "Simple Interest: " . $simpleInterest;
            } elseif ($interestType == "compound") {
                $compoundInterest = $principal * pow(1 + ($rate / 100), $time);
                echo "Compound Interest: " . $compoundInterest;
            }
        }
        ?>
    </div>
    </div>
    </div>
    
</body>
</html>