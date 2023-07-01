<!DOCTYPE html>
<html>
<head>
  <title>Web Gallery Profile Page</title>
  <link rel="stylesheet" href="profile.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css">

</head>
<body>
  <div class="flex justify-between m-5 items-center gap-48">

   
    <a href="./index.php" class="">Photo Gallery</a>
  
    <nav >
      <ul class="flex gap-5">
        <li><a href="./index.php" class="active">Home</a></li>
        <li><a href="./About.php">About</a></li>
        <li><a href="./login.php">Login/Signin</a></li>
        <li><a href="./contactUs.php">Contact Us</a></li>
        <li><a href="./Help.php">Help</a></li>
      </ul>
    </nav>
  </div>
  <div class="pro flex flex-col items-center">
    <img src="images/photo.jpg" alt="pro Image">
    <h1>John Doe</h1>
    <p>Photographer</p>
    <button class="text-yellow-400 font-bold "> <a href="./editprofile.php">Edit Profile</a> </button>
  </div>
  
  <div class="h-[50vh] bg-white">
      <div class="gal">

      <img src="image1.jpg" alt="Image 1">
      <img src="image2.jpg" alt="Image 2">
      <img src="image3.jpg" alt="Image 3">
      <img src="image4.jpg" alt="Image 4">
      <img src="image5.jpg" alt="Image 5">
    </div>
    <!-- Add more images here -->
    <button class="relative left-3">Upload Image</button>
  </div>

</body>
</html>
