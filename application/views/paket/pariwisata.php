<!DOCTYPE html>
<html>
   <head>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Rental Mobil</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css');?>">
      <link rel="stylesheet" href="<?php echo base_url('assets/css/responsive.css');?>">
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="<?php echo base_url('assets/css/jquery.mCustomScrollbar.min.css');?>">
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   </head>
   <body>
      <div class="client_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="about_taital">Paket Pariwisata</h1>
               </div>
            </div>
            <div class="client_section_2">
               <?php foreach ($pariwisata as $pkt) { ?>
                  <div class="client_taital_main">
                     <div class="client_left">
                        <div class="client_img"><img src="<?php echo base_url('./assets/img/pariwisata/' . $pkt->foto); ?>"></div>
                     </div>
                     <div class="client_right">
                        <h3 class="moark_text"><?php echo $pkt->namaPariwisata; ?></h3>
                        <p class="client_text"><?php echo $pkt->deskripsi; ?></p>
                     </div>
                  </div>
               <?php } ?>
            </div>
         </div>
      </div>
      <script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
      <script src="<?php echo base_url('assets/js/popper.min.js');?>"></script>
      <script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js');?>"></script>
      <script src="<?php echo base_url('assets/js/jquery-3.0.0.min.js');?>"></script>
      <script src="<?php echo base_url('assets/js/plugin.js');?>"></script>
      <script src="<?php echo base_url('assets/js/jquery.mCustomScrollbar.concat.min.js');?>"></script>
      <script src="<?php echo base_url('assets/js/custom.js');?>"></script>
   </body>
</html>
