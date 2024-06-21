<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f8f8;
        }

        .container {
            width: 100%;
            max-width: 800px;
            margin: auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="number"],
        input[type="date"],
        select,
        textarea {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 100%;
        }

        .payment-methods {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .payment-methods label {
            flex: 1;
            text-align: center;
        }

        input[type="radio"] {
            margin-right: 10px;
        }

        button {
            padding: 15px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #3c3c34;
        }

        .modal-header {
            background-color: #3c3c34;
            color: white;
        }

        .modal-body {
            text-align: center;
            padding: 40px 20px;
        }

        .modal-body i {
            font-size: 50px;
            margin-bottom: 20px;
            color: #3c3c34;
        }

        .modal-footer {
            justify-content: center;
        }

        .modal-footer .btn {
            background-color: #3c3c34;
            border: none;
        }

        .modal-footer .btn:hover {
            background-color: #3c3c34;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Transaksi</h2>
        <form id="transaksi-form" action="<?php echo site_url('transaksi/detail'); ?>" method="post">
            <label for="fullname">Nama Lengkap</label>
            <input type="text" id="fullname" name="nama_lengkap" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Nomor Telepon</label>
            <input type="tel" id="phone" name="nomor_telepon" required>

            <label for="pickup-date">Tanggal Sewa</label>
            <input type="date" id="pickup-date" name="tanggal_pengambilan" required>

            <label for="car-type">Mobil</label>
            <select id="car-type" name="mobil" required>
                <option value="">Pilih Mobil</option>
                <?php foreach ($mobil as $car) { ?>
                    <option value="<?php echo $car->namaMobil; ?>"
                    <?php echo (isset($_GET['car']) && $_GET['car'] == $car->namaMobil) ? 'selected' : ''; ?>>
                        <?php echo $car->namaMobil; ?>
                    </option>
                <?php } ?>
            </select>

            <label for="driver">Driver</label>
            <select id="driver" name="driver">
                <option value="">Pilih Driver (Opsional)</option>
                <?php foreach ($driver as $drv) { ?>
                    <option value="<?php echo $drv->namaDriver; ?>"><?php echo $drv->namaDriver; ?></option>
                <?php } ?>
            </select>

            <label for="tour-package">Paket Pariwisata</label>
            <select id="tour-package" name="paket_pariwisata">
                <option value="">Pilih Paket Pariwisata (Opsional)</option>
                <?php foreach ($pariwisata as $tour) { ?>
                    <option value="<?php echo $tour->namaPariwisata; ?>"><?php echo $tour->namaPariwisata; ?></option>
                <?php } ?>
            </select>

            <label for="rental-duration">Durasi Sewa</label>
            <select id="rental-duration" name="durasi_sewa" required>
                <option value="">Pilih Durasi Sewa</option>
                <option value="24">24 Jam</option>
                <option value="12">12 Jam</option>
                <option value="6">6 Jam</option>
            </select>

            <label for="address">Alamat Penjemputan</label>
            <textarea id="address" name="alamat_penjemputan" rows="4" required></textarea>

            <label for="city">Kota</label>
            <input type="text" id="city" name="kota" required>

            <label for="postalcode">Kode Pos</label>
            <input type="number" id="postalcode" name="kode_pos" required>

            <h3>Opsi Tambahan</h3>
            <label>
                <input type="checkbox" name="tambahan_asuransi" value="yes"> Tambahkan Asuransi
            </label>
            <label>
                <input type="checkbox" name="ambil_di_lokasi" value="yes"> Ambil di Lokasi
            </label>

            <h3>Metode Pembayaran</h3>
            <div class="payment-methods">
                <label>
                    <input type="radio" name="metode_pembayaran" value="banktransfer"> Bank Transfer
                </label>
            </div>

            <button type="button" onclick="showModal()">Pesan</button>
        </form>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="transactionModal" tabindex="-1" role="dialog" aria-labelledby="transactionModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="transactionModalLabel">Transaksi Sedang Diproses</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <i class="fas fa-spinner fa-spin"></i>
                    <p>Harap tunggu, transaksi Anda sedang diproses.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="submitForm()">OK</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script>
        function showModal() {
            $('#transactionModal').modal('show');
        }

        function submitForm() {
            $('#transaksi-form').submit();
        }
    </script>
</body>

</html>
