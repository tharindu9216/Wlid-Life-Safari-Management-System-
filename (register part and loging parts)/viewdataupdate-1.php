<?php
include 'configSeller.php' ;
?>
<!DOCTYPE html>
<html>
<head>
    <title>Seller Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff;/* Set the background color to blue */
            color: #0056b3; /* Set text color to white */
            background-image: url("bg9.jpg");
            background-size: cover; /* Adjust to your preferred image sizing */
            background-attachment: fixed;
           
            
        }

        h2 {
            text-align: center;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background: #fff; /* Set form background color to white */
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 0px 5px 0px #888888;
        }

        label {
            display: block;
            font-weight: bold;
            color: #333; /* Text color for labels */
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 15px;
        }

        input[type="submit"] {
            background-color: #0056b3; /* Darker blue for the button */
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
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
    </style>
</head>
<body>
<form  action="submitupdate.php" method="GET" >
    Firstname
    <input type="text" value="<?php echo htmlspecialchars($firstname); ?>" name="field0">
    <input type="submit" name="submit" value="Submit">
</form>
   
</body>
</html>
