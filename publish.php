<?php
require_once 'database_connection.php';

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ride_sharing";


$conn = new mysqli($servername, $username, $password, $dbname);


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

$publishFrom = $_POST["publishFromInput"];
$publishTo = $_POST["publishToInput"];
$publishDate = $_POST["publishDateInput"];
$publishTime = $_POST["publishTimeInput"];
$publishSeat = $_POST["publishSeatInput"];
$publishContact = $_POST["publishContactInput"];
$publishName = $_POST["publishNameInput"];

$sql = "INSERT INTO rides (from_location, to_location, ride_date, ride_time, Seats, Contact, U_Name) VALUES ('$publishFrom', '$publishTo', '$publishDate', '$publishTime', '$publishSeat', '$publishContact', '$publishName')";

if ($conn->query($sql) === TRUE) {
    echo "Ride published successfully from $publishFrom to $publishTo on $publishDate at $publishTime";
} else {
    echo "Error publishing ride: " . $conn->error;
}

$conn->close();


?>



