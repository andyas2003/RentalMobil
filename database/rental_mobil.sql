-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Jun 2024 pada 19.51
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental_mobil`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `idAdmin` int(11) NOT NULL,
  `userName` varchar(50) DEFAULT NULL,
  `password` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`idAdmin`, `userName`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_driver`
--

CREATE TABLE `tbl_driver` (
  `idDriver` int(11) NOT NULL,
  `namaDriver` varchar(50) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_driver`
--

INSERT INTO `tbl_driver` (`idDriver`, `namaDriver`, `foto`) VALUES
(3, 'Gibrand koten', 'WhatsApp_Image_2024-06-07_at_19_06_32.jpeg'),
(4, 'Epin kean', 'WhatsApp_Image_2024-06-07_at_19_06_31_(1).jpeg'),
(5, 'Ando tukan', 'WhatsApp_Image_2024-06-07_at_19_06_30.jpeg'),
(7, 'Frenky doren', 'WhatsApp_Image_2024-06-07_at_19_06_31.jpeg'),
(8, 'Angela hurint', 'WhatsApp_Image_2024-06-07_at_19_06_31_(2)1.jpeg'),
(9, 'Imelda lewar', 'WhatsApp_Image_2024-06-07_at_19_06_29_(1).jpeg'),
(10, 'Desy', 'WhatsApp_Image_2024-06-07_at_19_06_29.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_mobil`
--

CREATE TABLE `tbl_mobil` (
  `idMobil` int(11) NOT NULL,
  `namaMobil` varchar(50) DEFAULT NULL,
  `harga24jam` int(20) DEFAULT NULL,
  `harga12jam` int(20) DEFAULT NULL,
  `harga6jam` int(20) DEFAULT NULL,
  `foto` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_mobil`
--

INSERT INTO `tbl_mobil` (`idMobil`, `namaMobil`, `harga24jam`, `harga12jam`, `harga6jam`, `foto`) VALUES
(3, 'Efte - Metik Bratatak', 325000, 225000, 175000, 'mobil2.jpg'),
(4, 'Wuling', 275000, 200000, 150000, 'mobil3.jpg'),
(5, 'Avanza ded - Manual Racing', 275000, 200000, 150000, 'mobil4.jpg'),
(6, 'Ciboy - Manual Bratatak', 325000, 275000, 175000, 'mobil5.jpg'),
(7, 'Betrik - Manual Standar', 300000, 225000, 175000, 'mobil6.jpg'),
(8, 'Danke - Manual Standar', 300000, 225000, 175000, 'mobil7.jpg'),
(9, 'Jazz Caper - Metik Bratatak', 300000, 225000, 175000, 'mobil8.jpg'),
(10, 'Amer - Manual Standar - Jedug', 275000, 200000, 150000, 'mobil9.jpg'),
(11, 'Balmon - Metik Standar - Jedug', 325000, 225000, 175000, 'mobil10.jpg'),
(12, 'Brio Redbull - Manual Standar', 300000, 225000, 175000, 'mobil11.jpg'),
(13, 'Brio NZG - Metik Standar', 300000, 225000, 175000, 'mobil12.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pariwisata`
--

CREATE TABLE `tbl_pariwisata` (
  `idPariwisata` int(11) NOT NULL,
  `namaPariwisata` varchar(50) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_pariwisata`
--

INSERT INTO `tbl_pariwisata` (`idPariwisata`, `namaPariwisata`, `foto`, `deskripsi`) VALUES
(2, 'Tugu Jogja ', 'paket12.jpg', 'Jika berencana liburan ke Yogyakarta, simak rekomendasi tempat wisata dekat Stasiun Tugu.'),
(3, 'Candi Prambanan', 'paket2.jpg', 'Pengunjung juga dapat melihat dan mengikuti kisah cerita Ramayana yang reliefnya dipahatkan searah jarum jam pada dinding pagar langkan Candi Siwa dan bersambung di Candi Brahma.'),
(4, 'Pantai Parangtritis', 'paket3.jpg', 'Pantai ini merupakan pantai yang cukup luas di Yogyakarta, berbeda dengan pantai-pantai di kawasan Yogyakarta lainya seperti Pantai di Gunungkidul yang ukurannya relatif kecil.'),
(6, 'aifjf', NULL, 'sdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pembayaran`
--

CREATE TABLE `tbl_pembayaran` (
  `id` int(11) NOT NULL,
  `idTransaksi` int(11) DEFAULT NULL,
  `bankTujuan` varchar(100) DEFAULT 'BCA',
  `namaTujuan` varchar(100) DEFAULT 'Gibran',
  `rekTujuan` int(20) DEFAULT 123456789,
  `namaPengirim` varchar(100) DEFAULT NULL,
  `bankPengirim` varchar(100) DEFAULT NULL,
  `buktiPembayaran` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_support`
--

CREATE TABLE `tbl_support` (
  `id_support` int(11) NOT NULL,
  `isi_support` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `idTransaksi` int(5) NOT NULL,
  `idKonsumen` int(5) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `status_pembelian` enum('baru','ditolak','diterima','selesai') DEFAULT NULL,
  `status_pembayaran` enum('menunggu','lunas','gagal') DEFAULT NULL,
  `bukti_pembayaran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_transaksi`
--

INSERT INTO `tbl_transaksi` (`idTransaksi`, `idKonsumen`, `tanggal`, `total`, `status_pembelian`, `status_pembayaran`, `bukti_pembayaran`) VALUES
(4, 11, '2024-06-08', 7800000, 'baru', 'menunggu', ''),
(5, 11, '2024-06-08', 12, 'baru', 'menunggu', ''),
(6, 11, '2024-06-08', 325000, 'baru', 'menunggu', ''),
(7, 11, '2024-06-08', 175000, 'baru', 'menunggu', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_transaksidetail`
--

CREATE TABLE `tbl_transaksidetail` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nomor_telepon` varchar(15) NOT NULL,
  `tanggal_pengambilan` date NOT NULL,
  `mobil` varchar(100) NOT NULL,
  `driver` varchar(100) NOT NULL,
  `paket_pariwisata` varchar(100) NOT NULL,
  `durasi_sewa` int(11) NOT NULL,
  `alamat_penjemputan` text NOT NULL,
  `kota` varchar(100) NOT NULL,
  `kode_pos` varchar(10) NOT NULL,
  `tambahan_asuransi` tinyint(1) NOT NULL,
  `ambil_di_lokasi` tinyint(1) NOT NULL,
  `metode_pembayaran` varchar(50) NOT NULL,
  `bukti_pembayaran` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_transaksidetail`
--

INSERT INTO `tbl_transaksidetail` (`id`, `nama_lengkap`, `email`, `nomor_telepon`, `tanggal_pengambilan`, `mobil`, `driver`, `paket_pariwisata`, `durasi_sewa`, `alamat_penjemputan`, `kota`, `kode_pos`, `tambahan_asuransi`, `ambil_di_lokasi`, `metode_pembayaran`, `bukti_pembayaran`) VALUES
(4, 'andika saputra', 'andyas2003@gmail.com', '085333633621', '2024-06-06', 'Efte - Metik Bratatak', 'Rizky Nazar', 'Tugu Jogja ', 24, 'sleman', 'yogyakarta', '314435', 1, 1, 'banktransfer', NULL),
(5, 'ss', 'kss@gmail.com', 'sss', '2024-06-27', 'Efte - Metik Bratatak', '', '', 24, 'aaaaaaa', 'aaaaa', '33333', 0, 0, 'banktransfer', NULL),
(6, 'andika saputra', 'andyas2003@gmail.com', '085333633621', '2024-06-08', 'Efte - Metik Bratatak', '', '', 24, 'sleman', 'yogyakarta', '3546', 0, 0, 'banktransfer', NULL),
(7, 'andika saputra', 'andyas2003@gmail.com', '085333633621', '2024-06-08', 'Efte - Metik Bratatak', '', '', 24, 'sleman', 'yogyakarta', '32252', 0, 0, 'banktransfer', NULL),
(8, 'andika saputra', 'andyas2003@gmail.com', '085333633621', '2024-06-08', 'Efte - Metik Bratatak', '', '', 12, 'sleman', 'yogyakarta', '3536', 0, 0, 'banktransfer', NULL),
(9, 'andika saputra', 'andyas2003@gmail.com', '085333633621', '2024-06-08', 'Efte - Metik Bratatak', '', '', 24, 'dafnkn', 'jdsvjb', '355', 0, 0, 'banktransfer', NULL),
(10, 'andika saputra', 'andyas2003@gmail.com', '085333633621', '2024-06-08', 'Efte - Metik Bratatak', '', '', 6, 'sleman', 'yogyakarta', '35453', 0, 0, 'banktransfer', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `idKonsumen` int(5) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `namaKonsumen` varchar(50) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `tlpn` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`idKonsumen`, `username`, `password`, `namaKonsumen`, `alamat`, `email`, `tlpn`) VALUES
(11, 'andyas', 'andyas', 'Andika Saputra', 'sleman', 'putra@gmail.com', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Indeks untuk tabel `tbl_driver`
--
ALTER TABLE `tbl_driver`
  ADD PRIMARY KEY (`idDriver`);

--
-- Indeks untuk tabel `tbl_mobil`
--
ALTER TABLE `tbl_mobil`
  ADD PRIMARY KEY (`idMobil`);

--
-- Indeks untuk tabel `tbl_pariwisata`
--
ALTER TABLE `tbl_pariwisata`
  ADD PRIMARY KEY (`idPariwisata`);

--
-- Indeks untuk tabel `tbl_pembayaran`
--
ALTER TABLE `tbl_pembayaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idTransaksi` (`idTransaksi`);

--
-- Indeks untuk tabel `tbl_support`
--
ALTER TABLE `tbl_support`
  ADD PRIMARY KEY (`id_support`);

--
-- Indeks untuk tabel `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD PRIMARY KEY (`idTransaksi`),
  ADD KEY `idUser` (`idKonsumen`),
  ADD KEY `idKonsumen` (`idKonsumen`);

--
-- Indeks untuk tabel `tbl_transaksidetail`
--
ALTER TABLE `tbl_transaksidetail`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`idKonsumen`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_driver`
--
ALTER TABLE `tbl_driver`
  MODIFY `idDriver` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tbl_mobil`
--
ALTER TABLE `tbl_mobil`
  MODIFY `idMobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `tbl_pariwisata`
--
ALTER TABLE `tbl_pariwisata`
  MODIFY `idPariwisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_pembayaran`
--
ALTER TABLE `tbl_pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `idTransaksi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tbl_transaksidetail`
--
ALTER TABLE `tbl_transaksidetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `idKonsumen` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_pembayaran`
--
ALTER TABLE `tbl_pembayaran`
  ADD CONSTRAINT `tbl_pembayaran_ibfk_1` FOREIGN KEY (`idTransaksi`) REFERENCES `tbl_transaksi` (`idTransaksi`);

--
-- Ketidakleluasaan untuk tabel `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD CONSTRAINT `tbl_transaksi_ibfk_1` FOREIGN KEY (`idKonsumen`) REFERENCES `tbl_user` (`idKonsumen`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
