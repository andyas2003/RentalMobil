<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #333;
            padding: 10px 20px;
        }

        .navbar a {
            color: white;
            padding: 14px 20px;
            text-decoration: none;
            text-align: center;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        .navbar .logo {
            font-size: 1.5em;
            color: white;
            font-weight: bold;
        }

        .navbar .nav-links {
            display: flex;
        }

        .navbar .nav-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 60px;
            height: 60px;
        }

        .navbar .nav-links a i {
            font-size: 2em;
        }
    </style>
</head>

<body>
    <?php if (empty($this->session->userdata('username'))) { ?>
        <div class="navbar">
            <div class="logo"></div>
            <div class="nav-links">
                <a href="<?php echo site_url('home/index'); ?>" title="Home">Login</a>
                <a href="<?php echo site_url('dashboard/register'); ?>" title="Home">Register</a>
            </div>
        </div>
    <?php } else { ?>
        <div class="navbar">
            <div class="logo">Hello, <?php echo $this->session->userdata('namaKonsumen'); ?></div>
            <div class="nav-links">
                <a href="<?php echo site_url('home/dashboard'); ?>" title="Home"><i class="fas fa-home"></i></a>
                <a href="<?php echo site_url('transaksi/index'); ?>" title="Transactions"><i
                        class="fas fa-exchange-alt"></i></a>
                <a href="<?php echo site_url('detail_transaksi/index'); ?>" title="Transaction Details"><i
                        class="fas fa-info-circle"></i></a>
                <a href="<?php echo site_url('home/logout'); ?>" title="Logout"><i class="fas fa-sign-out-alt"></i></a>
            </div>
        </div>
    <?php } ?>

    <!-- Login Modal -->
    <?php if (empty($this->session->userdata('username'))) { ?>
        <div id="loginModal" class="modal">
            <div class="modal-content">
                <span class="close" id="closeLogin">&times;</span>
                <h2>Login</h2>
                <form action="<?php echo site_url('home/login'); ?>" method="post">
                    <input type="text" name="username" placeholder="Username" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <button type="submit">Login</button>
                </form>
                <div class="register-link">
                    <p>Don't have an account? <a href="<?php echo site_url('home/register'); ?>">Register</a></p>
                </div>
            </div>
        </div>
    <?php } ?>
</body>

</html>