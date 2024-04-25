<?php
require_once('DBconnect.php');

$data = json_decode(file_get_contents('php://input'), true);

$planName = $data['planName'];
$peopleCount = $data['peopleCount'];
$nicknames = $data['nicknames'];

// Create a new table with the name of the meal plan
$sql = "CREATE TABLE `$planName` (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nickname VARCHAR(30) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table $planName created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

// Insert the nicknames into the table
foreach ($nicknames as $nickname) {
    $sql = "INSERT INTO `$planName` (nickname) VALUES ('$nickname')";

    if ($conn->query($sql) !== TRUE) {
        echo "Error inserting data: " . $conn->error;
    }
}
header('Location: myaccount.php');
$conn->close();
?>