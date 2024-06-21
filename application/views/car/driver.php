<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Rental Mobil</title>
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css');?>">
      <link rel="stylesheet" href="<?php echo base_url('assets/css/responsive.css');?>">
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="<?php echo base_url('assets/css/jquery.mCustomScrollbar.min.css');?>">
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   </head>
   <body>
      <div class="coffee_section layout_padding">
         <div class="container">
            <div class="row">
               <h1 class="coffee_taital">Driver</h1>
            </div>
         </div>
         <div class="coffee_section_2">
            <div id="main_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <?php
                  $chunks = array_chunk($driver, 4); 
                  $active = "active";
                  foreach ($chunks as $chunk) { ?>
                     <div class="carousel-item <?php echo $active; ?>">
                        <div class="container-fluid">
                           <div class="row">
                              <?php foreach ($chunk as $drv) { ?>
                                 <div class="col-lg-3 col-md-6">
                                    <div class="car_img"><img src="<?php echo base_url('./assets/img/driver/' . $drv->foto); ?>"></div>
                                    <h3 class="types_text"><?php echo $drv->namaDriver; ?></h3>
                                 </div>
                              <?php } ?>
                           </div>
                        </div>
                     </div>
                     <?php $active = "";  ?>
                  <?php } ?>
               </div>
               <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                  <i class="fa fa-arrow-left"></i>
               </a>
               <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                  <i class="fa fa-arrow-right"></i>
               </a>
            </div>
         </div>
      </div>
      <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
      <script src="<?php echo base_url('assets/js/popper.min.js'); ?>"></script>
      <script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
      <script src="<?php echo base_url('assets/js/jquery-3.0.0.min.js'); ?>"></script>
      <script src="<?php echo base_url('assets/js/plugin.js'); ?>"></script>
      <script src="<?php echo base_url('assets/js/jquery.mCustomScrollbar.concat.min.js'); ?>"></script>
      <script src="<?php echo base_url('assets/js/custom.js'); ?>"></script>
   </body>
</html>
