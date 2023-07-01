<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Web Gallery - Login</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="slideshow.css">
</head>
<body class="bg-whtie flex  w-screen gap-48">

 
  <img src="images/photograper3.jpg" alt="Mountain Top " class="h-screen w-1/3 m-0 p-0 opacity-70">
     <!-- <div class="image-slideshow w-1/2 ml-0 p-0">
      <div class="image fade">
      <img src="images/coffe2.jpg" alt="Mountain Top " class="h-screen w-full m-0 p-0 ">
      </div>        
      <div class="image fade">
      <img src="images/coffe.jpg" alt="Palm Trees" class="h-screen w-full m-0 p-0 ">
      </div>        
      <div class="image fade">
      <img src="images/coffe3.webp" alt="Neon Sign" class="h-screen w-full m-0 p-0 ">
      </div>
    </div> -->
    




  <div class="flex flex-col items-center justify-center h-screen">
    <h1 class="text-center text-3xl font-bold font-mono mb-12 text-orange-300">Welcome to Web Gallery!</h1>
    <form class="w-full max-w-md p-6 rounded-lg shadow-lg bg-white">
      <h2 class="text-4/3xl font-bold mb-6 text-center text-orange-800">Login</h2>
      <div class="mb-6">
        <label class="none text-gray-700 font-bold mb-2" for="email">Email Address:</label>
        <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"  id="email" type="email" placeholder="Enter your email address">
      </div>
      <div class="mb-6">
        <label class="none text-gray-700 font-bold mb-2" for="password">Password:</label>
        <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline shadow-lg" id="password" type="password" placeholder="Enter your password ">
      </div>
      <div class="flex items-center justify-between mb-6">
        <label class="inline-flex items-center text-gray-700 font-bold">
          <input type="checkbox" class="form-checkbox h-4 w-4 text-yellow-600 focus:outline-none focus:shadow-outline" checked>
          <span class="ml-2">Remember me</span>
        </label>
        <a class="inline-block align-baseline font-bold text-sm text-yellow-600 hover:text-yellow-800" href="#">Forgot Password?</a>
      </div>
      <button class="bg-yellow-600 hover:bg-yellow-800 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full mb-4" type="submit" > <a href="./index.html">Login</a> </button>
      <p class="text-gray-700 text-sm">Don't have an account? <a class="font-bold text-yellow-600 hover:text-yellow-800" href="./register.php">Sign up</a>.</p>
    </form>
  </div>

  <script src="app.js"></script>
  <script src="slideshow.js"></script>

</body>
</html>
