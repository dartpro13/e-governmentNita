-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 03 Mei 2017 pada 01.36
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

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
-- Struktur dari tabel `tb_file`
--

CREATE TABLE IF NOT EXISTS `tb_file` (
`id_file` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_pengajuan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_file_persyaratan`
--

CREATE TABLE IF NOT EXISTS `tb_file_persyaratan` (
`id_file` int(11) NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `persyaratan_untuk` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `tb_file_persyaratan`
--

INSERT INTO `tb_file_persyaratan` (`id_file`, `nama_file`, `persyaratan_untuk`) VALUES
(1, 'CDM_to_PDM.docx', 'surat_kelakuan_baik'),
(2, 'Pertama_login_sebagai_penyewa.docx', 'surat_kelakuan_baik'),
(3, 'Pertama_login_sebagai_penyewa1.docx', 'surat_keterangan_lahir'),
(4, 'Pertama_login_sebagai_penyewa2.docx', 'surat_keterangan_lahir');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jenis_surat`
--

CREATE TABLE IF NOT EXISTS `tb_jenis_surat` (
`id_jenis` int(11) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `no_surat_keluar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pegawai`
--

CREATE TABLE IF NOT EXISTS `tb_pegawai` (
  `nip` int(11) NOT NULL,
  `password` varchar(100) NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`nip`, `password`, `no_hp`, `nama`, `jabatan`, `alamat`) VALUES
(52352, '21232f297a57a5a743894a0e4a801fc3', '124512541', 'prasetyo singgih laksono', 'Lurah', 'bandung');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penduduk`
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
  `pekerjaan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_penduduk`
--

INSERT INTO `tb_penduduk` (`nik`, `nama`, `j_kelamin`, `agama`, `tmp_lahir`, `tgl_lahir`, `alamat`, `status_perkawinan`, `kewarganegaraan`, `pekerjaan`) VALUES
(12421, 'prasetyo singgih laksono', 'Laki-laki', 'Islam', 'sukoharjo', '2017-12-31', 'bandung', 'Belum Kawin', 'Indonesia', 'mahasiswa'),
(12423, 'singgih', 'Laki-laki', 'Islam', 'sukoharjo', '2017-12-31', 'bandung', 'Belum Kawin', 'Indonesia', 'mahasiswa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengajuan`
--

CREATE TABLE IF NOT EXISTS `tb_pengajuan` (
`no_pengajuan` int(11) NOT NULL,
  `tgl_pengajuan` varchar(100) NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `perihal` varchar(100) NOT NULL,
  `nik` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_surat_kelakuan_baik`
--

CREATE TABLE IF NOT EXISTS `tb_surat_kelakuan_baik` (
`id_surat` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `nik` int(11) NOT NULL,
  `keperluan` varchar(1000) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data untuk tabel `tb_surat_kelakuan_baik`
--

INSERT INTO `tb_surat_kelakuan_baik` (`id_surat`, `nama`, `jabatan`, `nik`, `keperluan`) VALUES
(1, 'prasetyo singgih laksono', 'Lurah', 12421, 'surat kelakuan baik untuk melanjutkan studi'),
(17, '12423', 'Lurah', 12423, 'lahir'),
(20, 'singgih', 'Lurah', 12423, 'lahiran aja'),
(21, 'Budi', 'Lurah', 12421, 'Mengajukan diri sebagai manajer di sebuah perusahaan'),
(22, 'Bambang', 'Lurah', 12423, 'Untuk test'),
(23, 'Test', 'Lurah', 12421, 'Test'),
(24, 'Test 2', 'Lurah', 12421, 'Test');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_surat_keluar`
--

CREATE TABLE IF NOT EXISTS `tb_surat_keluar` (
  `no_surat_keluar` int(11) NOT NULL,
  `perihal` varchar(100) NOT NULL,
  `tgl_surat_keluar` varchar(100) NOT NULL,
  `keperluan` varchar(100) NOT NULL,
  `nip` int(11) NOT NULL,
  `nik` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_surat_keterangan_lahir`
--

CREATE TABLE IF NOT EXISTS `tb_surat_keterangan_lahir` (
`id_surat` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `nik_pengaju` int(11) NOT NULL,
  `nik_ayah` int(11) NOT NULL,
  `nik_ibu` int(11) NOT NULL,
  `keperluan` varchar(1000) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `tb_surat_keterangan_lahir`
--

INSERT INTO `tb_surat_keterangan_lahir` (`id_surat`, `nama`, `jabatan`, `nik_pengaju`, `nik_ayah`, `nik_ibu`, `keperluan`) VALUES
(1, 'singgih', 'Lurah', 12423, 12423, 12423, 'lahir'),
(4, 'sdfsdf', 'Lurah', 12421, 12421, 12421, 'afasfasfas'),
(5, 'sdfsdf', 'Lurah', 12421, 12421, 12421, 'afasfasfas'),
(6, 'sdfsdf', 'Lurah', 12421, 12421, 12421, 'afasfasfas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_surat_keterangan_pas_jalan`
--

CREATE TABLE IF NOT EXISTS `tb_surat_keterangan_pas_jalan` (
`id_surat` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `nik` int(11) NOT NULL,
  `keperluan` varchar(1000) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `tb_surat_keterangan_pas_jalan`
--

INSERT INTO `tb_surat_keterangan_pas_jalan` (`id_surat`, `nama`, `jabatan`, `nik`, `keperluan`) VALUES
(1, 'prasetyo singgih laksono', 'Lurah', 12421, 'tes');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_surat_keterangan_pindah`
--

CREATE TABLE IF NOT EXISTS `tb_surat_keterangan_pindah` (
`id_surat` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `nik` int(11) NOT NULL,
  `keperluan` varchar(1000) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `tb_surat_keterangan_pindah`
--

INSERT INTO `tb_surat_keterangan_pindah` (`id_surat`, `nama`, `jabatan`, `nik`, `keperluan`) VALUES
(1, 'prasetyo singgih laksono', 'Lurah', 12421, 'tes');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_surat_keterangan_usaha`
--

CREATE TABLE IF NOT EXISTS `tb_surat_keterangan_usaha` (
`id_surat` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `nik` int(11) NOT NULL,
  `keperluan` varchar(1000) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `tb_surat_keterangan_usaha`
--

INSERT INTO `tb_surat_keterangan_usaha` (`id_surat`, `nama`, `jabatan`, `nik`, `keperluan`) VALUES
(1, 'prasetyo singgih laksono', 'Lurah', 12421, 'tes');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_surat_masuk`
--

CREATE TABLE IF NOT EXISTS `tb_surat_masuk` (
`no_surat` int(11) NOT NULL,
  `pengirim` varchar(100) NOT NULL,
  `ditujukan` varchar(100) NOT NULL,
  `tgl_surat` varchar(100) NOT NULL,
  `perihal` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  `nip` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_surat_pengantar_domisili`
--

CREATE TABLE IF NOT EXISTS `tb_surat_pengantar_domisili` (
`id_surat` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `nik` int(11) NOT NULL,
  `keperluan` varchar(1000) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `tb_surat_pengantar_domisili`
--

INSERT INTO `tb_surat_pengantar_domisili` (`id_surat`, `nama`, `jabatan`, `nik`, `keperluan`) VALUES
(1, 'prasetyo singgih laksono', 'Lurah', 12421, 'tes'),
(2, 'prasetyo singgih laksono', 'Lurah', 12421, 'tes');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_surat_pengantar_kk`
--

CREATE TABLE IF NOT EXISTS `tb_surat_pengantar_kk` (
`id_surat` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `nik` int(11) NOT NULL,
  `keperluan` varchar(1000) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `tb_surat_pengantar_kk`
--

INSERT INTO `tb_surat_pengantar_kk` (`id_surat`, `nama`, `jabatan`, `nik`, `keperluan`) VALUES
(1, 'prasetyo singgih laksono', 'Lurah', 12421, 'cek'),
(2, 'prasetyo singgih laksono', 'Lurah', 12421, 'cek');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_surat_pengantar_ktp`
--

CREATE TABLE IF NOT EXISTS `tb_surat_pengantar_ktp` (
`id_surat` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `nik` int(11) NOT NULL,
  `keperluan` varchar(1000) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `tb_surat_pengantar_ktp`
--

INSERT INTO `tb_surat_pengantar_ktp` (`id_surat`, `nama`, `jabatan`, `nik`, `keperluan`) VALUES
(1, 'singgih', 'Lurah', 12421, 'cek'),
(2, 'prasetyo singgih laksono', 'Lurah', 12421, 'cek'),
(3, 'prasetyo singgih laksono', 'Lurah', 12421, 'cek');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_surat_pengesahan_kredit_bank`
--

CREATE TABLE IF NOT EXISTS `tb_surat_pengesahan_kredit_bank` (
`id_surat` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `nik` int(11) NOT NULL,
  `keperluan` varchar(1000) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `tb_surat_pengesahan_kredit_bank`
--

INSERT INTO `tb_surat_pengesahan_kredit_bank` (`id_surat`, `nama`, `jabatan`, `nik`, `keperluan`) VALUES
(1, 'prasetyo singgih laksono', 'Lurah', 12421, 'tes');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_surat_pengesahan_riwayat_hidup`
--

CREATE TABLE IF NOT EXISTS `tb_surat_pengesahan_riwayat_hidup` (
`id_surat` int(11) NOT NULL,
  `nama` int(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `nik` int(11) NOT NULL,
  `keperluan` varchar(1000) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `tb_surat_pengesahan_riwayat_hidup`
--

INSERT INTO `tb_surat_pengesahan_riwayat_hidup` (`id_surat`, `nama`, `jabatan`, `nik`, `keperluan`) VALUES
(1, 0, 'Lurah', 12421, 'tes'),
(2, 0, 'Lurah', 12421, 'tes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_file`
--
ALTER TABLE `tb_file`
 ADD PRIMARY KEY (`id_file`), ADD KEY `no_pengajuan` (`no_pengajuan`);

--
-- Indexes for table `tb_file_persyaratan`
--
ALTER TABLE `tb_file_persyaratan`
 ADD PRIMARY KEY (`id_file`);

--
-- Indexes for table `tb_jenis_surat`
--
ALTER TABLE `tb_jenis_surat`
 ADD PRIMARY KEY (`id_jenis`), ADD KEY `id_jenis` (`id_jenis`);

--
-- Indexes for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
 ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `tb_penduduk`
--
ALTER TABLE `tb_penduduk`
 ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `tb_pengajuan`
--
ALTER TABLE `tb_pengajuan`
 ADD PRIMARY KEY (`no_pengajuan`), ADD KEY `nik` (`nik`);

--
-- Indexes for table `tb_surat_kelakuan_baik`
--
ALTER TABLE `tb_surat_kelakuan_baik`
 ADD PRIMARY KEY (`id_surat`), ADD KEY `nik` (`nik`);

--
-- Indexes for table `tb_surat_keluar`
--
ALTER TABLE `tb_surat_keluar`
 ADD KEY `no_surat_keluar` (`no_surat_keluar`,`nip`,`nik`), ADD KEY `nip` (`nip`), ADD KEY `nik` (`nik`);

--
-- Indexes for table `tb_surat_keterangan_lahir`
--
ALTER TABLE `tb_surat_keterangan_lahir`
 ADD PRIMARY KEY (`id_surat`), ADD KEY `nik_pengaju` (`nik_pengaju`,`nik_ayah`,`nik_ibu`);

--
-- Indexes for table `tb_surat_keterangan_pas_jalan`
--
ALTER TABLE `tb_surat_keterangan_pas_jalan`
 ADD PRIMARY KEY (`id_surat`), ADD KEY `nik` (`nik`);

--
-- Indexes for table `tb_surat_keterangan_pindah`
--
ALTER TABLE `tb_surat_keterangan_pindah`
 ADD PRIMARY KEY (`id_surat`), ADD KEY `nik` (`nik`);

--
-- Indexes for table `tb_surat_keterangan_usaha`
--
ALTER TABLE `tb_surat_keterangan_usaha`
 ADD PRIMARY KEY (`id_surat`), ADD KEY `nik` (`nik`);

--
-- Indexes for table `tb_surat_masuk`
--
ALTER TABLE `tb_surat_masuk`
 ADD PRIMARY KEY (`no_surat`), ADD KEY `nip` (`nip`);

--
-- Indexes for table `tb_surat_pengantar_domisili`
--
ALTER TABLE `tb_surat_pengantar_domisili`
 ADD PRIMARY KEY (`id_surat`), ADD KEY `nik` (`nik`);

--
-- Indexes for table `tb_surat_pengantar_kk`
--
ALTER TABLE `tb_surat_pengantar_kk`
 ADD PRIMARY KEY (`id_surat`), ADD KEY `nik` (`nik`);

--
-- Indexes for table `tb_surat_pengantar_ktp`
--
ALTER TABLE `tb_surat_pengantar_ktp`
 ADD PRIMARY KEY (`id_surat`), ADD KEY `nik` (`nik`);

--
-- Indexes for table `tb_surat_pengesahan_kredit_bank`
--
ALTER TABLE `tb_surat_pengesahan_kredit_bank`
 ADD PRIMARY KEY (`id_surat`), ADD KEY `nik` (`nik`);

--
-- Indexes for table `tb_surat_pengesahan_riwayat_hidup`
--
ALTER TABLE `tb_surat_pengesahan_riwayat_hidup`
 ADD PRIMARY KEY (`id_surat`), ADD KEY `nik` (`nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_file`
--
ALTER TABLE `tb_file`
MODIFY `id_file` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_file_persyaratan`
--
ALTER TABLE `tb_file_persyaratan`
MODIFY `id_file` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_jenis_surat`
--
ALTER TABLE `tb_jenis_surat`
MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_pengajuan`
--
ALTER TABLE `tb_pengajuan`
MODIFY `no_pengajuan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_surat_kelakuan_baik`
--
ALTER TABLE `tb_surat_kelakuan_baik`
MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `tb_surat_keterangan_lahir`
--
ALTER TABLE `tb_surat_keterangan_lahir`
MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_surat_keterangan_pas_jalan`
--
ALTER TABLE `tb_surat_keterangan_pas_jalan`
MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_surat_keterangan_pindah`
--
ALTER TABLE `tb_surat_keterangan_pindah`
MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_surat_keterangan_usaha`
--
ALTER TABLE `tb_surat_keterangan_usaha`
MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_surat_masuk`
--
ALTER TABLE `tb_surat_masuk`
MODIFY `no_surat` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_surat_pengantar_domisili`
--
ALTER TABLE `tb_surat_pengantar_domisili`
MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_surat_pengantar_kk`
--
ALTER TABLE `tb_surat_pengantar_kk`
MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_surat_pengantar_ktp`
--
ALTER TABLE `tb_surat_pengantar_ktp`
MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_surat_pengesahan_kredit_bank`
--
ALTER TABLE `tb_surat_pengesahan_kredit_bank`
MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_surat_pengesahan_riwayat_hidup`
--
ALTER TABLE `tb_surat_pengesahan_riwayat_hidup`
MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_file`
--
ALTER TABLE `tb_file`
ADD CONSTRAINT `tb_file_ibfk_1` FOREIGN KEY (`no_pengajuan`) REFERENCES `tb_pengajuan` (`no_pengajuan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_pengajuan`
--
ALTER TABLE `tb_pengajuan`
ADD CONSTRAINT `tb_pengajuan_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `tb_penduduk` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_surat_keluar`
--
ALTER TABLE `tb_surat_keluar`
ADD CONSTRAINT `tb_surat_keluar_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `tb_pegawai` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `tb_surat_keluar_ibfk_2` FOREIGN KEY (`nik`) REFERENCES `tb_penduduk` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `tb_surat_keluar_ibfk_3` FOREIGN KEY (`no_surat_keluar`) REFERENCES `tb_jenis_surat` (`id_jenis`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_surat_masuk`
--
ALTER TABLE `tb_surat_masuk`
ADD CONSTRAINT `tb_surat_masuk_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `tb_pegawai` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
