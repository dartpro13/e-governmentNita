-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2017 at 03:28 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pa_nita`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_file`
--

CREATE TABLE IF NOT EXISTS `tb_file` (
  `id_file` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `no_pengajuan` int(11) NOT NULL,
  PRIMARY KEY (`id_file`),
  KEY `no_pengajuan` (`no_pengajuan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis_surat`
--

CREATE TABLE IF NOT EXISTS `tb_jenis_surat` (
  `id_jenis` int(11) NOT NULL AUTO_INCREMENT,
  `jenis` varchar(100) NOT NULL,
  `no_surat_keluar` varchar(100) NOT NULL,
  PRIMARY KEY (`id_jenis`),
  KEY `id_jenis` (`id_jenis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pegawai`
--

CREATE TABLE IF NOT EXISTS `tb_pegawai` (
  `nip` int(11) NOT NULL,
  `password` varchar(100) NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  PRIMARY KEY (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`nip`, `password`, `no_hp`, `nama`, `jabatan`, `alamat`) VALUES
(52352, '21232f297a57a5a743894a0e4a801fc3', '124512541', 'prasetyo singgih laksono', 'Lurah', 'bandung');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penduduk`
--

CREATE TABLE IF NOT EXISTS `tb_penduduk` (
  `nik` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `j_kelamin` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `tmp_lahir` varchar(100) NOT NULL,
  `tgl_lahir` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `status_perkawinan` varchar(100) NOT NULL,
  `kewarganegaraan` varchar(100) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  PRIMARY KEY (`nik`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_penduduk`
--

INSERT INTO `tb_penduduk` (`nik`, `nama`, `j_kelamin`, `agama`, `tmp_lahir`, `tgl_lahir`, `alamat`, `status_perkawinan`, `kewarganegaraan`, `pekerjaan`) VALUES
(12421, 'prasetyo singgih laksono', 'Laki-laki', 'Islam', 'sukoharjo', '2017-12-31', 'bandung', 'Belum Kawin', 'Indonesia', 'mahasiswa'),
(12423, 'singgih', 'Laki-laki', 'Islam', 'sukoharjo', '2017-12-31', 'bandung', 'Belum Kawin', 'Indonesia', 'mahasiswa');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengajuan`
--

CREATE TABLE IF NOT EXISTS `tb_pengajuan` (
  `no_pengajuan` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_pengajuan` varchar(100) NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `perihal` varchar(100) NOT NULL,
  `nik` int(11) NOT NULL,
  PRIMARY KEY (`no_pengajuan`),
  KEY `nik` (`nik`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat_kelakuan_baik`
--

CREATE TABLE IF NOT EXISTS `tb_surat_kelakuan_baik` (
  `id_surat` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `nik` int(11) NOT NULL,
  `keperluan` varchar(1000) NOT NULL,
  PRIMARY KEY (`id_surat`),
  KEY `nik` (`nik`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `tb_surat_kelakuan_baik`
--

INSERT INTO `tb_surat_kelakuan_baik` (`id_surat`, `nama`, `jabatan`, `nik`, `keperluan`) VALUES
(1, 'prasetyo singgih laksono', 'Lurah', 12421, 'kelakuan baik'),
(17, '12423', 'Lurah', 12423, 'lahir');

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat_keluar`
--

CREATE TABLE IF NOT EXISTS `tb_surat_keluar` (
  `no_surat_keluar` int(11) NOT NULL,
  `perihal` varchar(100) NOT NULL,
  `tgl_surat_keluar` varchar(100) NOT NULL,
  `keperluan` varchar(100) NOT NULL,
  `nip` int(11) NOT NULL,
  `nik` int(11) NOT NULL,
  KEY `no_surat_keluar` (`no_surat_keluar`,`nip`,`nik`),
  KEY `nip` (`nip`),
  KEY `nik` (`nik`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat_keterangan_lahir`
--

CREATE TABLE IF NOT EXISTS `tb_surat_keterangan_lahir` (
  `id_surat` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `nik_pengaju` int(11) NOT NULL,
  `nik_ayah` int(11) NOT NULL,
  `nik_ibu` int(11) NOT NULL,
  `keperluan` varchar(1000) NOT NULL,
  PRIMARY KEY (`id_surat`),
  KEY `nik_pengaju` (`nik_pengaju`,`nik_ayah`,`nik_ibu`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tb_surat_keterangan_lahir`
--

INSERT INTO `tb_surat_keterangan_lahir` (`id_surat`, `nama`, `jabatan`, `nik_pengaju`, `nik_ayah`, `nik_ibu`, `keperluan`) VALUES
(1, 'singgih', 'Lurah', 12423, 12423, 12423, 'lahir'),
(4, 'sdfsdf', 'Lurah', 12421, 12421, 12421, 'afasfasfas'),
(5, 'sdfsdf', 'Lurah', 12421, 12421, 12421, 'afasfasfas'),
(6, 'sdfsdf', 'Lurah', 12421, 12421, 12421, 'afasfasfas');

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat_keterangan_pas_jalan`
--

CREATE TABLE IF NOT EXISTS `tb_surat_keterangan_pas_jalan` (
  `id_surat` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `nik` int(11) NOT NULL,
  `keperluan` varchar(1000) NOT NULL,
  PRIMARY KEY (`id_surat`),
  KEY `nik` (`nik`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_surat_keterangan_pas_jalan`
--

INSERT INTO `tb_surat_keterangan_pas_jalan` (`id_surat`, `nama`, `jabatan`, `nik`, `keperluan`) VALUES
(1, 'prasetyo singgih laksono', 'Lurah', 12421, 'tes');

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat_keterangan_pindah`
--

CREATE TABLE IF NOT EXISTS `tb_surat_keterangan_pindah` (
  `id_surat` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `nik` int(11) NOT NULL,
  `keperluan` varchar(1000) NOT NULL,
  PRIMARY KEY (`id_surat`),
  KEY `nik` (`nik`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_surat_keterangan_pindah`
--

INSERT INTO `tb_surat_keterangan_pindah` (`id_surat`, `nama`, `jabatan`, `nik`, `keperluan`) VALUES
(1, 'prasetyo singgih laksono', 'Lurah', 12421, 'tes');

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat_keterangan_usaha`
--

CREATE TABLE IF NOT EXISTS `tb_surat_keterangan_usaha` (
  `id_surat` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `nik` int(11) NOT NULL,
  `keperluan` varchar(1000) NOT NULL,
  PRIMARY KEY (`id_surat`),
  KEY `nik` (`nik`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_surat_keterangan_usaha`
--

INSERT INTO `tb_surat_keterangan_usaha` (`id_surat`, `nama`, `jabatan`, `nik`, `keperluan`) VALUES
(1, 'prasetyo singgih laksono', 'Lurah', 12421, 'tes');

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat_masuk`
--

CREATE TABLE IF NOT EXISTS `tb_surat_masuk` (
  `no_surat` int(11) NOT NULL AUTO_INCREMENT,
  `pengirim` varchar(100) NOT NULL,
  `ditujukan` varchar(100) NOT NULL,
  `tgl_surat` varchar(100) NOT NULL,
  `perihal` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  `nip` int(11) NOT NULL,
  PRIMARY KEY (`no_surat`),
  KEY `nip` (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat_pengantar_domisili`
--

CREATE TABLE IF NOT EXISTS `tb_surat_pengantar_domisili` (
  `id_surat` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `nik` int(11) NOT NULL,
  `keperluan` varchar(1000) NOT NULL,
  PRIMARY KEY (`id_surat`),
  KEY `nik` (`nik`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tb_surat_pengantar_domisili`
--

INSERT INTO `tb_surat_pengantar_domisili` (`id_surat`, `nama`, `jabatan`, `nik`, `keperluan`) VALUES
(1, 'prasetyo singgih laksono', 'Lurah', 12421, 'tes'),
(2, 'prasetyo singgih laksono', 'Lurah', 12421, 'tes');

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat_pengantar_kk`
--

CREATE TABLE IF NOT EXISTS `tb_surat_pengantar_kk` (
  `id_surat` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `nik` int(11) NOT NULL,
  `keperluan` varchar(1000) NOT NULL,
  PRIMARY KEY (`id_surat`),
  KEY `nik` (`nik`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tb_surat_pengantar_kk`
--

INSERT INTO `tb_surat_pengantar_kk` (`id_surat`, `nama`, `jabatan`, `nik`, `keperluan`) VALUES
(1, 'prasetyo singgih laksono', 'Lurah', 12421, 'cek'),
(2, 'prasetyo singgih laksono', 'Lurah', 12421, 'cek');

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat_pengantar_ktp`
--

CREATE TABLE IF NOT EXISTS `tb_surat_pengantar_ktp` (
  `id_surat` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `nik` int(11) NOT NULL,
  `keperluan` varchar(1000) NOT NULL,
  PRIMARY KEY (`id_surat`),
  KEY `nik` (`nik`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tb_surat_pengantar_ktp`
--

INSERT INTO `tb_surat_pengantar_ktp` (`id_surat`, `nama`, `jabatan`, `nik`, `keperluan`) VALUES
(1, 'singgih', 'Lurah', 12421, 'cek'),
(2, 'prasetyo singgih laksono', 'Lurah', 12421, 'cek'),
(3, 'prasetyo singgih laksono', 'Lurah', 12421, 'cek');

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat_pengesahan_kredit_bank`
--

CREATE TABLE IF NOT EXISTS `tb_surat_pengesahan_kredit_bank` (
  `id_surat` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `nik` int(11) NOT NULL,
  `keperluan` varchar(1000) NOT NULL,
  PRIMARY KEY (`id_surat`),
  KEY `nik` (`nik`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_surat_pengesahan_kredit_bank`
--

INSERT INTO `tb_surat_pengesahan_kredit_bank` (`id_surat`, `nama`, `jabatan`, `nik`, `keperluan`) VALUES
(1, 'prasetyo singgih laksono', 'Lurah', 12421, 'tes');

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat_pengesahan_riwayat_hidup`
--

CREATE TABLE IF NOT EXISTS `tb_surat_pengesahan_riwayat_hidup` (
  `id_surat` int(11) NOT NULL AUTO_INCREMENT,
  `nama` int(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `nik` int(11) NOT NULL,
  `keperluan` varchar(1000) NOT NULL,
  PRIMARY KEY (`id_surat`),
  KEY `nik` (`nik`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tb_surat_pengesahan_riwayat_hidup`
--

INSERT INTO `tb_surat_pengesahan_riwayat_hidup` (`id_surat`, `nama`, `jabatan`, `nik`, `keperluan`) VALUES
(1, 0, 'Lurah', 12421, 'tes'),
(2, 0, 'Lurah', 12421, 'tes');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_file`
--
ALTER TABLE `tb_file`
  ADD CONSTRAINT `tb_file_ibfk_1` FOREIGN KEY (`no_pengajuan`) REFERENCES `tb_pengajuan` (`no_pengajuan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_pengajuan`
--
ALTER TABLE `tb_pengajuan`
  ADD CONSTRAINT `tb_pengajuan_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `tb_penduduk` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_surat_keluar`
--
ALTER TABLE `tb_surat_keluar`
  ADD CONSTRAINT `tb_surat_keluar_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `tb_pegawai` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_surat_keluar_ibfk_2` FOREIGN KEY (`nik`) REFERENCES `tb_penduduk` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_surat_keluar_ibfk_3` FOREIGN KEY (`no_surat_keluar`) REFERENCES `tb_jenis_surat` (`id_jenis`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_surat_masuk`
--
ALTER TABLE `tb_surat_masuk`
  ADD CONSTRAINT `tb_surat_masuk_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `tb_pegawai` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
