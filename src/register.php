<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body class="bg-gray-100">

<div class="container text-start  mx-auto mt-10 p-6 bg-white rounded-lg shadow-xl max-w-xl h-screen">
    <h2 class="text-center text-3xl mb-6 font-bold ">Registration Form</h2>
    
    <form class="flex flex-col justify-start" method="post" action="register_process.php">
        <div class="mb-6">
            <label class="none text-gray-700 w-1/3 font-bold mb-2 text-start" for="firstname">
                First name:
            </label>
            <input class="appearance-none border rounded w-2/3 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="firstname" type="text" placeholder="Enter your first name" name="firstname" required>
        </div>
        <div class="mb-6">
            <label class="none text-gray-700 w-1/3 font-bold mb-2" for="lastname">
                Last name:
            </label>
            <input class="appearance-none border rounded w-2/3 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="lastname" type="text" placeholder="Enter your last name" name="lastname" required>
        </div>
        <div class="mb-6">
            <label class="none text-gray-700 w-1/3 font-bold mb-2" for="username">
                Username:
            </label>
            <input class="appearance-none border rounded w-2/3 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Enter your username" name="username" required>
            <p class="error-message" id="usernameError"></p>
        </div>
        <div class="mb-6">
            <label class="none text-start text-gray-700 w-1/3 font-bold mb-2" for="email">
                Email address:
            </label>
            <input class="appearance-none border rounded w-2/3 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="Enter your email address" name="email" required>
        </div>
        <div class="mb-6">
            <label class="none text-gray-700 w-1/3 font-bold mb-2" for="password">
                Password:
            </label>
            <input class="appearance-none border rounded w-2/3 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="Enter your password" name="password" required>
        </div>
        <div class="mb-6">
            <label class="none text-gray-700 w-1/3 font-bold mb-2" for="confirmpassword">
                Confirm password:
            </label>
            <input class="appearance-none border rounded w-2/3 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="confirmpassword" type="password" placeholder="Re-type the password" name="confirmpassword" required>
            <p id="passwordError" class="error-message"></p>
        </div>
        <div class="mb-6">
            <label class="none text-gray-700 w-1/3 font-bold mb-2" for="phone">
                Phone number:
            </label>
            <input class="appearance-none border rounded w-2/3 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="phone" type="text" placeholder="Enter your phone number" name="phone_number" pattern="[0-9]{10}" required>
        </div>
        
        <div class="text-center">
            <input class="bg-yellow-600 hover:bg-yellow-800 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-2/3 mb-4" type="submit" value="submit" name="submit" onclick="validateForm()">
        </div>
    </form>
    
</div>

<script>
        function validateForm() {
            var password = document.getElementById("password").value;
            var confirmPassword = document.getElementById("confirmpassword").value;
            var errorElement = document.getElementById("passwordError");

            if (password !== confirmPassword) {
                errorElement.textContent = "Passwords do not match!";
                event.preventDefault(); // Prevent form submission
            } else {
                errorElement.textContent = ""; // Clear error message
            }
      
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("confirmpassword").value;
        var errorElement = document.getElementById("passwordError");

        // Check if passwords match
        if (password !== confirmPassword) {
            errorElement.textContent = "Passwords do not match!";
            event.preventDefault();
        } else {
            errorElement.textContent = "";
        }


        // Check if the username is already taken
        var username = document.getElementById("username").value;
        var usernameErrorElement = document.getElementById("usernameError");

        // Make an AJAX request to check the username
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var response = this.responseText;
                if (response === "exists") {
                    usernameErrorElement.textContent = "Username already exists. Please choose a different username.";
                } else {
                    // The username is available, clear any previous error message
                    usernameErrorElement.textContent = "";
                }
            }
        };
        xhttp.open("GET", "check_username.php?username=" + username, true);
        xhttp.send();
    }
    </script>

</body>
</html>