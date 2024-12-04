<?php
$servername = "localhost";
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$dbname = "candidates_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST['name']);
    $resume = $_FILES['resume']['name'];
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($resume);

    if (move_uploaded_file($_FILES['resume']['tmp_name'], $target_file)) {
        $sql = "INSERT INTO candidates (name, resume) VALUES ('$name', '$resume')";
        if ($conn->query($sql) === TRUE) {
            echo "Resume uploaded successfully. <a href='index.html'>Go back</a>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

$conn->close();
?>
