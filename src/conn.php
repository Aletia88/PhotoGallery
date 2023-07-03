<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Photo Gallery</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css">
  
  <!-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19"rel="stylesheet"> -->
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="d.css">
</head>
<body>
    <div class="container text-start  mx-auto mt-10 p-6 bg-white rounded-lg shadow-xl max-w-xl ">
        <h1 class="text-center text-3xl mb-6 font-bold text-orange-500">Registration Successful</h1>
    <p class=" text-center text-2xl ">Your registration was successful. You can now log in using your credentials.</p>
    <p class=" text-center text-2xl my-10  "><button class="bg-yellow-600 hover:bg-yellow-800 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-1/3 mb-4 text-center"> <a href="login.php">Log in</a> </button> </p>
</div>
    
</body>
</html>

<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "Gallery";

// // Create a connection
// $connection = mysqli_connect($servername, $username, $password, $dbname);

// // Check connection
// if (!$connection) {
//     die("Connection failed: " . mysqli_connect_error());
// }

// // Select the database
// if (!mysqli_select_db($connection, $dbname)) {
//     die("Database selection failed: " . mysqli_error($connection));
// }

// if (isset($_POST["submit"])) {
//     // Retrieve form data
//     $firstname = $_POST["firstname"];
//     $lastname = $_POST["lastname"];
//     $username = $_POST["username"];
//     $password = $_POST["password"];
//     $email = $_POST["email"];
//     $phonenumber = $_POST["phonenumber"];

//     // Validate and sanitize the input (you can add more validation/sanitization as needed)
//     $firstname = mysqli_real_escape_string($connection, $_POST["firstname"]);
//     $lastname = mysqli_real_escape_string($connection, $_POST["lastname"]);
//     $username = mysqli_real_escape_string($connection, $_POST["username"]);
//     $password = mysqli_real_escape_string($connection, $_POST["password"]);
//     $email = mysqli_real_escape_string($connection, $_POST["email"]);
//     $phonenumber = mysqli_real_escape_string($connection, $_POST["phonenumber"]);

//     // Hash the password
//     $password = password_hash($password, PASSWORD_DEFAULT);

//     // Prepare the SQL statement
//     $sql = "INSERT INTO userinfo (firstname, lastname, username, pasword, email, phonenumber) VALUES ('$firstname', '$lastname', '$username', '$password', '$email', '$phonenumber')";

//     // Execute the SQL statement
//     if (mysqli_query($connection, $sql)) {
//         echo " registration successfull.";
//     } else {
//         echo "Error: " . $sql . "<br>" . mysqli_error($connection);
//     }
// }

// // Close the connection

// mysqli_close($connection);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Gallery";

// Create a connection
$connection = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST["submit"])) {
    // Retrieve form data
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $phonenumber = $_POST["phonenumber"];

    // Validate and sanitize the input (you can add more validation/sanitization as needed)
    $firstname = mysqli_real_escape_string($connection, $_POST["firstname"]);
    $lastname = mysqli_real_escape_string($connection, $_POST["lastname"]);
    $username = mysqli_real_escape_string($connection, $_POST["username"]);
    $password = mysqli_real_escape_string($connection, $_POST["password"]);
    $email = mysqli_real_escape_string($connection, $_POST["email"]);
    $phonenumber = mysqli_real_escape_string($connection, $_POST["phonenumber"]);

    // Hash the password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // Select the "Gallery" database
    mysqli_select_db($connection, $dbname);

    // Prepare the SQL statement
    $stmt = mysqli_prepare($connection, "INSERT INTO userinfo (firstname, lastname, username, pasword, email, phonenumber) VALUES (?, ?, ?, ?, ?, ?)");

    // Bind parameters and execute the statement
    mysqli_stmt_bind_param($stmt, "ssssss", $firstname, $lastname, $username, $password, $email, $phonenumber);
    mysqli_stmt_execute($stmt);

    // Check if the insertion was successful
    if (mysqli_stmt_affected_rows($stmt) > 0) {
        
        // Redirect to a success page
       
    } else {
        echo "Failed to insert data.";
    }

    // Close the statement
    mysqli_stmt_close($stmt);
}

// Close the connection
mysqli_close($connection);


?>