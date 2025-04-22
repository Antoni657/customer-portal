<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="build\css\slider.css">


</head>
<body>
<div class="card-header text-center text-white" style=" background-color: #facc15;" >
<h1 class="text-center py-4">Welcome to <?php echo $_settings->info('name') ?></h1>
</div>
<br>
<hr class="border-info">
<section class="category">

   <br>

   <div class="swiper category-slider">

   <div class="swiper-wrapper">

   <a href="" class="swiper-slide slide">
      <img src="uploads\mobo.jpg" alt="">
      <h3>Mother Board</h3>
   </a>

   <a href="" class="swiper-slide slide">
      <img src="uploads\cpu.jpg" alt="">
      <h3>CPU</h3>
   </a>

   <a href="" class="swiper-slide slide">
      <img src="uploads\wifi.jpg" alt="">
      <h3>WiFi</h3>
   </a>

   <a href="" class="swiper-slide slide">
      <img src="uploads\ram.jpg" alt="">
      <h3>RAM</h3>
   </a>

   <a href="" class="swiper-slide slide">
      <img src="uploads\keyboard.jpg" alt="">
      <h3>Keyboard</h3>
   </a>

   <a href="" class="swiper-slide slide">
      <img src="uploads\mouse.jpg" alt="">
      <h3>Mouse</h3>
   </a>

   <a href="" class="swiper-slide slide">
      <img src="uploads\ssd.jpg" alt="">
      <h3>SSD</h3>
   </a>

   <a href="" class="swiper-slide slide">
      <img src="uploads\cmos.jpg" alt="">
      <h3>CMOS</h3>
   </a>

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>
<hr class="border-info">

<div class="row justify-content-center ">
    <div class="col-12 col-sm-6 col-md-3">
    <a href="<?php echo home_url ?>?page=services" class="info-box bg-light shadow">
        
            <span class="info-box-icon  elevation-1" style="background-color: #3498db ; color: white;"><i class="fas fa-boxes"></i></span>

            <div class="info-box-content">
            <span class="info-box-text">Products</span>
            <span class="info-box-number text-right">
                <?php 
                    echo $conn->query("SELECT * FROM `services_list` where `status` = 1")->num_rows;
                ?>
            </span>
            </div>
            
</a>
        
        
    </div>
    
    <div class="col-12 col-sm-6 col-md-3">
    <a href="<?php echo home_url ?>?page=invoice_list" class="info-box bg-light shadow">
            <span class="info-box-icon  elevation-1" style="background-color: #008080; color: white;"><i class="fas fa-dollar-sign"></i></span>

            <div class="info-box-content">
            <span class="info-box-text">Billings</span>
            <span class="info-box-number text-right">
                <?php 
                    echo $conn->query("SELECT * FROM `invoice_list`")->num_rows;
                ?>
            </span>
            </div>
            <!-- /.info-box-content -->
</a>
        <!-- /.info-box -->
    </div>

</div>
<br><br><br>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".home-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
    },
});

 var swiper = new Swiper(".category-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
         slidesPerView: 2,
       },
      650: {
        slidesPerView: 3,
      },
      768: {
        slidesPerView: 4,
      },
      1024: {
        slidesPerView: 5,
      },
   },
});

var swiper = new Swiper(".products-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      550: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
   },
});

</script>
</body>

</html>
