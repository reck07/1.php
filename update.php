<?php
include "config.php";

// Handle the update form submission
if (isset($_POST["update"])) {
    $first_name = $_POST["firstname"];
    $user_id = $_POST["id"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $password = $_POST["password"];

    // Ensure SQL query uses correct syntax
    $sql = "UPDATE users 
            SET firstname = '$first_name', lastname = '$lastname', email = '$email', password = '$password', gender = '$gender' 
            WHERE id = '$user_id'";

    // Execute the query and check for success
    if ($conn->query($sql) === TRUE) {
        echo "Record Updated Successfully";
    } else {
        echo "ERROR: " . $conn->error;
    }
}

// Fetch the user's data to populate the form
if (isset($_GET['id'])) {
    $user_id = $_GET['id'];

    // SQL to select user data
    $sql = "SELECT * FROM users WHERE id = '$user_id'";
    $result = $conn->query($sql);

    // Check if the record exists
    if ($result->num_rows > 0) {
        // Fetch the data
        $row = $result->fetch_assoc();
        $first_name = $row["firstname"];
        $lastname = $row["lastname"];
        $email = $row["email"];
        $password = $row["password"];
        $gender = $row["gender"];
    } else {
        echo "No record found.";
        exit;
    }
} else {
    echo "Invalid request.";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update User</title>
</head>
<body>
    <h2>User Update Form</h2>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?php echo $user_id; ?>">
        <label for="firstname">First Name:</label>
        <input type="text" name="firstname" value="<?php echo $first_name; ?>" required><br>
        
        <label for="lastname">Last Name:</label>
        <input type="text" name="lastname" value="<?php echo $lastname; ?>" required><br>
        
        <label for="email">Email:</label>
        <input type="email" name="email" value="<?php echo $email; ?>" required><br>
        
        <label for="password">Password:</label>
        <input type="password" name="password" value="<?php echo $password; ?>" required><br>
        
        <label for="gender">Gender:</label>
        <select name="gender" required>
            <option value="Male" <?php echo ($gender == "Male") ? "selected" : ""; ?>>Male</option>
            <option value="Female" <?php echo ($gender == "Female") ? "selected" : ""; ?>>Female</option>
        </select><br>
        
        <input type="submit" name="update" value="Update">
    </form>
</body>
</html>
