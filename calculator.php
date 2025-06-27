<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <?php include("includes/header.php");?>
    <style>
        html {
            background-color: #f4f4f4;
        }
        /* Main layout container */
.container {
  display: flex;
  min-height: 100vh;
  font-family: Arial, sans-serif;
}

/* Sidebar */
.sidebar {
  width: 400px;
  background-color: #222;
  color: white;
  padding: 20px 10px;
  box-sizing: border-box;
}

/* Sidebar links */
.sidebar ul {
  list-style: none;
  padding: 0;
}

.sidebar a{
    color: white;
    text-decoration: none;
}

.sidebar li {
  padding: 10px;
  cursor: pointer;
}

.sidebar li:hover {
  background-color: #333;
}

/* Main content area */
.content {
  flex-grow: 1;
  padding: 40px;
  background-color: #f4f4f4;
  display: flex;
  justify-content: center;
  align-items: flex-start; /* or center if you want vertical centering */
}

/* Card style (calculator box) */
.interest-rate-calculator {
  width: 100%;
  max-width: 400px;
  padding: 25px;
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
  border: 1px solid #ddd;
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
/* === Responsive Mobile Version === */
    @media (max-width: 768px) {
        .container {
            flex-direction: column;
        }

        .sidebar {
            width: 100%;
            text-align: center;
        }
        .sidebar li {
            display: inline-block;
            width: 45%;
            margin: 5px;
            background-color: #333;
            border-radius: 5px;
        }

        .content {
            padding: 20px;
            align-items: center;
    }
    .interest-rate-calculator {
            max-width: 100%;
        }
    }
    </style>
</head>
<body>
    <div class="container">
  <div class="sidebar">
    <ul>
        <li><a href="pages/basic-arithmetic.php" class="nav-link">Basic Calculator</a></li>
      <li><a href="pages/interest-rate.php" class="nav-link">Interest Calculator</a></li>
      <li><a href="pages/bmi.php" class="nav-link">BMI Calculator</a></li>
    </ul>
  </div>
  <div class="content" id="main-content">
    <!-- Content will load here -->
  </div>
</div>   
    <?php include("includes/footer.php");?>

<script>
document.addEventListener("DOMContentLoaded", () => {
  const links = document.querySelectorAll(".nav-link");

  links.forEach(link => {
    link.addEventListener("click", function (e) {
      e.preventDefault(); // stop the full page load

      const url = this.getAttribute("href");

      // Use Fetch API to get the page content
      fetch(url)
        .then(res => {
          if (!res.ok) throw new Error("Page not found");
          return res.text();
        })
        .then(data => {
          document.getElementById("main-content").innerHTML = data;
          window.history.pushState({}, "", url); // change the URL without reload
        })
        .catch(err => {
          document.getElementById("main-content").innerHTML = "<p>Please reload page.</p>";
        });
    });
  });
});
</script>
</body>
</html>