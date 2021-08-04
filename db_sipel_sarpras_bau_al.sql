-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04 Agu 2021 pada 15.07
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sipel_sarpras_bau_al`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_menu`
--

CREATE TABLE `tabel_menu` (
  `id` int(11) NOT NULL,
  `nama_menu` varchar(50) NOT NULL,
  `link` varchar(50) NOT NULL,
  `icon` varchar(25) NOT NULL,
  `is_main_menu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_menu`
--

INSERT INTO `tabel_menu` (`id`, `nama_menu`, `link`, `icon`, `is_main_menu`) VALUES
(1, 'Beranda', 'tampilan_utama', 'fa fa-dashboard', 0),
(2, 'Data Admin', 'admin', 'fa fa-id-badge', 0),
(3, 'Data User', 'user', 'fa fa-users', 0),
(4, 'Data Ruangan', 'ruangan', 'fa fa-building', 0),
(5, 'Data Barang', 'barang', 'fa fa-cubes', 0),
(6, 'Data Kendaraan', 'kendaraan', 'fa fa-bicycle', 0),
(7, 'Data Komplain Kerusakan', 'komplain', 'fa fa-calendar-plus-o', 0),
(15, 'Logout', 'auth/logout', 'fa fa-sign-out', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` varchar(25) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `email_admin` varchar(125) NOT NULL,
  `no_hp_admin` varchar(12) NOT NULL,
  `user_admin` varchar(50) NOT NULL,
  `pass_admin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `nama_admin`, `email_admin`, `no_hp_admin`, `user_admin`, `pass_admin`) VALUES
('ADM010620210001', 'Fernandy Ricardo Antonius', '1711500123@mahasiswa.atmaluhur.ac.id', '085170318138', 'admin123', 'admin123'),
('ADM010620210002', 'Nizar Yahya', '1711500123@atmaluhur.ac.id', '085170318138', 'nizar123', 'nizar123'),
('ADM010620210003', 'Jimmy Syibli', '1711500123@atmaluhur.ac.id', '085170318138', 'jimmy123', 'jimmy123'),
('ADM010620210004', 'Hendrawan, S. Kom', '1711500123@atmaluhur.ac.id', '085170318138', 'hendra123', 'hendra123'),
('ADM010620210006', 'Tri Sugihartono, M.Kom', 'trisugihartono@atmaluhur.ac.id', '085170318130', 'tri123', 'tri123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `kd_barang` varchar(25) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `merek_barang` varchar(255) NOT NULL,
  `spesifikasi_barang` text NOT NULL,
  `tahun_barang` year(4) NOT NULL,
  `kd_ruangan` varchar(10) NOT NULL,
  `jumlah_barang` int(100) NOT NULL,
  `kondisi_barang` enum('Baik','Kurang Baik','Rusak Berat') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_barang`
--

INSERT INTO `tbl_barang` (`kd_barang`, `nama_barang`, `merek_barang`, `spesifikasi_barang`, `tahun_barang`, `kd_ruangan`, `jumlah_barang`, `kondisi_barang`) VALUES
('09.03.03.01.00118.2016', 'Monitor LCD', 'LG', 'Flatron L177WSB 17', 2016, '2.2.4', 1, 'Baik'),
('09.03.03.01.00123.2016', 'Komputer Desktop PC', 'Gigabyte H61MM', 'Intel Core I3/DDR3 2GB/HDD 320GB/DVDRW Combo/14 Inch WideScreen', 2016, 'LAB.4', 1, 'Baik'),
('09.03.12.01.00119.2016', 'Keyboard', 'Logitech', 'USA Keyboard', 2016, 'LAB.3', 1, 'Baik'),
('09.03.13.01.00120.2016', 'Kursi Kuliah', 'Futura', 'Furniture', 2016, '2.1.4', 32, 'Baik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kendaraan`
--

CREATE TABLE `tbl_kendaraan` (
  `kd_kendaraan` varchar(25) NOT NULL,
  `nama_kendaraan` varchar(50) NOT NULL,
  `merek_kendaraan` varchar(50) NOT NULL,
  `jenis_kendaraan` varchar(50) NOT NULL,
  `tahun_kendaraan` year(4) NOT NULL,
  `jumlah_kendaraan` int(100) NOT NULL,
  `kondisi_kendaraan` enum('Baik','Kurang Baik','Rusak Berat') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kendaraan`
--

INSERT INTO `tbl_kendaraan` (`kd_kendaraan`, `nama_kendaraan`, `merek_kendaraan`, `jenis_kendaraan`, `tahun_kendaraan`, `jumlah_kendaraan`, `kondisi_kendaraan`) VALUES
('BN-0001-PP', 'Avanza', 'Toyota', 'Minibus', 2016, 2, 'Baik'),
('BN-0002-PP', 'Innova', 'Toyota', 'Minibus', 2017, 1, 'Baik'),
('BN-0003-PP', 'Panther', 'Isuzu', 'Minibus', 2009, 3, 'Baik'),
('BN-0004-PP', 'Fortuner', 'Toyota', 'Minibus', 2017, 1, 'Baik'),
('BN-0005-PP', 'Grand Vitara', 'Suzuki', 'Minibus', 2012, 1, 'Baik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_komplain`
--

CREATE TABLE `tbl_komplain` (
  `kd_komplain` varchar(50) NOT NULL,
  `id_user` varchar(25) NOT NULL,
  `jenis_komplain` enum('Kerusakan Sarana','Kerusakan Prasarana') NOT NULL,
  `isi_komplain` varchar(255) NOT NULL,
  `jam_komplain` time NOT NULL,
  `tanggal_komplain` date NOT NULL,
  `kd_ruangan` varchar(10) NOT NULL,
  `foto_komplain` varchar(255) NOT NULL,
  `status_komplain` enum('Belum Dikerjakan','Sedang Dikerjakan','Selesai Dikerjakan','Maaf, terjadi pelaporan komplain kerusakan yang sama') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_ruangan`
--

CREATE TABLE `tbl_ruangan` (
  `kd_ruangan` varchar(10) NOT NULL,
  `nama_ruangan` varchar(50) NOT NULL,
  `kondisi_ruangan` enum('Baik','Kurang Baik','Rusak Berat','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_ruangan`
--

INSERT INTO `tbl_ruangan` (`kd_ruangan`, `nama_ruangan`, `kondisi_ruangan`) VALUES
('1.3.1', 'Ruang Kelas 1.3.1', 'Rusak Berat'),
('1.3.3', 'Ruang Kelas 1.3.3', 'Baik'),
('1.3.4', 'Ruang Kelas 1.3.4', 'Baik'),
('2.1.4', 'Ruang Kelas 2.1.4', 'Baik'),
('2.1.5', 'Ruang Kelas 2.1.5', 'Baik'),
('2.1.6', 'Ruang Kelas 2.1.6', 'Baik'),
('2.2.4', 'Ruang Kelas 2.2.4', 'Baik'),
('LAB.1', 'Ruang Laborotorium 1', 'Baik'),
('LAB.2', 'Ruang Laborotorium 2 Komputer', 'Baik'),
('LAB.3', 'Ruang Laborotorium 3 Komputer', 'Baik'),
('LAB.4', 'Ruang Laborotorium 4 Multimedia', 'Baik'),
('LAB.5', 'Ruang Laborotorium Jaringan Komputer', 'Baik'),
('LAB.6', 'Ruang Laborotorium Bahasa', 'Baik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` varchar(25) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `email_user` varchar(125) NOT NULL,
  `no_hp_user` varchar(12) NOT NULL,
  `user_user` varchar(25) NOT NULL,
  `pass_user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `email_user`, `no_hp_user`, `user_user`, `pass_user`) VALUES
('USR010620210001', 'Fernandy Ricardo Antonius', '1711500123@mahasiswa.atmaluhur.ac.id', '085170318138', '1711500123', 'fernandy123'),
('USR010620210002', 'Nizar Yahya', '1711500122@mahasiswa.atmaluhur.ac.id', '085170318139', '1711500122', 'nizar123'),
('USR010620210003', 'Jimmy Syibli', '1711500138@mahasiswa.atmaluhur.ac.id', '085170318190', '1711500138', 'jimmy123'),
('USR010620210004', 'Intan Eka Putri', '1822500078@mahasiswa.atmaluhur.ac.id', '085170318188', '1822500078', 'intan123'),
('USR010620210005', 'Tri Sugihartono', 'trisugihartono@atmaluhur.ac.id', '085256789900', 'tri123', 'tri123'),
('USR010620210006', 'Panji Dharma Yuda', '1711500121@mahasiswa.atmaluhur.ac.id', '085170318161', '1711500121', 'panji123'),
('USR160620210009', 'Febriansyah', '1711500110@mahasiswa.atmaluhur.ac.id', '085170318138', 'febri123', 'febri123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_menu`
--
ALTER TABLE `tabel_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`kd_barang`);

--
-- Indexes for table `tbl_kendaraan`
--
ALTER TABLE `tbl_kendaraan`
  ADD PRIMARY KEY (`kd_kendaraan`);

--
-- Indexes for table `tbl_komplain`
--
ALTER TABLE `tbl_komplain`
  ADD PRIMARY KEY (`kd_komplain`);

--
-- Indexes for table `tbl_ruangan`
--
ALTER TABLE `tbl_ruangan`
  ADD PRIMARY KEY (`kd_ruangan`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_menu`
--
ALTER TABLE `tabel_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
