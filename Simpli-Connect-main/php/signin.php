<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $username = $_POST["uname"];
    $password = $_POST["pword"];
    $job = $_POST['group'];

    // Database connection credentials
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $database = "bank";

    // Create a database connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query to check if the username already exists
    $checkQuery = "SELECT * FROM users WHERE uname='$username'";
    $result = $conn->query($checkQuery);

    if ($result->num_rows > 0) {
        // Username already exists, show alert box
        echo '<script>alert("Username already exists. Please choose a different username.");window.history.back();</script>';
    } else {
        // Username is available, insert into the table
        $insertQuery = "INSERT INTO users (uname, pword, job)
                        VALUES ('$username', '$password', '$job')";

        if ($conn->query($insertQuery) === true) {
            header("Location: ../login page.html");
        } else {
            echo "Error: " . $insertQuery . "<br>" . $conn->error;
        }
    }

    // Close the database connection
    $conn->close();
}
?>

