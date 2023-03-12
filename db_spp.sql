-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 12, 2023 at 06:27 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_spp`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `DELETE_KELAS` (IN `id_kelas` INT(11))   BEGIN
DELETE FROM kelas WHERE id=id_kelas;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `DELETE_PEMBAYARAN` (IN `in_id` INT)   BEGIN
DELETE FROM pembayaran WHERE id=in_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `DELETE_PENGGUNA` (IN `in_id` INT)   BEGIN
DELETE FROM pengguna WHERE id=in_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `DELETE_PETUGAS` (IN `in_id` INT)   BEGIN
DELETE FROM petugas WHERE id=in_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `DELETE_SISWA` (IN `in_id` INT)   BEGIN
DELETE FROM siswa WHERE id=in_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `INSERT_KELAS` (IN `nama` VARCHAR(10), IN `kompetensi_keahlian` VARCHAR(50))   BEGIN
INSERT INTO kelas VALUES (null , nama, kompetensi_keahlian);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `INSERT_PEMBAYARAN` (IN `in_tahun_ajaran` VARCHAR(9), IN `in_nominal` INT)   BEGIN
INSERT INTO pembayaran VALUES (
    null , 
    in_tahun_ajaran, 
    in_nominal
);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `INSERT_PENGGUNA` (IN `up_username` VARCHAR(25), IN `up_password` VARCHAR(128), IN `up_role` ENUM('admin','petugas','siswa'))   BEGIN
INSERT INTO pengguna VALUES (
    null, 
    up_username, 
    up_password, 
    up_role
);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `INSERT_PETUGAS` (IN `in_nama` VARCHAR(50), IN `in_pengguna_id` INT)   BEGIN
INSERT INTO 
	petugas 
VALUES (null , 
        in_nama, 
        in_pengguna_id
       );
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `INSERT_SISWA` (IN `in_nisn` INT(10), IN `in_nis` VARCHAR(5), IN `in_nama` VARCHAR(50), IN `in_alamat` TEXT, IN `in_telepon` VARCHAR(14), IN `in_kelas_id` INT, IN `in_pengguna_id` INT, IN `in_pembayaran_id` INT)   BEGIN
INSERT INTO siswa VALUES(
	null, 
    in_nisn,
    in_nis,
    in_nama,
    in_alamat,
    in_telepon,
    in_kelas_id,
    in_pengguna_id,
    in_pembayaran_id
);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `UPDATE_KELAS` (IN `p_id` INT(11), IN `up_nama` VARCHAR(10), IN `up_kompetensi_keahlian` VARCHAR(50))   BEGIN
UPDATE kelas 
SET 
nama = up_nama, kompetensi_keahlian = up_kompetensi_keahlian WHERE id = p_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `UPDATE_PEMBAYARAN` (IN `p_id` INT, IN `up_tahun_ajaran` VARCHAR(9), IN `up_nominal` INT)   BEGIN
UPDATE pembayaran 
SET 
    tahun_ajaran = up_tahun_ajaran, 
    nominal = up_nominal 
WHERE 
	id = p_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `UPDATE_PENGGUNA` (IN `p_id` INT, IN `up_username` VARCHAR(25), IN `up_password` VARCHAR(128), IN `up_role` ENUM('admin','petugas','siswa'))   BEGIN
UPDATE pengguna 
SET 
    username = up_username, 
    password = up_password,
    role = up_role
WHERE 
	id = p_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `UPDATE_PETUGAS` (IN `in_id` INT, IN `up_nama` VARCHAR(50), IN `up_pengguna_id` INT)   BEGIN
UPDATE petugas 
SET 
    nama = up_nama, 
    pengguna_id = up_pengguna_id
WHERE 
	id = in_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `UPDATE_SISWA` (IN `in_id` INT, IN `in_nisn` VARCHAR(10), IN `in_nis` VARCHAR(5), IN `in_nama` VARCHAR(50), IN `in_alamat` TEXT, IN `in_telepon` VARCHAR(14), IN `in_kelas_id` INT, IN `in_pengguna_id` INT, IN `in_pembayaran_id` INT)   BEGIN
UPDATE siswa 
SET 
	nisn = in_nisn, 
    nis = in_nis,
    nama = in_nama,
    alamat = in_alamat,
    telepon = in_telepon,
    kelas_id = in_kelas_id,
    pengguna_id = in_pengguna_id,
    pembayaran_id = in_pembayaran_id
    WHERE id = in_id;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `getpetugas`
-- (See below for the actual view)
--
CREATE TABLE `getpetugas` (
`id` int
,`nama` varchar(50)
,`pengguna_id` int
,`username` varchar(25)
,`password` varchar(128)
,`role` enum('admin','petugas','siswa')
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `getsiswa`
-- (See below for the actual view)
--
CREATE TABLE `getsiswa` (
`id` int
,`nisn` varchar(10)
,`nis` varchar(5)
,`nama` varchar(50)
,`alamat` text
,`telepon` varchar(14)
,`kelas_id` int
,`pengguna_id` int
,`pembayaran_id` int
,`username` varchar(25)
,`password` varchar(128)
,`role` enum('admin','petugas','siswa')
,`tahun_ajaran` varchar(9)
,`nominal` int
,`nama_kelas` varchar(10)
,`kompetensi_keahlian` varchar(50)
);

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` int NOT NULL,
  `nama` varchar(10) NOT NULL,
  `kompetensi_keahlian` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `nama`, `kompetensi_keahlian`) VALUES
