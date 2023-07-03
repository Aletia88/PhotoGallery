<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css">
  
  <!-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19"rel="stylesheet"> -->
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="d.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="contactus.css">
    <title>Document</title>
</head>
<body>
    <div class="flex justify-between m-5 items-center gap-48">

   
        <a href="./index.php" class="">Photo Gallery</a>
        
        
        <nav >
          <ul class="flex gap-5 justify-center items-center">
            <li><a href="./index.php" class="active">Home</a></li>
            <li><a href="./About.php">About</a></li>
            <li><a href="./login.php">Login/Signin</a></li>
            <li><a href="./contactUs.php">Contact Us</a></li>
            <li><a href="./Help.phph[">Help</a></li>
          </ul>
        </nav>
      </div>
    

    <main>
        <h1 class="text-4xl border-r-2  border-1 pt-3 text-center font-bold w-1/3 p-6">Contact Us</h1>
        <p class=" text-center text-3/2x2 ">Have a question or comment? Fill out the form below to get in touch with us.</p>
        <form  class="form" action="mailto:zewdutamagn@gmail.com" method="post" enctype="text/plain">
          <label class="none text-gray-700 font-bold mb-2" for="name">Name:</label>
          <input type="text" id="name" name="name" required>
    
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>
    
          <label for="message">Message:</label>
          <textarea id="message" name="message" required></textarea>
    
          <button class="text-white bg-orange-500 rounded-lg py-3 px-16 mb-2" type="submit">Send</button>
        </form>


 </main>
        <div class="testimonials flex gap-16 w-[90vw] justify-center shadow-md mx-10">
        <div class="testimonial w-1/3">
  <div class="flex items-center gap-5">
    <img class="rounded-full" src="images/photo1.webp" alt="Testimonial 2">
    <div>
      <p class="testimonial-author font-bold">SAMRAWIT GIRMA</p>
      <div class="flex gap-6 items-center">
        <a href="https://www.linkedin.com/in/your-linkedin-profile" class="text-blue-500">
          <i class="fab fa-linkedin"></i> 
        </a>
        <a href="mailto:your-email@example.com" class="text-blue-500">
          <i class="far fa-envelope"></i> 
        </a>
      </div>
    </div>
  </div>
  <p class="testimonial-text">"Junior web developer and third-year Arbaminch University software engineering student"</p>
</div>
        
          <div class="testimonial w-1/2">
  <div class="flex items-center gap-5">
    <img class="rounded-full" src="images/photo1.webp" alt="Testimonial 2">
    <div>
      <p class="testimonial-author font-bold">TAMAGN ZEWDU</p>
      <div class="flex gap-6 items-center">
        <a href="https://www.linkedin.com/in/your-linkedin-profile" class="text-blue-500">
          <i class="fab fa-linkedin"></i> 
        </a>
        <a href="mailto:your-email@example.com" class="text-blue-500">
          <i class="far fa-envelope"></i> 
        </a>
      </div>
    </div>
  </div>
  <p class="testimonial-text">"Junior web developer and third-year Arbaminch University software engineering student"</p>
</div>


        
<div class="testimonial w-1/3">
  <div class="flex items-center gap-5">
    <img class="rounded-full" src="images/photo1.webp" alt="Testimonial 2">
    <div>
      <p class="testimonial-author font-bold">BITANIA GEREMEW</p>
      <div class="flex gap-6 items-center">
        <a href="https://www.linkedin.com/in/your-linkedin-profile" class="text-blue-500">
          <i class="fab fa-linkedin"></i> 
        </a>
        <a href="mailto:your-email@example.com" class="text-blue-500">
          <i class="far fa-envelope"></i> 
        </a>
      </div>
    </div>
  </div>
  <p class="testimonial-text">"Junior web developer and third-year Arbaminch University software engineering student"</p>
</div>
        </div>
     
    
      <footer class="bg-gray-900 text-white">
        <p>&copy; 2023 Web Gallery. All rights reserved.</p>
      </footer>
    
</body>
</html>