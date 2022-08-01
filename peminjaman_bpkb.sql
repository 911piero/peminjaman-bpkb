-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2022 at 04:05 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

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
(26, '12312321', '1658392295_ad73ff9a4af4e164dbc7.jpg', '2022-07-21', '2022-07-21'),
(35, '1231231', '1659275926_0fc0028349161899f16d.jpg', '2022-07-31', '2022-07-31');

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
  `status` enum('Dipinjam','Tidak Dipinjam','Dihapus') NOT NULL DEFAULT 'Tidak Dipinjam',
  `isActive` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` date DEFAULT current_timestamp(),
  `updated_at` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_bpkb`
--

INSERT INTO `data_bpkb` (`id_bpkb`, `nomor_registrasi`, `nama_pemilik`, `alamat`, `merk`, `tipe`, `model`, `tahun_pembuatan`, `isi_silinder`, `nomor_rangka`, `nomor_mesin`, `warna`, `bahan_bakar`, `warna_tnkb`, `tahun_registrasi`, `nomor_bpkb`, `kode_lokasi`, `status`, `isActive`, `created_at`, `updated_at`) VALUES
(32, 'AC 2222 QQ', '1', 'BANTOL', 'BMW', 'M5', 2, 2020, 2131, '1', '1', 'black', 1, 2, 2022, '1231231', 2525252, 'Tidak Dipinjam', 0, '2022-07-31', '2022-07-31');

-- --------------------------------------------------------

--
-- Table structure for table `data_mutasi`
--

CREATE TABLE `data_mutasi` (
  `id_mutasi` int(11) NOT NULL,
  `nomor_registrasi_lama` varchar(255) NOT NULL,
  `nomor_registrasi_baru` varchar(255) NOT NULL DEFAULT '-',
  `tgl_mutasi` datetime NOT NULL,
  `jenis_mutasi` varchar(255) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_mutasi`
--

INSERT INTO `data_mutasi` (`id_mutasi`, `nomor_registrasi_lama`, `nomor_registrasi_baru`, `tgl_mutasi`, `jenis_mutasi`, `created_at`, `updated_at`) VALUES
(9, 'AB 3333 ZX', 'AC 2222 QQ', '2022-07-31 08:59:13', 'Perubahan Nomor Registrasi', '2022-07-31', '2022-07-31'),
(10, 'AC 2222 QQ', '-', '2022-07-31 08:59:26', 'Penghapusan Nomor Registrasi', '2022-07-31', '2022-07-31');

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
(39, 'Khrisna Yudha Pratama', '3402084309810001', 32, '13123', '1231231', 'Sir Alex', '2121231312', '12312', 'Internal Pemkot', 'Pakai', '2022-07-19', '2022-07-31', '2022-08-02', 'Dikembalikan', '2022-07-31', '2022-07-31');

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
-- Dumping data for table `peminjam_gambar`
--

INSERT INTO `peminjam_gambar` (`id_gambar`, `nik`, `link`, `created_at`, `updated_at`) VALUES
(24, '3402084309810001', '1659276071_047616d93dab5c297797.jpg', '0000-00-00', '0000-00-00');

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
-- Indexes for table `data_mutasi`
--
ALTER TABLE `data_mutasi`
  ADD PRIMARY KEY (`id_mutasi`);

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
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

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
  MODIFY `id_bpkb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `data_mutasi`
--
ALTER TABLE `data_mutasi`
  MODIFY `id_mutasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `data_peminjam`
--
ALTER TABLE `data_peminjam`
  MODIFY `id_peminjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `peminjam_gambar`
--
ALTER TABLE `peminjam_gambar`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
