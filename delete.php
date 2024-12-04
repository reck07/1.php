<?php
include "config.php"; // Include your database connection configuration

if (isset($_GET['id'])) { // Check if 'id' is provided in the URL
    $user_id = $_GET['id'];

    // SQL query to delete the user with the specified id
    $sql = "DELETE FROM users WHERE id = '$user_id'";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully.";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
} else {
    echo "No user ID provided for deletion.";
}

// Close the database connection
$conn->close();
?>
