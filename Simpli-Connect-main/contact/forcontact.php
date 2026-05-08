<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $con = mysqli_connect("localhost", "root", "", "bank");
    
    // Check if the connection was successful
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit;
    }
    
    // Escape user inputs to prevent SQL injection
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $content = mysqli_real_escape_string($con, $_POST['content']);

    // Create the SQL query
    $sql = "INSERT INTO contact (name, email, content) VALUES ('$name', '$email', '$content')";

    // Execute the query
    if (mysqli_query($con, $sql)) {
        // Close the connection
        mysqli_close($con);

        // Display JavaScript alert and redirect
        echo '<script>alert("Data submitted successfully."); window.location.href = document.referrer;</script>';
        exit;
    } else {
        echo "Error: " . mysqli_error($con);
    }

    // Close the connection
    mysqli_close($con);
} else {
    echo "Form not submitted.";
}
?>
