<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php 
    session_start();
    ?> 
  <title>Meal Share</title>
  <link rel="stylesheet" href="styles.css">
<body>
    <main>
        <h1>Welcome to Bachelor's Budget Management</h1>
        <p>Manage your finances with ease!</p>
      </main>  
  <header>
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="registration.php">Registration</a></li>
      </ul>
    </nav>
  </header>
  <?php
        if(isset($_SESSION['error'])) {
            echo '<p><span style="color: rgb(255, 0, 0); font-weight: bold">
            Incorrect username / password.<br>Please, try again.</span></p>';
            unset($_SESSION['error']);
        };
        ?>
    <form id="loginForm" action="signin.php" method="post">
        <label for="contactNumber">Contact Number:</label><br>
        <input type="tel" id="contactNumber" name="phone" required><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br>
        <input type="submit" value="Login">
    </form>

    <script src="script.js"></script>
    <footer>
    <p>&copy; 2023 Bachelor's Budget Management. All rights reserved.</p>
  </footer>
</body>
</html>