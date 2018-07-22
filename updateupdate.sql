-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Jul 2018 pada 09.59
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bimbingankonseling`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_guru`
--

CREATE TABLE `t_guru` (
  `id_guru` varchar(11) NOT NULL,
  `gru_nama` varchar(100) NOT NULL,
  `gru_alamat` varchar(100) NOT NULL,
  `gru_nohp` varchar(13) NOT NULL,
  `gru_jabatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_guru`
--

INSERT INTO `t_guru` (`id_guru`, `gru_nama`, `gru_alamat`, `gru_nohp`, `gru_jabatan`) VALUES
('593209150', 'Ikiw', 'Bubat', '08212345678', 'Guru'),
('A1', 'ikwi', 'bubat', '01238123', 'Guru'),
('A2', 'Arip', 'Aceg', '23', 'Alig');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_murid`
--

CREATE TABLE `t_murid` (
  `nis` varchar(11) NOT NULL,
  `id_wali` varchar(11) NOT NULL,
  `mrd_nama` varchar(100) NOT NULL,
  `mrd_kelas` varchar(20) NOT NULL,
  `mrd_alamat` varchar(100) NOT NULL,
  `mrd_nohp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_murid`
--

INSERT INTO `t_murid` (`nis`, `id_wali`, `mrd_nama`, `mrd_kelas`, `mrd_alamat`, `mrd_nohp`) VALUES
('1232132', 'asd', 'asd', 'asd', 'asd', '21321321');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_pelanggaran`
--

CREATE TABLE `t_pelanggaran` (
  `id_pelanggaran` varchar(11) NOT NULL,
  `id_guru` varchar(11) NOT NULL,
  `nis` varchar(11) NOT NULL,
  `plg_jenis` varchar(11) NOT NULL,
  `plg_keterangan` varchar(100) NOT NULL,
  `plg_tgl` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_user`
--

CREATE TABLE `t_user` (
  `id_user` varchar(11) NOT NULL,
  `username` varchar(11) NOT NULL,
  `password` varchar(11) NOT NULL,
  `level` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_user`
--

INSERT INTO `t_user` (`id_user`, `username`, `password`, `level`) VALUES
('593209150', 'ikiw', 'ikiw', 'Guru'),
('asd', 'asd', 'asd', 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_wali`
--

CREATE TABLE `t_wali` (
  `id_wali` varchar(11) NOT NULL,
  `wli_nama` varchar(100) NOT NULL,
  `wli_alamat` varchar(100) NOT NULL,
  `wli_nohp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_wali`
--

INSERT INTO `t_wali` (`id_wali`, `wli_nama`, `wli_alamat`, `wli_nohp`) VALUES
('asd', 'bapak ikiwi', 'asd', '08546544');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `t_guru`
--
ALTER TABLE `t_guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indeks untuk tabel `t_murid`
--
ALTER TABLE `t_murid`
  ADD PRIMARY KEY (`nis`),
  ADD KEY `id_wali` (`id_wali`);

--
-- Indeks untuk tabel `t_pelanggaran`
--
ALTER TABLE `t_pelanggaran`
  ADD PRIMARY KEY (`id_pelanggaran`),
  ADD KEY `id_guru` (`id_guru`),
  ADD KEY `nis` (`nis`);

--
-- Indeks untuk tabel `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `t_wali`
--
ALTER TABLE `t_wali`
  ADD PRIMARY KEY (`id_wali`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `t_murid`
--
ALTER TABLE `t_murid`
  ADD CONSTRAINT `t_murid_ibfk_1` FOREIGN KEY (`id_wali`) REFERENCES `t_wali` (`id_wali`);

--
-- Ketidakleluasaan untuk tabel `t_pelanggaran`
--
ALTER TABLE `t_pelanggaran`
  ADD CONSTRAINT `t_pelanggaran_ibfk_1` FOREIGN KEY (`id_guru`) REFERENCES `t_guru` (`id_guru`),
  ADD CONSTRAINT `t_pelanggaran_ibfk_2` FOREIGN KEY (`nis`) REFERENCES `t_murid` (`nis`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
