-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Okt 2021 pada 13.00
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kampus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` char(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `prodi` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `prodi`, `status`) VALUES
('3201916001', 'Muhammad Dhafa Rinaldi', 'Teknik Informatika', 'Aktif'),
('3201916002', 'Rizki Fatur Rahman', 'Teknik Informatika', 'Aktif'),
('3201916003', 'Chika Febriyana', 'Teknik Informatika', 'Aktif'),
('3201916004', 'Robih Ahmad Yazid', 'Teknik Informatika', 'Aktif'),
('3201916005', 'Tommy Ryan Dwiputra', 'Teknik Informatika', 'Aktif'),
('3201916006', 'Marissa Audrey Muharani Putri', 'Teknik Informatika', 'Aktif'),
('3201916008', 'Yuni Asyifa', 'Teknik Informatika', 'Aktif'),
('3201916009', 'Rizki Ananda Hidayatullah', 'Teknik Informatika', 'Aktif'),
('3201916010', 'Alnisa Putri Candra Kirana', 'Teknik Informatika', 'Aktif'),
('3201916011', 'Ergiawan', 'Teknik Informatika', 'Aktif'),
('3201916013', 'Anjeline Oktasya Gustin', 'Teknik Informatika', 'Aktif'),
('3201916018', 'Mochtar Muhammad Faisal', 'Teknik Informatika', 'Aktif'),
('3201916022', 'Selibitri', 'Teknik Informatika', 'Aktif'),
('3201916023', 'Irvan Supriyatna', 'Teknik Informatika', 'Aktif'),
('3201916024', 'Ericko Paradika Dinar', 'Teknik Informatika', 'Aktif'),
('3201916026', 'Adinda Rizka Fadlila', 'Teknik Informatika', 'Aktif'),
('3201916027', 'Nur Oktavianti Ayu Putri', 'Teknik Informatika', 'Aktif'),
('3201916028', 'Akmal Akbar Siregar', 'Teknik Informatika', 'Aktif'),
('3201916029', 'Widho Almayda Saputra', 'Teknik Informatika', 'Aktif'),
('3201916088', 'Vira Yunita', 'Teknik Informatika', 'Aktif'),
('3201916095', 'Sigit Syahsafir', 'Teknik Informatika', 'Aktif'),
('3201916099', 'Septi Ekaputri', 'Teknik Informatika', 'Aktif'),
('3201916102', 'Alfonsius Liguori Pratama', 'Teknik Informatika', 'Aktif'),
('3201916103', 'Tiara Rizqi Shabirina', 'Teknik Informatika', 'Aktif'),
('3201916104', 'Rendi Rifaldi', 'Teknik Informatika', 'Aktif'),
('3201916121', 'Ridho', 'Teknik Informatika', 'Aktif'),
('3201916123', 'Andi Makkarumpa', 'Teknik Informatika', 'Aktif'),
('asasas', '234234', 'Teknik Elektronika', 'Aktif'),
('dgdfg', '434535', 'Teknik Elektronika', 'Aktif');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
