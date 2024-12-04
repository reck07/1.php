<?php
include "config.php";

if (isset($_POST["submit"])) {
    $first_name = $_POST["firstname"]; // Corrected field names to match the form inputs
    $last_name = $_POST["lastname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $gender = $_POST["gender"];

    // Correct SQL syntax (removed single quotes around table and column names)
    $sql = "INSERT INTO users (firstname, lastname, email, password, gender) 
            VALUES ('$first_name', '$last_name', '$email', '$password', '$gender')";

    // Execute the query and check for success
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html>
    <body>
        <h2>Signup Form</h2>
        
        <form action="" method="POST">
            <fieldset>
                <legend>Personal Information:</legend>
                First Name:<br>
                <input type="text" name="firstname" required> <!-- Add 'required' for validation -->
                <br>
                Last Name:<br>
                <input type="text" name="lastname" required>
                <br>
                Email:<br>
                <input type="email" name="email" required> <!-- Added email field -->
                <br>
                Password:<br>
                <input type="password" name="password" required>
                <br>
                Gender:<br>
                <input type="radio" name="gender" value="Male" required>Male
                <input type="radio" name="gender" value="Female" required>Female
                <br><br>
                <input type="submit" name="submit" value="Submit">
            </fieldset>
        </form>
    </body>
</html>
