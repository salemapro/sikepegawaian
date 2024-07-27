-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2024 at 06:53 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kepegawaian`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(4, 'A01', 'admin123'),
(5, 'A02', 'adm02');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_izin`
--

CREATE TABLE `tbl_izin` (
  `id` int(11) NOT NULL,
  `jenis_izin` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_izin`
--

INSERT INTO `tbl_izin` (`id`, `jenis_izin`, `created_at`, `updated_at`) VALUES
(1, 'Tidak Izin', '2024-07-27 03:54:31', ''),
(3, 'Sakit', '2024-07-27 03:54:49', ''),
(4, 'Menikah', '2024-07-27 03:54:57', ''),
(5, 'Menikahkan', '2024-07-27 03:55:04', ''),
(6, 'Khitanan Anak', '2024-07-27 03:55:13', ''),
(7, 'Melahirkan', '2024-07-27 03:55:22', ''),
(8, 'Istri Melahirkan', '2024-07-27 03:55:30', ''),
(9, 'Keluarga Yang Meninggal', '2024-07-27 03:55:40', ''),
(10, 'Haji', '2024-07-25 16:09:39', ''),
(11, 'Umrah', '2024-07-27 03:55:50', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lapabsensi`
--

CREATE TABLE `tbl_lapabsensi` (
  `id_absen` int(11) NOT NULL,
  `id_pegawai` int(11) NOT NULL,
  `nip` char(10) NOT NULL,
  `izin` int(11) NOT NULL,
  `checkin` time NOT NULL,
  `checkout` time NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `pekerjaan_selesai` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_lapabsensi`
--

INSERT INTO `tbl_lapabsensi` (`id_absen`, `id_pegawai`, `nip`, `izin`, `checkin`, `checkout`, `keterangan`, `pekerjaan_selesai`, `tanggal`) VALUES
(54, 0, '51523001', 11, '00:00:00', '00:00:00', 'Tidak Bekerja', '', '2024-07-27 03:58:56'),
(55, 0, '51523002', 1, '19:36:31', '19:37:36', 'Bekerja dari rumah', '', '2024-07-27 12:37:37'),
(56, 0, '51521004', 1, '19:46:57', '19:52:37', 'Bekerja di kantor', '', '2024-07-27 12:52:38'),
(57, 0, '51521005', 8, '00:00:00', '00:00:00', 'Tidak Bekerja', '', '2024-07-27 14:17:21'),
(58, 0, '51521006', 1, '23:28:18', '23:46:31', 'Bekerja di kantor', 'done semuanya ye', '2024-07-27 16:46:32');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pegawai`
--

CREATE TABLE `tbl_pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nip` char(10) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `jabatan` varchar(25) NOT NULL,
  `instansi` varchar(25) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pegawai`
--

INSERT INTO `tbl_pegawai` (`id_pegawai`, `nip`, `nama_lengkap`, `jabatan`, `instansi`, `alamat`, `email`, `password`) VALUES
(1, '51523001', 'Ibnu Shidiq', 'Komisaris', 'cv.insaba', 'Kab.bandung', 'ibnus1@gmail.com', 'user'),
(2, '51523002', 'Dewi', 'Keuangan', 'cv.insaba', 'Kota Bandung', 'Ddewi2@gmail.com', 'user'),
(11, '51523003', 'Arie Afriadi', 'Direktur', 'Cv.Insaba', 'Kota.Bandung', 'Arieaff@gmail.com', 'admin'),
(12, '51521004', 'Dida Kusdiana', 'Konsultan', 'Cv.Insaba', 'Kota bandung', 'didakus@gmail.com', 'user'),
(13, '51521005', 'Irham', 'Konsultan', 'Cv.Insaba', 'Kab.Bandung', 'Irham50@gmail.com', 'user'),
(14, '51521006', 'Irfan Abdurahman', 'Konsultan', 'Cv.Insaba', 'Kab.bandung', 'Abduirfan@gmail.com', 'user'),
(15, '51521007', 'Muhammad Luthfi', 'Konsultan', 'Cv.Insaba', 'kota bandung', 'mluthfi21@gmail.com', 'user'),
(16, '51521008', 'Dani Zaelani', 'Supir', 'Cv.Insaba', 'Kab bandung', 'danizae@gmail.com', 'user'),
(17, '51521009', 'Ridwan', 'Office Boy', 'Cv.Insaba', 'Kota bandung', 'ridwanaa@gmail.com', 'user'),
(18, '51521010', 'Zakie', 'Jaringan dan Server', 'Cv.Insaba', 'Kota bandung', 'Zakieryo@gmail.com', 'user'),
(19, '51521011', 'Sahebuddin', 'Konsultan', 'Cv.Insaba', 'Kab bandung', 'Sahebudin50@gmail.com', 'user'),
(20, '51522012', 'Helmi Iskandar', 'Direktur', 'Cv.Insaba', 'Kota bandung', 'Helmikandar@gmail.com', 'admin'),
(21, '51522013', 'Hikmat', 'HRD', 'Cv.Insaba', 'kota bandung', 'Hikmat67@gmail.com', 'user'),
(22, '51522014', 'Irvan Miftahul Khoir', 'Marketing', 'Cv.Insaba', 'Kab bandung', 'MiftahulKhoir45@gmail.com', 'user'),
(23, '51522015', 'Mulki Mantasya', 'Developer', 'Cv.Insaba', 'kab.bandung', 'amulki3@gmail.com', 'user'),
(24, '51522016', 'Ryan Pribowo', 'Developer', 'Cv.Insaba', 'Sumedang', 'Ryanabowo@gmail.com', 'user'),
(25, '51523017', 'Amry Maftuh', 'Developer', 'Cv.Insaba', 'bandung', 'Maftuhamry@gmail.com', 'user'),
(26, '51523018', 'Zaidan Arrasyid', 'Developer', 'Cv.Insaba', 'kota bandung', 'ziindan@gmail.com', 'user'),
(27, '51523019', 'Rizal', 'Developer', 'Cv.Insaba', 'kota bandung', 'rizakmuhai@gmail.com', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pekerjaan`
--

CREATE TABLE `tbl_pekerjaan` (
  `id` int(11) NOT NULL,
  `detail_pekerjaan` text NOT NULL,
  `nip` varchar(8) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pekerjaan`
--

INSERT INTO `tbl_pekerjaan` (`id`, `detail_pekerjaan`, `nip`, `created_at`) VALUES
(1, 'Insert Data ke dalam Word', '51523001', '2024-07-27 14:57:30'),
(2, 'Cuci Piring', '51523002', '2024-07-27 16:12:34'),
(3, 'Beberes', '51521006', '2024-07-27 16:27:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_izin`
--
ALTER TABLE `tbl_izin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_lapabsensi`
--
ALTER TABLE `tbl_lapabsensi`
  ADD PRIMARY KEY (`id_absen`);

--
-- Indexes for table `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `tbl_pekerjaan`
--
ALTER TABLE `tbl_pekerjaan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_izin`
--
ALTER TABLE `tbl_izin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_lapabsensi`
--
ALTER TABLE `tbl_lapabsensi`
  MODIFY `id_absen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tbl_pekerjaan`
--
ALTER TABLE `tbl_pekerjaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
