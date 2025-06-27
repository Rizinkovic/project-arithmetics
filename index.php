<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="https://kit.fontawesome.com/af0db50a6f.js" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
</head>
<body>
  <?php include("includes/header.php") ?>
  <div class="main">
    <h1>Project Arithmetics</h1>
    <p style="font-style: bold; font-size: 17px; font-weight: 500;">
      <span style="color: #4d4dff;">Project Arithmetics</span> is an open-source projects that aims <br>at vulgarizing mathematicals calculations.<br>The primary objective is to create <br>the <span style="color: #4d4dff;">largest database</span> of mathematical operations.<br>The project is currently under development <br>and you can contribute by clicking below
    </p>
    <button class="read-more">Read More →</button>
    <button class="btn btn-view"><a href="calculator.php">View</a></button>
    <button class="btn btn-contribute"><a href="https://github.com/Rizinkovic/project-arithmetics">Contribute</a></button>
  </div>
  <aside class="right-sidebar">
    <label>Resources :</label>
    <ul>
      <li><a href="calculator.php">Calculators</a></li>
      <li><a href="#">Blog</a></li>
      <li><a href="#">Support</a></li>
    </ul>
  </aside>
  <?php include("includes/footer.php"); ?>
  <script>
document.addEventListener('DOMContentLoaded', function() {
    const readMoreBtn = document.querySelector('.read-more');
    const content = document.querySelector('.main p');

    if (readMoreBtn && content) {
        readMoreBtn.addEventListener('click', function() {
            content.classList.toggle('expanded');
            this.textContent = content.classList.contains('expanded') ? 'Read Less ←' : 'Read More →';
        });
    }
});
</script>
</body>
</html>