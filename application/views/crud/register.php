<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background: url("<?php echo base_url('assets/img/bg/bg1.jpg'); ?>") no-repeat center center fixed;
            background-size: cover;
        }

        .register-container {
            background-color: rgba(255, 255, 255, 0.9);
            /* Slightly transparent */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        .register-container h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .register-container input[type="text"],
        .register-container input[type="email"],
        .register-container input[type="password"],
        .register-container input[type="tel"],
        .register-container textarea {
            width: 100%;
            padding: 12px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .register-container button {
            width: 100%;
            padding: 15px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
        }

        .register-container button:hover {
            background-color: #555;
        }

        .register-container .login-link {
            margin-top: 15px;
        }

        .register-container .login-link a {
            color: #333;
            text-decoration: none;
            font-weight: bold;
        }

        .register-container .login-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <div class="register-container">
        <h2>Register</h2>
        <form action="<?php echo site_url('home/register'); ?>" method="post">
            <input type="text" name="namaKonsumen" placeholder="Masukkan Nama Lengkap" required>
            <input type="text" name="username" placeholder="Masukkan Username" required>
            <input type="email" name="email" placeholder="Masukkan Email" required>
            <input type="password" name="password" placeholder="Masukkan Password" required>
            <input type="tel" name="tlpn" placeholder="Masukkan Nomor Telepon" required>
            <textarea name="alamat" placeholder="Masukkan Alamat" required></textarea>
            <button type="submit">Register</button>
        </form>
        <div class="login-link">
            <p>Already have an account? <a href="<?php echo site_url('dashboard/login'); ?>">Login</a></p>
        </div>
        <form action="<?php echo site_url('dashboard'); ?>" method="post">
            <button type="submit">katalog</button>
        </form>
    </div>

</body>

</html>
