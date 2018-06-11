<?php
include 'funk.php';

$conn = mysqli_connect('localhost:3306', 'root', '');
mysqli_select_db($conn, "test_db");
$id = generate();
$result = json_decode($id)->{'id'};
$command = "INSERT INTO User_IDS (ID2) VALUES ('$result')";
mysqli_query($conn, $command);

$command = "SELECT * FROM User_IDS WHERE (ID2='$result')";
$query = mysqli_query($conn, $command);
$found = mysqli_fetch_array($query);
mysqli_close($conn);

echo "Generated new id: $result in row # " . $found['id'];
