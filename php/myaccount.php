<?php
 require_once('DBconnect.php');
 session_start();
 $phn = $_SESSION['phone'];   
?>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Account</title>
  <link rel="stylesheet" href="styles.css">
</head>


<body>
  <header>
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="chose.php">Meal Share</a></li>
        <li><a href="plan.php">Meal Management</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </nav>
  </header>
  <main>
  <main>
    <h1>My Account</h1>
    <div class="accountInfo">
    <?php
        $query = "SELECT * FROM users WHERE `phone` = '$phn'";
        
        //Execute the query 
        $result = mysqli_query($conn, $query);
        
        $row = mysqli_fetch_array($result);
        
        echo "Name: ".$row['name']. "<br>";
        echo "Phone: ".$row['phone']. "<br>";
        echo "Email: ".$row['email']. "<br>";
        echo "Meal: ".$row['plan1']. "<br>";
        
        ?>
    </div>
</main>
  </main>
  <footer>
    <p>&copy; 2023 Bachelor's Budget Management. All rights reserved.</p>
  </footer>
  <script src="script.js"></script>
</body>
</html>