(7, 'Ayes', 'RPL'),
(11, 'Ani', 'MM'),
(12, 'Ane', 'TKJ');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` int NOT NULL,
  `tahun_ajaran` varchar(9) NOT NULL,
  `nominal` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id`, `tahun_ajaran`, `nominal`) VALUES
(1, '2020/2021', 1200000),
(2, '2023/2024', 1200000),
(3, '2028/2029', 2400000);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(128) NOT NULL,
  `role` enum('admin','petugas','siswa') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'petugas', 'petugas', 'petugas'),
(3, 'siswa', 'siswa', 'siswa');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id` int NOT NULL,
  `nama` varchar(50) NOT NULL,
  `pengguna_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id`, `nama`, `pengguna_id`) VALUES
(1, 'ptgs1', 1),
(10, 'ptgs2', 2);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `nis` varchar(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(14) NOT NULL,
  `kelas_id` int NOT NULL,
  `pengguna_id` int NOT NULL,
  `pembayaran_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nisn`, `nis`, `nama`, `alamat`, `telepon`, `kelas_id`, `pengguna_id`, `pembayaran_id`) VALUES
(6, '510', '28903', 'Arimbi', 'Jl.Raya Satu', '088854368000', 7, 3, 1),
(7, '520', '3000', 'Arishna', 'Jl. Raya Dua', '09868945', 7, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int NOT NULL,
  `tanggal_bayar` datetime NOT NULL,
  `bulan_dibayar` int NOT NULL,
  `tahun_dibayar` int NOT NULL,
  `siswa_id` int NOT NULL,
  `petugas_id` int NOT NULL,
  `pembayaran_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `tanggal_bayar`, `bulan_dibayar`, `tahun_dibayar`, `siswa_id`, `petugas_id`, `pembayaran_id`) VALUES
(4, '2023-03-09 06:12:05', 12, 2021, 6, 1, 1),
(5, '2023-03-09 06:24:34', 11, 2021, 7, 1, 1);

-- --------------------------------------------------------

--
-- Structure for view `getpetugas`
--
DROP TABLE IF EXISTS `getpetugas`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `getpetugas`  AS SELECT `petugas`.`id` AS `id`, `petugas`.`nama` AS `nama`, `petugas`.`pengguna_id` AS `pengguna_id`, `pengguna`.`username` AS `username`, `pengguna`.`password` AS `password`, `pengguna`.`role` AS `role` FROM (`petugas` join `pengguna` on((`petugas`.`pengguna_id` = `pengguna`.`id`))) ;

-- --------------------------------------------------------

--
-- Structure for view `getsiswa`
--
DROP TABLE IF EXISTS `getsiswa`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `getsiswa`  AS SELECT `siswa`.`id` AS `id`, `siswa`.`nisn` AS `nisn`, `siswa`.`nis` AS `nis`, `siswa`.`nama` AS `nama`, `siswa`.`alamat` AS `alamat`, `siswa`.`telepon` AS `telepon`, `siswa`.`kelas_id` AS `kelas_id`, `siswa`.`pengguna_id` AS `pengguna_id`, `siswa`.`pembayaran_id` AS `pembayaran_id`, `pengguna`.`username` AS `username`, `pengguna`.`password` AS `password`, `pengguna`.`role` AS `role`, `pembayaran`.`tahun_ajaran` AS `tahun_ajaran`, `pembayaran`.`nominal` AS `nominal`, `kelas`.`nama` AS `nama_kelas`, `kelas`.`kompetensi_keahlian` AS `kompetensi_keahlian` FROM (((`siswa` join `pengguna` on((`siswa`.`pengguna_id` = `pengguna`.`id`))) join `pembayaran` on((`siswa`.`pembayaran_id` = `pembayaran`.`id`))) join `kelas` on((`siswa`.`kelas_id` = `kelas`.`id`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pengguna_id` (`pengguna_id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kelas_id` (`kelas_id`,`pengguna_id`,`pembayaran_id`),
  ADD KEY `siswa_ibfk_1` (`pengguna_id`),
  ADD KEY `siswa_ibfk_2` (`pembayaran_id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `siswa_id` (`siswa_id`,`petugas_id`,`pembayaran_id`),
  ADD KEY `transaksi_ibfk_1` (`petugas_id`),
  ADD KEY `transaksi_ibfk_3` (`pembayaran_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `petugas`
--
ALTER TABLE `petugas`
  ADD CONSTRAINT `petugas_ibfk_1` FOREIGN KEY (`pengguna_id`) REFERENCES `pengguna` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`pengguna_id`) REFERENCES `pengguna` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `siswa_ibfk_2` FOREIGN KEY (`pembayaran_id`) REFERENCES `pembayaran` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `siswa_ibfk_3` FOREIGN KEY (`kelas_id`) REFERENCES `kelas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`petugas_id`) REFERENCES `petugas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`siswa_id`) REFERENCES `siswa` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`pembayaran_id`) REFERENCES `pembayaran` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
