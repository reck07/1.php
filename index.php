<!DOCTYPE html>
<html lang="em">
<head>
    <meta charset = "URF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <h1> Blood Donation Camp</h1>
    <body bgcolor="#FBB917">
        <div><h2>Registration form</h2></div>
        <form action='connect.php' method="POST">
            <label for="user">Name:</label><br>
            <input type='text' name='name' id="name" required/><br><br>

            <label for="email">Email:</label><br>
            <input type='email' name='email' id="email" required/><br><br>

            <label for="phone">PHONE:</label><br>
            <input type='text' name='phone' id="phone" required/><br><br>

            <label for="bloodgroup">BLOODGROUP:</label><br>
            <input type='text' name='bloodgroup' id="bloodgroup" required/><br><br>

            <input type="submit" name='submit' id="submit"/>
        </form>
</body>
</html>
