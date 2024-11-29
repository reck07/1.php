<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    // Database connection
    $conn= mysqli_connect('localhost', 'root', '', 'test1') or die("Connection Failed:" .mysqli_connect_error());

    // Check if all fields are set
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['bloodgroup'])) {
        // Sanitize inputs to prevent SQL injection
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $phone = mysqli_real_escape_string($conn, $_POST['phone']);
        $bloodgroup = mysqli_real_escape_string($conn, $_POST['bloodgroup']);

        // Correct table and column name syntax
        $sql = "INSERT INTO `users` (`name`, `email`, `phone`, `bloodgroup`) VALUES ('$name', '$email', '$phone', '$bloodgroup')";

        // Execute query
        $query = mysqli_query($conn, $sql);

        if ($query) {
            echo 'Entry successful';
        } else {
            echo 'Error occurred: ' . mysqli_error($conn); // Display detailed error
        }
    } else {
        echo 'All fields are required.';
    }

    // Close database connection
    mysqli_close($conn);
}
?>
