<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Meal Share</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <header>
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="myaccount.php">My Account</a></li>
       
      </ul>
    </nav>
  </header>
  <main>
    <h1>Meal Share</h1>
    <form id="mealShareForm" action="chosedb.php" method="post">
      <input type="text" id="planName" placeholder="Name of the meal plan" required>
      <input type="number" id="peopleCount" placeholder="Number of people" required>
      <div id="nicknames"></div>
      <button type="submit">Submit</button>
    </form>
  </main>
  <footer>
    <p>&copy; 2023 Bachelor's Budget Management. All rights reserved.</p>
  </footer>
  <script src="script.js"></script>
</body>
</html>