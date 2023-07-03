<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Photo Gallery</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css">
  
  <!-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19"rel="stylesheet"> -->
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="d.css">
</head>
<body class="bg-white">
  <div class="fixed bg-white w-screen z-20">
  <div class="flex nav justify-between  z-20 m-5 items-center gap-48">

   
    <a href="./inde.php" class="">Photo Gallery</a>
    <div class="search-container">
      <input type="text"  id="search-bar" placeholder="Search..." class="border border-gray-200 rounded-md">
    </div>
    
    <nav >
      <ul class="flex gap-5 justify-center items-center">
        <li><a href="#" class="active">Home</a></li>
        <li><a href="./About.php">About</a></li>
        <li><a href="./login.php">Login/Signin</a></li>
        <li><a href="./contactUs.php">Contact Us</a></li>
        <li><a href="./Help.php">Help</a></li>
<<<<<<< HEAD
        <li> <a href="./Admin/index image-gallery.php"><img src="./images/profile.webp" width="35" alt=""></a> </li>
=======
        <li> <a href="profile.php"><img src="./images/profile.webp" width="35" alt=""></a> </li>
>>>>>>> e6fa53831f577945d9d50807dffec40d5ba0c391
      </ul>
    </nav>
  </div>
<div class="bg h-screen">

  <div class="waves h-screen">
  </div>
</div>
  <div class="gallery">
    <?php
   // require'retrieve_images.php';
    ?>
    <nav class="gallery-nav mb-5">
    <ul>
            <li><a href="#" class="active" data-category="all">All</a></li>
            <li><a href="#" data-category="nature">Nature</a></li>
            <li><a href="#" data-category="animals">Animals</a></li>
            <li><a href="#" data-category="city">City</a></li>
            <li><a href="#" data-category="food">Food</a></li>
            <li><a href="#" data-category="culture">Culture</a></li>
          </ul>
      </nav>
      <br>
    </div>
  </div>
  
  <div class="bg ">

    <div class="waves ">
    </div>
  </div>
  
  <div class="h-screen bg-white  z-23 relative top-48 flex justify-center ml-20">
    

      <h1 class="text-5xl border-r-2 h-1/2 border-5 border-black pt-5 font-bold w-1/3 p-10">Ethopian Photo Gallery <span class=" shadow-md  ">your number one source for all things art</span> </h1>
      
   <p></p>
   <div class="w-3/4 flex justify-center ">

   
   <div class="join  w-1/2 h-1/2   items-center flex-col p-5  text-black justify-between  flex shadow rounded-lg ">
    <p class=" text-center text-2xl ">your number one source for all things art</p>
    <div class="flex flex-col ">

      <button class="text-white rounded-lg py-3 px-16 mb-2"> <a href="login.php">Log in</a> </button> 
      <button  class="text-white rounded-lg py-3 px-16 "> <a href="register.php">SIGN UP</a> </button>
    </div>
   </div>
  </div>
</div>



<!-- <img src="images/flag.jpg" alt="Mountain Top " class="w-full "> -->

 


