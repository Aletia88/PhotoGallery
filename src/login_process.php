<?php
  session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Gallery";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $dbname);



if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate the username and password
  
        
        $query = "SELECT * FROM users WHERE username = '$username'";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            $storedPassword = $row['password'];

            // Compare the stored password with the user input
            if (password_verify($password, $storedPassword)) {
              
                $_SESSION['username'] = $username;
                header("Location: index.php");
                exit();
            } else {
                // Authentication failed
                $error = "Invalid username or password.";
            }
        } else {
            // Authentication failed
            $error = "Invalid username or password.";
        }
    }

?>