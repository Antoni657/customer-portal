<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Home - <?php echo $_settings->info('name') ?></title>
  <!-- Add your CSS styles -->
  <style>
    /* Add your CSS styles for the slider */
    .slider {
      max-width: 600px;
      margin: 0 auto;
      overflow: hidden;
      position: relative;
    }
    .slides {
      display: flex;
      transition: transform 0.5s ease-in-out;
    }
    .slide {
      width: 100%;
    }
    img {
      width: 100%;
      height: auto;
      display: block;
    }
  </style>
</head>
<body>

<div class="card-header text-center text-white" style="background-color: #facc15;">
  <h1 class="text-center py-4">Welcome to <?php echo $_settings->info('name') ?></h1>
</div>

<hr class="border-info">

<!-- Image Slider Section -->
<div class="slider">
  <div class="slides">
    <?php
      // Directory where your images are stored
      $imageDir = 'uploads';

      // Fetch all image files from the directory
      $images = glob($imageDir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);

      // Display each image in a slide
      foreach ($images as $image) {
        echo '<div class="slide"><img src="' . $image . '" alt=""></div>';
      }
    ?>
  </div>
</div>
<!-- End of Image Slider Section -->

<div class="row justify-content-center">
  <div class="col-12 col-sm-6 col-md-3">
    <!-- Your existing content for Products -->
    <!-- ... -->
  </div>
  <div class="col-12 col-sm-6 col-md-3">
    <!-- Your existing content for Billings -->
    <!-- ... -->
  </div>
</div>

<!-- JavaScript for the Slider -->
<script>
  // JavaScript for the automatic image slider
  const slides = document.querySelectorAll('.slide');
  let index = 0;

  function showSlide() {
    slides.forEach((slide) => {
      slide.style.transform = `translateX(-${index * 100}%)`;
    });
  }

  function nextSlide() {
    index = (index + 1) % slides.length;
    showSlide();
  }

  // Automatically move to the next slide every 3 seconds (adjust as needed)
  setInterval(nextSlide, 3000);
</script>

</body>
</html>
