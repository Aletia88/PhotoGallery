<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body class="bg-gray-100">

<div class="container text-start  mx-auto mt-10 p-6 bg-white rounded-lg shadow-xl max-w-xl ">
    <h2 class="text-center text-3xl mb-6 font-bold text-orange-500">Registration Form</h2>
    
    <form class="flex flex-col justify-start" method="post" action=" ">
        <div class="mb-6 ">
            <label class="none text-gray-700 w-1/3 font-bold mb-2" for="firstname">
                Fist name:
            </label>
            <input class="appearance-none border rounded w-2/3 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="fistname" type="text" placeholder="Enter your first name" name="firstname">
    </div>
        <div class="mb-6">
            <label class="none text-gray-700 w-1/3  font-bold mb-2" for="last name">
                Last name:
            </label>
            <input class="appearance-none border rounded w-2/3 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="lastname" type="text" placeholder="Enter your last name " name="lastname">
        </div>
        <div class="mb-6">
            <label class="none text-gray-700 w-1/3  font-bold mb-2" for="username">
                Username:
            </label>
            <input class="appearance-none border rounded w-2/3 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Enter your username" name="username">
        </div>
        
        <div class="mb-6">
            <label class="none text-gray-700 w-1/3  font-bold mb-2" for="email">
                    Email address:
            </label>
            <input class="appearance-none border rounded w-2/3 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="Enter your email address" name="email">
        </div>
        <div class="mb-6">
            <label class="none text-gray-700 w-1/3  font-bold mb-2" for="email">
                    Phone number:
            </label>
            <input class="appearance-none border rounded w-2/3 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="Number" placeholder="Enter your phone number" name="phone number">
        </div>
        
        <div class="mb-6">
            <label class="none text-gray-700 w-1/3  font-bold mb-2" for="password">
                Password:
            </label>
            <input class="appearance-none border rounded w-2/3 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="Enter your password" name="password">
        </div>
        <div class="mb-6">
            <label class="none text-gray-700 w-1/3  font-bold mb-2" for="confirm password">
                Confirm password:
            </label>
            <input class="appearance-none border rounded w-2/3 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="confirmpassword" type="text" placeholder="re-type the previous password" name="confirmpassword">
        </div>
        
        <div class="text-center">
            <button class="bg-yellow-600 hover:bg-yellow-800 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-2/3 mb-4" type="submit" value="submit" name="submit">Register</button>

        </div>
    </form>
    
</div>

</body>
</html>