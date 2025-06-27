<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI</title>
    <script src="https://kit.fontawesome.com/af0db50a6f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav class="nav-calculator">
        <a href="../index.php"><i class="fa-solid fa-house"></i></a>
        <a href="../calculator.php"><i class="fa-solid fa-right-from-bracket"></i></a>
    </nav>
    <h1>BMI Calculator</h1>
    <div class="calc">
        <p>Calculate your Body Mass Index (BMI) by entering your weight and height.</p>
        <form method="POST" action="">
        <label for="weight">Weight (kg):</label>
        <input type="number" id="weight" name="weight" required>
        
        <label for="height">Height (m):</label>
        <input type="number" step="0.01" id="height" name="height" required>
        
        <button type="submit">Calculate BMI</button>
    </form>
    <div class="answer">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $weight = $_POST['weight'];
        $height = $_POST['height'];

        if ($height > 0) {
            $bmi = $weight / ($height * $height);
            echo "<h2>Your BMI is: " . round($bmi, 2) . "</h2>";
        } else {
            echo "<h2>Please enter a valid height.</h2>";
        }
    }
    ?>
    </div>
    </div>
    
</body>
</html>