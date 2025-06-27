<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="grid-container">
    <div class="header">
      <button class="hamburger" aria-label="Toggle menu">
        <span></span>
        <span></span>
        <span></span>
    </button>
      <nav class="nav-menu">
        <img src="assets/logo.png" alt="logo" width="300" class="logo"> 
        <a href="index.php">Home</a>
        <a href="calculator.php">Calculators</a>
        <a href="about.php">About</a>
      </nav>
    </div>
  <script>
    document.addEventListener('DOMContentLoaded', () => {
    const hamburger = document.querySelector('.hamburger');
    const navMenu = document.querySelector('.nav-menu');

    hamburger.addEventListener('click', () => {
        hamburger.classList.toggle('active');
        navMenu.classList.toggle('active');
    });

    // Close menu when clicking a link (optional)
    document.querySelectorAll('.nav-menu a').forEach(link => {
        link.addEventListener('click', () => {
            hamburger.classList.remove('active');
            navMenu.classList.remove('active');
        });
    });
});
  </script>
</body>
</html>