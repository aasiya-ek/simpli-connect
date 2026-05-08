<?php
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

// SQL query to retrieve data from the table
$selectQuery = "SELECT * FROM users";

// Execute the query
$result = $conn->query($selectQuery);

?>

<!DOCTYPE html>
<html>
<head>
    <title>User Table</title>
    <style>
        body {
            background-color: black;
            color: white;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-left: auto;
            margin-right: auto;
        }

        table, th, td {
            border: 1px solid white;
            padding: 5px;
        }

        th {
            background-color: black;
        }

        td {
            background-color: #222;
        }
    </style>
</head>
<body>
    <h1>User Table</h1>
    <table>
        <tr>
            <th>Username</th>
            <th>Password</th>
            <th>Job</th>
        </tr>
        <?php
        // Check if there are any records
        if ($result->num_rows > 0) {
            // Output data for each row
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["uname"] . "</td>";
                echo "<td>" . $row["pword"] . "</td>";
                echo "<td>" . $row["job"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No records found.</td></tr>";
        }
        ?>
    </table>

    <br><br><br><br>
    <h1>Query Asked by User</h1>
    <?php
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

// SQL query to retrieve data from the table
$selectQuery = "SELECT * FROM contact";

// Execute the query
$result = $conn->query($selectQuery);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Contact Table</title>
    <style>
        body {
            background-color: black;
            color: white;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-left: auto;
            margin-right: auto;
        }

        table, th, td {
            border: 1px solid white;
            padding: 5px;
        }

        th {
            background-color: black;
        }

        td {
            background-color: #222;
        }
    </style>
</head>
<body>
    <h1></h1>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Content</th>
        </tr>
        <?php
        // Check if there are any records
        if ($result->num_rows > 0) {
            // Output data for each row
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["content"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No records found.</td></tr>";
        }
        ?>
    </table>
</body>
</html>


</body>
</html>

<?php
// Close the database connection
$conn->close();
?>
