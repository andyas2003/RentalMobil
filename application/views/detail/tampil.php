<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction Detail</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Global styling */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        /* Transaction details styling */
        .transaction-details {
            margin-bottom: 30px;
        }

        .transaction-details table {
            width: 100%;
            border-collapse: collapse;
            border-radius: 5px;
            overflow: hidden;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .transaction-details th,
        .transaction-details td {
            padding: 15px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        .transaction-details th {
            background-color: #f2f2f2;
        }

        /* Actions styling */
        .actions {
            text-align: left;
        }

        .actions button {
            padding: 10px 20px;
            margin-right: 10px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .actions button:hover {
            background-color: #555;
        }

        /* Modal styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
            padding-top: 60px;
        }

        .modal-content {
            background-color: #fefefe;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 500px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        .modal form div {
            margin-bottom: 15px;
        }

        .modal form label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .modal form input[type="text"],
        .modal form input[type="file"],
        .modal form button {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
        }

        .modal form button {
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .modal form button:hover {
            background-color: #555;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Detail Transaksi</h1>
        <div class="transaction-details">
            <table>
                <thead>
                    <tr>
                        <th>No Transaksi</th>
                        <th>Tanggal</th>
                        <th>Total</th>
                        <th>Status Pembelian</th>
                        <th>Status Pembayaran</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($transaksi as $val) { ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $val->tanggal; ?></td>
                            <td><?php echo $val->total; ?></td>
                            <td><?php echo $val->status_pembelian; ?></td>
                            <td><?php echo $val->status_pembayaran; ?></td>
                            <td>
                                <?php if ($val->bukti_pembayaran == '') { ?>
                                    <div class="actions">
                                        <button onclick="openModal('<?php echo $val->idTransaksi; ?>')">Bayar</button>
                                    </div>
                                <?php } else { ?>
                                    Sudah Bayar
                                <?php } ?>
                            </td>
                        </tr>
                        <?php $no++; ?>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal -->
    <div id="modal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="document.getElementById('modal').style.display='none'">&times;</span>
            <h2>Form Pembayaran</h2>
            <form action="<?php echo site_url('detail_transaksi/prosesbayar'); ?>" method="post" enctype="multipart/form-data">
                <input type="hidden" id="idTransaksi" name="idTransaksi" value="">
                <div>
                    <label for="bankTujuan">Bank: BCA</label>
                </div>
                <div>
                    <label for="namaTujuan">Nama: Gibran</label>
                </div>
                <div>
                    <label for="rekTujuan">Rekening: 12345678</label>
                </div>
                <div>
                    <input type="text" id="namaPengirim" name="namaPengirim" placeholder="Masukkan Nama Sesuai Rekening Anda" required>
                </div>
                <div>
                    <label for="bukti_pembayaran">Bukti Pembayaran:</label>
                    <input type="file" id="bukti_pembayaran" name="buktiPembayaran" accept="image/*" required>
                </div>
                <div>
                    <button type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function openModal(id) {
            document.getElementById('idTransaksi').value = id;
            document.getElementById('modal').style.display = 'block';
        }

        // Get the modal
        var modal = document.getElementById('modal');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</body>

</html>
