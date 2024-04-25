<?php
 require_once('DBconnect.php');
 session_start();
 $phn = $_SESSION['phone'];   
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Meal Plan</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <header>
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="myaccount.php">My Account</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </nav>
  </header>
  <main>
    <h1>Meal Plan</h1>
    <section>
      <h2>Add Expense</h2>
      <form id="expenseForm" action="planc.php" method="post">
        <input type="text" id="person" name="person" placeholder="Person" required>
        <input type="text" id="item" name="item" placeholder="Item Bought" required>
        <input type="number" id="amount" name="amount" placeholder="Amount Paid" required>
        <button type="submit">Add</button>
      </form>
</section>
    <br>
    <br>
    <section>
      <h2>Expenses</h2>
      <?php
$query = "SELECT plan1 FROM users WHERE `phone` = '$phn'";

// Execute the query 
$result = mysqli_query($conn, $query);

$row = mysqli_fetch_array($result);

$plan1 = $row['plan1']; // Assuming this is the name of the table

$query = "SELECT COLUMN_NAME 
          FROM INFORMATION_SCHEMA.COLUMNS 
          WHERE TABLE_NAME = '$plan1' 
          AND TABLE_SCHEMA = 'bachelor'"; // Replace with your actual database name

$result = mysqli_query($conn, $query);

while($row = mysqli_fetch_array($result)){
  $column_names[] = $row['COLUMN_NAME'];
}
?>
      <table id="expensesTable">
    <thead>
      <tr>
        <th></th>
        <?php foreach($column_names as $column_name): ?>
        <th><?php echo $column_name; ?></th>
        <?php endforeach; ?>
      </tr>
    </thead>
    <tbody>
    <?php
    // Loop through the data and create the HTML
          $queryNames = "SELECT * FROM `{$plan1}-names`"; // Replace with your actual query
      $queryAmounts = "SELECT * FROM `{$plan1}`"; // Replace with your actual query

      // Execute the queries and assign the results to $resultNames and $resultAmounts
      $resultNames = mysqli_query($conn, $queryNames);
      $resultAmounts = mysqli_query($conn, $queryAmounts);

      // Check if the queries were successful
      if (!$resultNames || !$resultAmounts) {
          die("Query failed: " . mysqli_error($conn));
      }

      // Now you can use $resultNames and $resultAmounts in your while loop

      // Now you can use $resultNames and $resultAmounts in your while loop
      $totals = [];

      // Now you can use $resultNames and $resultAmounts in your while loop
      while($rowNames = mysqli_fetch_assoc($resultNames)) {
          if($rowAmounts = mysqli_fetch_assoc($resultAmounts)) {
              echo "<tr>";
              echo "<td>Expenses</td>";
              foreach($rowNames as $person => $item) {
                $price = empty($rowAmounts[$person]) ? 0 : $rowAmounts[$person];
                $item = empty($rowAmounts[$person]) ? 'Nothing' : $rowNames[$person];
                echo "<td>$item &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$price BDT</td>";
                  // Add the price to the total for this person
                  if (!isset($totals[$person])) {
                      $totals[$person] = 0;
                  }
                  $totals[$person] += $price;
              }
              echo "</tr>";
          }
      }

      // Now, outside the while loop, display the totals for each person
      echo "<tr>";
      echo "<td>Total</td>";
      foreach($totals as $person => $total) {
          echo "<td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$total BDT</td>";
      }
      echo "</tr>";
      $grandTotal = array_sum($totals);
      $average= $grandTotal/4;

          ?>
  
</tbody>
</table>
<br>
<br>
<br>
<div id="costSummary">
      <div class="costBox">
          <label for="totalCost">Total Cost:</label>
          <span id="totalCost"><?php echo $grandTotal; ?> BDT</span>
      </div>
            <div class="costBox">
              <label for="averageCost">Average Cost per Person:</label>
              <span id="averageCost"><?php echo $average ?> BDT</span>
            </div>
          </div>
    </section>
      <br>
      <br>
      <div class="table-container">
        <div class="table-wrapper">
            <table id="historyTable">
              <?php
                $query = "SELECT * FROM `{$plan1}-transactions` ORDER BY amount DESC LIMIT 5";

                $result = mysqli_query($conn, $query);
                echo '<table id="historyTable">';
                echo '<thead><tr><th>History</th></tr></thead>';
                echo '<tbody>';

                while ($row = mysqli_fetch_assoc($result)) {
                    $name = $row['name'];
                    $item = $row['item'];
                    $amount = $row['amount'];
                    $time = $row['timestamp'];
                    echo "<tr><td>$name has bought $item for $amount tk at $time</td></tr>";
                }

                echo '</tbody></table>';
                ?>
              </table>
        </div>
        <div class="table-wrapper">
          <?php
              // Define your SQL query
              $query = "SELECT * FROM `{$plan1}`"; // Replace with your actual query

              // Execute the query and assign the result to $result
              $result = mysqli_query($conn, $query);

              // Check if the query was successful
              if (!$result) {
                  die("Query failed: " . mysqli_error($conn));
              }

              // Calculate the average
              $totals = [];
              while($row = mysqli_fetch_assoc($result)) {
                  foreach($row as $name => $amount) {
                      if (!isset($totals[$name])) {
                          $totals[$name] = 0;
                      }
                      $totals[$name] += $amount;
                  }
              }
              $average = 0;
              if (count($totals) > 0) {
                $average = array_sum($totals) / count($totals);
               }

              // Start the table
              echo '<table id="bankTable">';
              echo '<thead><tr><th colspan="2" style="text-align: center;">System Credit</th></tr></thead>';
              echo '<thead><tr><th> Minus(-) means you will get</th><th>Plus(+) means you will give</th></thead>';
              echo '<thead><tr><th>Name</th><th>Amount</th></tr></thead>';
              echo '<tbody>';

              // Loop through the data and create the rows
              foreach ($totals as $name => $total) {
                if ($average == 0) {
                    echo "<tr><td>$name</td><td>0 BDT</td></tr>";
                } else {
                    $adjustedAmount = $average - $total;
                    echo "<tr><td>$name</td><td>$adjustedAmount tk</td></tr>";
                }
            }

              // End the table
              echo '</tbody></table>';
              ?>
        </div>
      </div>
    
</main>
<br>
<br>
<br>
<br>
<footer>
  <p>&copy; 2023 Bachelor's Budget Management. All rights reserved.</p>
</footer>
<script src="script.js"></script>
</body>
</html>