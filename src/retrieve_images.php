<?php

// Replace 'your_host', 'your_username', 'your_password', and 'your_database' with your actual database credentials
// $host = 'localhost';
// $username = 'root';
// $password = '';
// $database = 'Gallery';

// // // Create a database connection
// $conn = mysqli_connect($host, $username, $password, $database);

// // Check if the connection was successful
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }

// // SQL query to create the 'approved' table
// // $sql = "CREATE TABLE approved (
//     id INT(11) AUTO_INCREMENT PRIMARY KEY,
//     image_url VARCHAR(255) NOT NULL
// )";

// // Execute the query
// if (mysqli_query($conn, $sql)) {
//     echo "Table 'approved' created successfully.";
// } else {
//     echo "Error creating table: " . mysqli_error($conn);
// }

// Close the database connection



// Replace 'your_host', 'your_username', 'your_password', and 'your_database' with your actual database credentials





// // SQL query to retrieve images from the 'approved' table
// $sql = "SELECT image_url FROM approved";

// // Execute the query
// $result = mysqli_query($conn, $sql);

// // Check if any rows were returned
// if (mysqli_num_rows($result) > 0) {
//     // Loop through each row
//     while ($row = mysqli_fetch_assoc($result)) {
//         // Get the image URL from the row
//         $imageUrl = $row['image_url'];

//         // Display the image
//         echo '<img src="' . $imageUrl . '" alt="">';
//     }
// } else {
//     // echo "No images found.";
// }

// // Close the database connection
// mysqli_close($conn);
// ?>
