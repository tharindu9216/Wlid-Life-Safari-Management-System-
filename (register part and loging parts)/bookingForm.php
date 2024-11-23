<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["BName"]) && isset($_POST["BEmail"]) && isset($_POST["BPhone"]) && isset($_POST["BDepartureDate"])&& isset($_POST["BReturnDate"])&& isset($_POST["BNumberOfPeople"])&& isset($_POST["BSpecialRequests"])) {
    include("configSeller.php"); // Include your database configuration

    // Define variables to store form data
    $fullName = $_POST["BName"];
    $email = $_POST["BEmail"];
    $phone = $_POST["BPhone"];
    $departureDate = $_POST["BDepartureDate"];
    $returnDate = $_POST["BReturnDate"];
    $numberOfPeople = (int)$_POST["BNumberOfPeople"];
    $specialRequests = $_POST["BSpecialRequests"];

    // You should perform further input validation and sanitization here

    // Insert data into your database without prepared statement (not recommended for security reasons)
    $sql = "INSERT INTO bookings (full_name, email, phone, departure_date, return_date, number_of_people, special_requests)
            VALUES ('$fullName', '$email', '$phone', '$departureDate', '$returnDate', $numberOfPeople, '$specialRequests')";

    if (mysqli_query($connection, $sql)) {
        // Data was successfully inserted
        echo "Booking submitted successfully.";
        header("Location: Login.php");
    } else {
        // Error in SQL query
        echo "Error: " . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Wild Safari Booking Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            background-image: url(bkbg2.jpg); /* Replace with your background image URL */
            background-size: cover; /* Adjust to your preferred image sizing */
            background-attachment: inherit;
        }

        h1 {
            text-align: center;
            color: #005691;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        label {
            display: block;
            margin-top: 10px;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="date"],
        input[type="number"],
        textarea,
        select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
            font-size: 16px;
        }

        select {
            height: 40px;
        }

        textarea {
            height: 100px;
        }

        input[type="submit"] {
            background-color: #005691;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 3px;
        }

        input[type="submit"]:hover {
            background-color: #003c60;
        }
    </style>
</head>
<body>
    <h1>Wild Safari Booking Form</h1>
    <form action="bookingForm.php" method="post">
        <input type="text" id="full_name" name="BName" required placeholder="Full Name">
        <input type="email" id="email" name="BEmail" required placeholder="Email">
        <input type="tel" id="phone" name="BPhone" required placeholder="Phone Number">
        <label for="departure_date">Departure Date:</label>
        <input type="date" id="departure_date" name="BDepartureDate" required>
        <label for="return_date">Return Date:</label>
        <input type="date" id="return_date" name="BReturnDate" required>
        <input type="number" id="number_of_people" name="BNumberOfPeople" required placeholder="Number of People">
        <textarea id="special_requests" name="BSpecialRequests" rows="4" placeholder="Special Requests"></textarea>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
