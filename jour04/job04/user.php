<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "utilisateur";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM utilisateur";
$result = $conn->query($sql);

$user = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $user[] = $row;
    }
}

echo json_encode($user);

$conn->close();
?>