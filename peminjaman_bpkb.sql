-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2022 at 03:16 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `peminjaman_bpkb`
--

-- --------------------------------------------------------

--
-- Table structure for table `bpkb_bahan_bakar`
--

CREATE TABLE `bpkb_bahan_bakar` (
  `id_bahan_bakar` int(11) NOT NULL,
  `bahan_bakar` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bpkb_bahan_bakar`
--

INSERT INTO `bpkb_bahan_bakar` (`id_bahan_bakar`, `bahan_bakar`, `created_at`, `updated_at`) VALUES
(1, 'Bensin', '2022-07-08 06:35:47', '2022-07-08 06:35:47'),
(2, 'Solar', '2022-07-08 06:35:47', '2022-07-08 06:35:47');

-- --------------------------------------------------------

--
-- Table structure for table `bpkb_gambar`
--

CREATE TABLE `bpkb_gambar` (
  `id_gambar` int(11) NOT NULL,
  `nomor_bpkb` varchar(255) NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bpkb_gambar`
--

INSERT INTO `bpkb_gambar` (`id_gambar`, `nomor_bpkb`, `link`, `created_at`, `updated_at`) VALUES
(12, '123123', '1657617074_0a15490afb3c2c171911.jpg', '2022-07-12', '2022-07-12'),
(23, '213123', '1658391817_fcf9b666fdf986cbbbae.jpg', '2022-07-21', '2022-07-21'),
(26, '12312321', '1658392295_ad73ff9a4af4e164dbc7.jpg', '2022-07-21', '2022-07-21');

-- --------------------------------------------------------

--
-- Table structure for table `bpkb_model_kendaraan`
--

CREATE TABLE `bpkb_model_kendaraan` (
  `id_model` int(11) NOT NULL,
  `model` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bpkb_model_kendaraan`
--

INSERT INTO `bpkb_model_kendaraan` (`id_model`, `model`, `created_at`, `updated_at`) VALUES
(1, 'Sepeda Motor', '2022-07-08 06:36:12', '2022-07-08 06:36:12'),
(2, 'Mobil', '2022-07-08 06:36:12', '2022-07-08 06:36:12'),
(3, 'Truck', '2022-07-08 06:36:21', '2022-07-08 06:36:21'),
(4, 'Semi Truck', '2022-07-08 06:36:30', '2022-07-08 06:36:30');

-- --------------------------------------------------------

--
-- Table structure for table `bpkb_warna_tnkb`
--

CREATE TABLE `bpkb_warna_tnkb` (
  `id_warna_tnkb` int(11) NOT NULL,
  `warna_tnkb` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bpkb_warna_tnkb`
--

INSERT INTO `bpkb_warna_tnkb` (`id_warna_tnkb`, `warna_tnkb`, `created_at`, `updated_at`) VALUES
(1, 'Hitam', '2022-07-08 06:36:52', '2022-07-08 06:36:52'),
(2, 'Merah', '2022-07-08 06:36:52', '2022-07-08 06:36:52'),
(3, 'Kuning', '2022-07-08 06:40:06', '2022-07-08 06:40:06'),
(4, 'Putih', '2022-07-08 06:40:44', '2022-07-08 06:40:44');

-- --------------------------------------------------------

--
-- Table structure for table `data_bpkb`
--

CREATE TABLE `data_bpkb` (
  `id_bpkb` int(11) NOT NULL,
  `nomor_registrasi` varchar(12) NOT NULL,
  `nama_pemilik` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `merk` varchar(12) NOT NULL,
  `tipe` varchar(12) NOT NULL,
  `model` int(11) NOT NULL,
  `tahun_pembuatan` int(4) NOT NULL,
  `isi_silinder` int(5) NOT NULL,
  `nomor_rangka` varchar(20) NOT NULL,
  `nomor_mesin` varchar(20) NOT NULL,
  `warna` varchar(12) NOT NULL,
  `bahan_bakar` int(11) NOT NULL,
  `warna_tnkb` int(11) NOT NULL,
  `tahun_registrasi` int(4) NOT NULL,
  `nomor_bpkb` varchar(12) NOT NULL,
  `kode_lokasi` int(4) NOT NULL,
  `status` enum('Dipinjam','Tidak Dipinjam') NOT NULL DEFAULT 'Tidak Dipinjam',
  `created_at` date DEFAULT current_timestamp(),
  `updated_at` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_bpkb`
--

INSERT INTO `data_bpkb` (`id_bpkb`, `nomor_registrasi`, `nama_pemilik`, `alamat`, `merk`, `tipe`, `model`, `tahun_pembuatan`, `isi_silinder`, `nomor_rangka`, `nomor_mesin`, `warna`, `bahan_bakar`, `warna_tnkb`, `tahun_registrasi`, `nomor_bpkb`, `kode_lokasi`, `status`, `created_at`, `updated_at`) VALUES
(26, 'AB 1234 YY', 'Pemkot Yogya', 'Yogyakarta', 'Mercedez', '1', 4, 2020, 21231, 'A12312', 'M123123', 'Hitam', 1, 2, 2022, 'MCZ1232131', 55711, 'Tidak Dipinjam', '2022-07-12', '2022-07-19'),
(28, 'AB 1234 AW', 'Pemkot Yogya', 'Yogyakarta', 'Suzuki', '3123123', 2, 123123, 123123, '123123', '31231', 'Hitam', 1, 2, 123123, '213123', 1231, 'Tidak Dipinjam', '2022-07-14', '2022-07-19'),
(29, 'AB 1231 YY', 'Pemkot Yogya', 'Yogyakarta', 'BMW', 'M5', 2, 2018, 2222, 'BM132137X', 'BM132137X2', 'Putih', 1, 2, 2020, 'BM132137X', 1231, 'Tidak Dipinjam', '2022-07-20', '2022-07-20'),
(30, 'AB 2931 BC', 'Pemkot Yogya', 'Yogyakarta', 'Tesla', '1', 2, 2020, 123123, '123123', '123123', 'Biru', 1, 2, 213123, '12312321', 1231, 'Tidak Dipinjam', '2022-07-21', '2022-07-21'),
(31, 'AB 2921 CC', '12321312', '321313', '3123123', '31231', 2, 13213, 3123123, '3213123', '3213123', '313123', 1, 3, 3123123, '312313', 3213123, 'Tidak Dipinjam', '2022-07-21', '2022-07-26');

-- --------------------------------------------------------

--
-- Table structure for table `data_peminjam`
--

CREATE TABLE `data_peminjam` (
  `id_peminjam` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `id_bpkb` int(11) NOT NULL,
  `nama_petugas_pinjam` varchar(255) NOT NULL,
  `nip_petugas_pinjam` varchar(255) NOT NULL,
  `nama_petugas_kembali` varchar(255) DEFAULT NULL,
  `nip_petugas_kembali` varchar(255) DEFAULT NULL,
  `ket_lokasi` varchar(255) NOT NULL,
  `lokasi_kendaraan` varchar(255) NOT NULL,
  `status_kendaraan` varchar(255) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `estimasi_kembali` date DEFAULT NULL,
  `status` varchar(255) DEFAULT 'Pinjam',
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_peminjam`
--

INSERT INTO `data_peminjam` (`id_peminjam`, `nama_lengkap`, `nik`, `id_bpkb`, `nama_petugas_pinjam`, `nip_petugas_pinjam`, `nama_petugas_kembali`, `nip_petugas_kembali`, `ket_lokasi`, `lokasi_kendaraan`, `status_kendaraan`, `tgl_pinjam`, `tgl_kembali`, `estimasi_kembali`, `status`, `created_at`, `updated_at`) VALUES
(20, 'Si Amin', '2321032101111', 26, 'Ferguso', '2900222', '123123', '123123123', '', '', '', '2022-07-21', '2022-08-01', NULL, 'Dikembalikan', '2022-07-21', '2022-07-21'),
(21, 'Si Amin', '2321032101111', 28, 'Ferguso', '3123123', 'Sir Alex 2', '2312313', '', '', '', '2022-07-21', '2022-07-21', NULL, 'Dikembalikan', '2022-07-21', '2022-07-21'),
(25, 'Test Estimasi 2', '2131231', 31, '131231231', '12312', 'Sir Alex', '2121231312', '12312', 'Internal Pemkot', 'Pakai', '2022-07-28', '0000-00-00', '2022-08-11', 'Dikembalikan', '2022-07-28', '2022-07-28'),
(32, 'Khrisna Yudha Pratama', '1', 0, 'Sir Alex', '1231231', '-', '-', '1', 'Internal Pemkot', 'Pakai', '2022-07-27', '0000-00-00', '2022-08-10', 'Pinjam', '2022-07-28', '2022-07-28'),
(33, 'Khrisna Yudha Pratama', '1', 0, 'Sir Alex', '1231231', '-', '-', '1', 'Internal Pemkot', 'Pakai', '2022-07-27', '0000-00-00', '2022-08-10', 'Pinjam', '2022-07-28', '2022-07-28'),
(34, 'Khrisna Yudha Pratama', '1', 0, 'Sir Alex', '1231231', '-', '-', '1', 'Internal Pemkot', 'Pakai', '2022-07-27', '0000-00-00', '2022-08-10', 'Pinjam', '2022-07-28', '2022-07-28'),
(35, 'RES', '3402084309810001', 0, 'Sir Alex', '1231231', '-', '-', '1', 'Eksternal Pemkot', 'Pakai', '2022-07-28', '0000-00-00', '2022-08-11', 'Pinjam', '2022-07-28', '2022-07-28'),
(37, 'TES GAMBAR', '12312', 31, '123132', '312312', 'Sir Alex', '2121231312', '123123', 'Internal Pemkot', 'Pakai', '2022-07-29', '2022-07-27', '2022-08-12', 'Dikembalikan', '2022-07-28', '2022-07-28'),
(38, 'Khrisna Yudha Pratama', '2131231', 26, '13123', '1231231', 'Sir Alex', '2121231312', '12312', 'Internal Pemkot', 'Pinjam Pakai', '2022-07-29', '2022-07-21', '2022-08-12', 'Dikembalikan', '2022-07-28', '2022-07-28');

-- --------------------------------------------------------

--
-- Table structure for table `peminjam_gambar`
--

CREATE TABLE `peminjam_gambar` (
  `id_gambar` int(11) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bpkb_bahan_bakar`
--
ALTER TABLE `bpkb_bahan_bakar`
  ADD PRIMARY KEY (`id_bahan_bakar`);

--
-- Indexes for table `bpkb_gambar`
--
ALTER TABLE `bpkb_gambar`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indexes for table `bpkb_model_kendaraan`
--
ALTER TABLE `bpkb_model_kendaraan`
  ADD PRIMARY KEY (`id_model`);

--
-- Indexes for table `bpkb_warna_tnkb`
--
ALTER TABLE `bpkb_warna_tnkb`
  ADD PRIMARY KEY (`id_warna_tnkb`);

--
-- Indexes for table `data_bpkb`
--
ALTER TABLE `data_bpkb`
  ADD PRIMARY KEY (`id_bpkb`),
  ADD KEY `model` (`model`),
  ADD KEY `bahan_bakar` (`bahan_bakar`),
  ADD KEY `warna_tnkb` (`warna_tnkb`);

--
-- Indexes for table `data_peminjam`
--
ALTER TABLE `data_peminjam`
  ADD PRIMARY KEY (`id_peminjam`),
  ADD KEY `id_bpkb` (`id_bpkb`);

--
-- Indexes for table `peminjam_gambar`
--
ALTER TABLE `peminjam_gambar`
  ADD PRIMARY KEY (`id_gambar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bpkb_bahan_bakar`
--
ALTER TABLE `bpkb_bahan_bakar`
  MODIFY `id_bahan_bakar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bpkb_gambar`
--
ALTER TABLE `bpkb_gambar`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `bpkb_model_kendaraan`
--
ALTER TABLE `bpkb_model_kendaraan`
  MODIFY `id_model` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bpkb_warna_tnkb`
--
ALTER TABLE `bpkb_warna_tnkb`
  MODIFY `id_warna_tnkb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `data_bpkb`
--
ALTER TABLE `data_bpkb`
  MODIFY `id_bpkb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `data_peminjam`
--
ALTER TABLE `data_peminjam`
  MODIFY `id_peminjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `peminjam_gambar`
--
ALTER TABLE `peminjam_gambar`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_bpkb`
--
ALTER TABLE `data_bpkb`
  ADD CONSTRAINT `data_bpkb_ibfk_1` FOREIGN KEY (`warna_tnkb`) REFERENCES `bpkb_warna_tnkb` (`id_warna_tnkb`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `data_bpkb_ibfk_2` FOREIGN KEY (`model`) REFERENCES `bpkb_model_kendaraan` (`id_model`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `data_bpkb_ibfk_3` FOREIGN KEY (`bahan_bakar`) REFERENCES `bpkb_bahan_bakar` (`id_bahan_bakar`) ON DELETE CASCADE ON UPDATE CASCADE;
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
