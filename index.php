<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php
    require_once('DBconnect.php');
    session_start();
    ?>
  <title>Budget Management</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <main>
    <h1>Welcome to Bachelor's Budget Management</h1>
    <p>Manage your finances with ease!</p>
  </main>
  <br>
  <br>
  <header>
    <nav>
      <ul>
      <?php
    $l1 = 'index.php';
    $l2 = 'login.php';
    $l3 = 'registration.php';
    $l4 = 'myaccount.php';
    $l5 = 'plan.php';
    $l6 = 'chose.php';
    $l7 = 'logout.php';
    $ses = false;
    if (isset($_SESSION['phone'])) {
        $ses = true;
      }
    if ($ses == false) {
        echo "<li><a href='$l1'>Home</a></li>";
        echo "<li><a href='$l2'>Login</a></li>";
        echo "<li><a href='$l3'>Registration</a></li>";

    }elseif($ses == true){
        echo "<li><a href='$l1'>Home</a></li>";
        echo "<li><a href='$l6'>Test</a></li>";
        echo "<li><a href='$l5'>Meal Management</a></li>";
        echo "<li><a href='$l4'>My Account</a></li>";
        echo "<li><a href='$l7'>Logout</a></li>";
    }
    ?>
      </ul>
    </nav>
  </header>
  <br>
  <br>
  <br>
  <div id="quote"></div>
  <footer>
    <p>&copy; 2023 Bachelor's Budget Management. All rights reserved.</p>
  </footer>
  <script src="script.js"></script>
</body>
</html>