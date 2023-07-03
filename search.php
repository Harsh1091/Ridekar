<?php
require_once 'database_connection.php';

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ride_sharing";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ride_sharing";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$from = $_POST["fromInput"];
$to = $_POST["toInput"];
$date = $_POST["dateInput"];
$time = $_POST["timeInput"];

$sql = "SELECT * FROM rides WHERE from_location = '$from' AND to_location = '$to' AND ride_date = '$date' AND ride_time = '$time'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Found a ride from " . $row["from_location"] . " to " . $row["to_location"] . " on " . $row["ride_date"] . " at " . $row["ride_time"] . "<br>"
        ." offered by ". $row["U_Name"] . " Contact " . $row["Contact"];
    }
} else {
    echo "No rides found from $from to $to on $date at $time";
}

$conn->close();
?>
