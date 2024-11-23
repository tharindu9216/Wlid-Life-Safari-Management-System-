<!DOCTYPE html>
<html>
<head>
    <title>Online Apartment Sales System</title>
    <style>
        body {
    background-color: #fff; /* Set the background color to blue */
    font-family: Arial, sans-serif;
    color: #0056b3; 
    text-align: center;
    background-image: url("bg9.jpg");
    background-size: cover; /* Adjust to your preferred image sizing */
    background-attachment: fixed;
}

h2 {
    margin-top: 20px; /* Add some space at the top */
    font-size: 28px; /* Increase font size for the heading */
}

.loginArea {
    max-width: 400px;
    margin: 0 auto;
    background: #fff; /* Set form background color to white */
    padding: 20px;
    border-radius: 20px;
    box-shadow: 0px 0px 5px 0px #888888;
}

form {
    display: flex;
    flex-direction: column;
}

input[type="email"],
input[type="password"] {
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 20px;
}

.btn {
    background-color: #0056b3; /* Darker blue for the button */
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-weight: bold;
}

.btn:hover {
    background-color: #003f80; /* Change color on hover */
}

p {
    margin-top: 10px; /* Add some space below the form */
    color: black; /* Set text color to white */
}

a {
    color: red; /* Set link text color to white */
    text-decoration: none;
    font-weight: bold;
}

a:hover {
    text-decoration: underline; /* Underline links on hover */
}
    </style>
</head>
<body>
<h2>Login Form</h2>
    <div class="loginArea">
        <form method="post" action="login.php">
            <input type="email" name="email" placeholder="E-mail"><br>
            <input type="password" name="pwd" placeholder="Password"><br>
            <button type="submit" class="btn" name="submit">Login</button>
        </form>
        <p>Don't have an account? <a href="Register.php">Register</a></p>
    </div>
</body>
</html>

<?php
session_start();

include("configSeller.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Email = $_POST['email'];
    $Password = $_POST['pwd'];
    $sql = "SELECT * FROM register_table WHERE r_email = '$Email' AND r_password = '$Password'";
    $result = mysqli_query($connection, $sql);

    if (mysqli_num_rows($result) > 0) {
        $user_data = mysqli_fetch_array($result);
        header("Location: bookingForm.php");
        exit;
    } else {
        echo "Login failed. Please check your credentials.";
    }
}

mysqli_close($connection);
?>

