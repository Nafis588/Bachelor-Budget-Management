<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
    <main>
        <h1>Welcome to Bachelor's Budget Management</h1>
        <p>Manage your finances with ease!</p>
      </main>  
  <header>
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="login.php">Login</a></li>
      </ul>
    </nav>
  </header>
  <main>
    <h1>Registration</h1>
    <?php
        if(isset($_SESSION['error1'])) {
            echo '<p><span style="color: rgb(255, 0, 0); font-weight: bold">
            This phone number is already used.<br>Please, try again.</span></p>';
            unset($_SESSION['error']);
        };
        ?>
    <form id="registrationForm" action="insert_bachelor.php" method="post">
        <input type="text" id="name" name="name" placeholder="Name" required>
        <input type="email" id="email" name="email" placeholder="Email" required>
        <input type="tel" id="contact" name="contact" placeholder="Contact" required>
        <input type="text" id="plan1" name="plan1" placeholder="Plan Name" required>
        <input type="text" id="p1" name="p1" placeholder="Person One Name" required>
        <input type="text" id="p2" name="p2" placeholder="Person two Name" required>
        <input type="text" id="p3" name="p3" placeholder="Person three Name" required>
        <input type="text" id="p4" name="p4" placeholder="Person four Name" required>
        <br>
        <br>
        <input type="password" id="password" name="password" placeholder="Password" required>
        <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password" required>
        <button type="submit">Register</button>
      </form>
  </main>
  <br>
  <br>
  <br>
  <footer>
    <p>&copy; 2023 Bachelor's Budget Management. All rights reserved.</p>
  </footer>
  <script src="script.js"></script>
</body>
</html>