<div class="body    m-20 gap-10   ">
      <div class="relative h-96 index image-gallery item1 ">

        <!-- <img  src="./images/coffe.jpg"  alt=""> -->
        <div class="disc absolute left-10 bottom-5 w-64 ">
          <div class="bg-white rounded-sm  gap-4 p-2">
            <div class="flex gap-4">
              <img src="./images/" alt="" data-category="Nature" class="rounded-full w-8 border-black ">
              <div class="text-sm ">

                <p>photographer</p>
                <!-- <p>date</p> -->
              </div>
            </div>
            <ul class="flex gap-2 justify-center">
              <li><a href=""><img src="./images/facebook.png" alt="" class=" rounded-full w-5"></a></li>
              <li><a href=""><img src="./images/linked.png" alt="" class="rounded-full w-5"></a></li>
              <li><a href=""><img src="./images/insta.jpg" alt="" class="rounded-full w-5"></a></li>
              <li><a href=""><img src="./images/twitter.png" alt="" class="rounded-full w-5"></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="relative index image-gallery item2">

        <img src="./images/coffe.jpg" data-category="animal"  alt="">
        <div class="disc absolute left-10 bottom-5 w-64 ">
          <div class="bg-white rounded-sm  gap-4 p-2">
            <div class="flex gap-4">
              <img src="./images/profile.png" data-category="animal" alt="" class="rounded-full w-8 border-black ">
              <div class="text-sm ">

                <p>photographer</p>
                <!-- <p>date</p> -->
              </div>
            </div>
            <ul class="flex gap-2 justify-center">
              <li><a href=""><img src="./images/facebook.png" alt="" class=" rounded-full w-5"></a></li>
              <li><a href=""><img src="./images/linked.png" alt="" class="rounded-full w-5"></a></li>
              <li><a href=""><img src="./images/insta.jpg" alt="" class="rounded-full w-5"></a></li>
              <li><a href=""><img src="./images/twitter.png" alt="" class="rounded-full w-5"></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="relative index image-gallery ">
        <img src="./images/photo-1629295895548-b2f7a39eb6dd.avif" data-category="culture" alt="">
        <div class="disc absolute le ft-10 bottom-5 w-64 ">
          <div class="bg-white rounded-sm  gap-4 p-2">
            <div class="flex gap-4">
              <img src="./images/photographer2.png" alt="" data-category="animal" class="rounded-full w-8 border-black ">
              <div class="text-sm ">

                <p>photographer</p>
                <!-- <p>date</p> -->
              </div>
            </div>
            <ul class="flex gap-2 justify-center">
              <li><a href=""><img src="./images/facebook.png" alt="" class=" rounded-full w-5"></a></li>
              <li><a href=""><img src="./images/linked.png" alt="" class="rounded-full w-5"></a></li>
              <li><a href=""><img src="./images/insta.jpg" alt="" class="rounded-full w-5"></a></li>
              <li><a href=""><img src="./images/twitter.png" alt="" class="rounded-full w-5"></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="relative index image-gallery ">

        <img src="./images/photo.jpg" data-category="Nature" alt="">
        <div class="disc absolute left-10 bottom-5 w-64 ">
          <div class="bg-white rounded-sm  gap-4 p-2">
            <div class="flex gap-4">
              <img src="./images/profile.png" alt="" class="rounded-full w-8 border-black ">
              <div class="text-sm ">

                <p>photographer</p>
                <!-- <p>date</p> -->
              </div>
            </div>
            <ul class="flex gap-2 justify-center">
              <li><a href=""><img src="./images/facebook.png" alt="" class=" rounded-full w-5"></a></li>
              <li><a href=""><img src="./images/linked.png" alt="" class="rounded-full w-5"></a></li>
              <li><a href=""><img src="./images/insta.jpg" alt="" class="rounded-full w-5"></a></li>
              <li><a href=""><img src="./images/twitter.png" alt="" class="rounded-full w-5"></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="relative index image-gallery ">

        <img src="./images/coffe.jpg"   data-category="animal" alt="">
        <div class="disc absolute left-10 bottom-5 w-64 ">
          <div class="bg-white rounded-sm  gap-4 p-2">
            <div class="flex gap-4">
              <img src="./images/profile.png" alt="" class="rounded-full w-8 border-black ">
              <div class="text-sm ">

                <p>photographer</p>
                <!-- <p>date</p> -->
              </div>
            </div>
            <ul class="flex gap-2 justify-center">
              <li><a href=""><img src="./images/facebook.png" alt="" class=" rounded-full w-5"></a></li>
              <li><a href=""><img src="./images/linked.png" alt="" class="rounded-full w-5"></a></li>
              <li><a href=""><img src="./images/insta.jpg" alt="" class="rounded-full w-5"></a></li>
              <li><a href=""><img src="./images/twitter.png" alt="" class="rounded-full w-5"></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="relative index image-gallery ">
        <img src="./images/po.jpg" data-category="city" alt="">
        <div class="disc absolute le ft-10 bottom-5 w-64 ">
          <div class="bg-white rounded-sm  gap-4 p-2">
            <div class="flex gap-4">
              <img src="./images/profile.png" alt="" class="rounded-full w-8 border-black ">
              <div class="text-sm ">

                <p>photographer</p>
                <!-- <p>date</p> -->
              </div>
            </div>
            <ul class="flex gap-2 justify-center">
              <li><a href=""><img src="./images/facebook.png" alt="" class=" rounded-full w-5"></a></li>
              <li><a href=""><img src="./images/linked.png" alt="" class="rounded-full w-5"></a></li>
              <li><a href=""><img src="./images/insta.jpg" alt="" class="rounded-full w-5"></a></li>
              <li><a href=""><img src="./images/twitter.png" alt="" class="rounded-full w-5"></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="relative index image-gallery ">

        <img src="./images/flag.jpg" data-category="culture" alt="">
        <div class="disc absolute left-10 bottom-5 w-64 ">
          <div class="bg-white rounded-sm  gap-4 p-2">
            <div class="flex gap-4">
              <img src="./images/profile.png" alt="" class="rounded-full w-8 border-black ">
              <div class="text-sm ">

                <p>photographer</p>
                <!-- <p>date</p> -->
              </div>
            </div>
            <ul class="flex gap-2 justify-center">
              <li><a href=""><img src="./images/facebook.png" alt="" class=" rounded-full w-5"></a></li>
              <li><a href=""><img src="./images/linked.png" alt="" class="rounded-full w-5"></a></li>
              <li><a href=""><img src="./images/insta.jpg" alt="" class="rounded-full w-5"></a></li>
              <li><a href=""><img src="./images/twitter.png" alt="" class="rounded-full w-5"></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="relative index image-gallery ">

        <img src="./images/coffe4.jpg " data-category="culture" alt="">
        <div class="disc absolute left-10 bottom-5 w-64 ">
          <div class="bg-white rounded-sm  gap-4 p-2">
            <div class="flex gap-4">
              <img src="./images/profile.png" alt="" class="rounded-full w-8 border-black ">
              <div class="text-sm ">

                <p>photographer</p>
                <!-- <p>date</p> -->
              </div>
            </div>
            <ul class="flex gap-2 justify-center">
              <li><a href=""><img src="./images/facebook.png" alt="" class=" rounded-full w-5"></a></li>
              <li><a href=""><img src="./images/linked.png" alt="" class="rounded-full w-5"></a></li>
              <li><a href=""><img src="./images/insta.jpg" alt="" class="rounded-full w-5"></a></li>
              <li><a href=""><img src="./images/twitter.png" alt="" class="rounded-full w-5"></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="relative index image-gallery  image-gallery">

        <img src="./images/coffe3.jpg " data-category="nature" alt="">
        <div class="disc absolute left-10 bottom-5 w-64 ">
          <div class="bg-white rounded-sm  gap-4 p-2">
            <div class="flex gap-4">
              <img src="./images/profile.png" alt="" class="rounded-full w-8 border-black ">
              <div class="text-sm ">

                <p>photographer</p>
                <!-- <p>date</p> -->
              </div>
            </div>
            <ul class="flex gap-2 justify-center">
              <li><a href=""><img src="./images/facebook.png" alt="" class=" rounded-full w-5"></a></li>
              <li><a href=""><img src="./images/linked.png" alt="" class="rounded-full w-5"></a></li>
              <li><a href=""><img src="./images/insta.jpg" alt="" class="rounded-full w-5"></a></li>
              <li><a href=""><img src="./images/twitter.png" alt="" class="rounded-full w-5"></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="relative index image-gallery ">
        <img src="./images/coffe2.jpg" data-category=" nature"  alt="">
        <div class="disc absolute le ft-10 bottom-5 w-64 ">
          <div class="bg-white rounded-sm  gap-4 p-2">
            <div class="flex gap-4">
              <img src="./images/profile.png" alt="" class="rounded-full w-8 border-black ">
              <div class="text-sm ">

                <p>photographer</p>
                <!-- <p>date</p> -->
              </div>
            </div>
            <ul class="flex gap-2 justify-center">
              <li><a href=""><img src="./images/facebook.png" alt="" class=" rounded-full w-5"></a></li>
              <li><a href=""><img src="./images/linked.png" alt="" class="rounded-full w-5"></a></li>
              <li><a href=""><img src="./images/insta.jpg" alt="" class="rounded-full w-5"></a></li>
              <li><a href=""><img src="./images/twitter.png" alt="" class="rounded-full w-5"></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div>

     
        
      </div>
      <div>

        
      </div>
      <div>

        
      </div>
      <div>

       
      </div>
      <div>

        
      </div>
      <div>

      
      </div>
      <div>

     
      </div>
    </div>



   

    <!-- <?php
      // Scan the directory for image files
      $dir = "images/";
      $images = glob($dir . "*.jpg");
      
      // Display each image in the gallery
      foreach ($images as $image) {
        echo "<a href='$image'><img src='$image' alt=''></a>";
      }
    ?> -->

  <script src="app.js"></script>
  <script src="classify.js"></script>

  <script>
    // Function to handle the click on category links
    function handleCategoryClick(event) {
          event.preventDefault();
          const selectedCategory = event.target.dataset.category;
          classifyImages(selectedCategory);
        }
      
        // Add event listeners to category links
        const categoryLinks = document.querySelectorAll('.gallery-nav a');
        categoryLinks.forEach(link => {
          link.addEventListener('click', handleCategoryClick);
        });
      
        // Initial classification with 'all' category
        classifyImages('all');
  </script>
</body>
</html>


