<?php
require_once('DBconnect.php');
session_start();
$phn = $_SESSION['phone']; 


    // Get the form values
    $person = $_POST['person'];
    $item = $_POST['item'];
    $amount = $_POST['amount'];

    $query = "SELECT plan1 FROM users WHERE `phone` = '$phn'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);
    $plan1 = $row['plan1'];

    // Escape the values to prevent SQL injection
    $person = mysqli_real_escape_string($conn, $person);
    $item = mysqli_real_escape_string($conn, $item);
    $amount = mysqli_real_escape_string($conn, $amount);

    // Check if the column exists in the table
    $columnExists = mysqli_query($conn, "SHOW COLUMNS FROM `{$plan1}-names` LIKE '$person'");

   
        // Create a new row in the {$plan1}-names and {$plan1} tables
        $sql = "INSERT INTO `{$plan1}-names` (`$person`) VALUES ('$item')";
        $result = mysqli_query($conn, $sql);
        $sql1 = "INSERT INTO `{$plan1}` (`$person`) VALUES ('$amount')";
        $result1 = mysqli_query($conn, $sql1);
        $sql2 = "INSERT INTO `$plan1-transactions`(`name`, `item`, `amount`, `timestamp`) VALUES ('$person','$item','$amount', NOW())";
        $result2 = mysqli_query($conn, $sql2);
        
        if($result && $result1){
            echo "Data inserted successfully.";
            header("Location: plan.php");
        } else {
            echo "Error inserting data: " . mysqli_error($conn);
        }
    
?>