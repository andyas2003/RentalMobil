<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <title>Rental Mobil</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/responsive.css'); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/jquery.mCustomScrollbar.min.css'); ?>">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body>
    <div class="banner_section layout_padding">
        <div class="container">
            <div id="banner_slider" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <div class="banner_img">
                                    <img src="<?php echo base_url('assets/images/logo.jpg'); ?>" alt="Logo">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php if ($this->session->flashdata('success')): ?>
                <div class="alert alert-success">
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
            <?php endif; ?>
            <div class="banner_taital_main">
                <h1 class="banner_taital">Rental Mobil</h1>
                <p class="banner_text">FLOBAMORA RENT CAR & TOUR JOGJA</p>
                <div class="btn_main">
                    <div class="callnow_bt active">
                        <a href="https://api.whatsapp.com/send?phone=6282247137613&text=Halo,%20saya%20tertarik%20untuk%20rental%20mobil"
                            target="_blank">Call Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $("alert-success").fadeTo(3000, 500).slideUp(500, function () {
                $("alert-success").slideUp(500);
            });
        });
    </script>
</body>

</html>