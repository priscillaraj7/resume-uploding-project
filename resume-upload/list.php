<?php
$servername = "localhost";
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$dbname = "candidates_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, resume FROM candidates";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h1>List of Candidates</h1>";
    echo "<table border='1'><tr><th>ID</th><th>Name</th><th>Resume</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"]. "</td><td><a href='uploads/" . $row["resume"]. "' download>" . $row["resume"]. "</a></td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
