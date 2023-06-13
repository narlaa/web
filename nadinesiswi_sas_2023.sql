-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2023 at 02:57 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nadinesiswi_sas_2023`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `nama` varchar(30) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `profesi` varchar(255) NOT NULL,
  `about` text NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `about_footer` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`nama`, `judul`, `profesi`, `about`, `alamat`, `about_footer`, `foto`) VALUES
('NADINE AMBRIANI', 'MARK GF', 'WEB DEVELOPMENT AND NETWORKING', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam,\r\n            ratione quasi nam itaque repellendus facilis. Alias reiciendis iste\r\n            nostrum explicabo laboriosam culpa, pariatur illum nihil assumenda,\r\n            fuga impedit incidunt quis possimus quam, nulla delectus quos\r\n            suscipit fugit quae saepe provident. Nisi sunt dolorum quaerat ab.\r\n            At quod aut dolores neque facilis, provident ipsam corrupti! Minima\r\n            minus voluptas officiis ipsa, numquam, aspernatur porro velit\r\n            blanditiis cum error doloremque quis reprehenderit ducimus accusamus\r\n            sed nihil provident quaerat suscipit? Eius voluptatum libero\r\n            excepturi at ut eveniet, illum deserunt ipsam quisquam voluptatem\r\n            consectetur, aperiam error. Quaerat nulla praesentium soluta aperiam\r\n            dolorem quam nemo laboriosam nesciunt sint, suscipit ipsam iusto\r\n            voluptas ad dignissimos eum. Amet vitae quam officia sapiente natus\r\n            veritatis molestias reiciendis officiis aperiam dolor? Sapiente cum\r\n            error sint rem odio in aperiam tempora, officiis maxime voluptatem\r\n            sunt minus inventore magni qui nihil libero nesciunt culpa iste\r\n            dolores molestiae sequi tenetur perferendis! Commodi veniam labore\r\n            recusandae sit molestiae iste omnis, voluptas animi, dolores eaque\r\n            et. Ab facere pariatur a labore, incidunt quaerat, optio\r\n            voluptatibus atque quas soluta sequi quos! Facere nostrum rem modi\r\n            ipsum quas at rerum, animi quo quae exercitationem voluptatum minima\r\n            reprehenderit illum libero ullam? A corrupti illum culpa nulla dicta\r\n            debitis inventore aliquid libero repellendus. Deleniti voluptas\r\n            quasi beatae possimus expedita commodi esse. Quaerat possimus ea,\r\n            veritatis tempora unde modi necessitatibus dolorem doloribus\r\n            exercitationem pariatur molestiae dicta, voluptatum dolorum aperiam\r\n            fugiat corrupti error consectetur eos culpa inventore. Mollitia\r\n            nulla in vero similique quod sequi voluptate dolore pariatur\r\n            incidunt placeat, repellat, quos laborum libero deleniti expedita,\r\n            repudiandae quasi? Officiis officia ducimus illo quo, odio dolore?\r\n            Nemo aperiam facilis esse a quibusdam iusto distinctio facere,\r\n            pariatur ipsum consequatur ducimus amet voluptatem. Inventore sed\r\n            doloribus suscipit, est excepturi voluptates. Soluta laboriosam\r\n            inventore debitis deserunt laborum aliquid, dolore doloribus saepe\r\n            quidem quis, voluptas, facere officiis?', 'Kp.Pondok Manggis, Bogor-Cibinong', 'ujian praktek sumatif akhir semester genap tahun ajaran 2022-2023. Mata pelajaran pemrograman dasar', 'me.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hubungi_saya`
--

CREATE TABLE `hubungi_saya` (
  `id` bigint(20) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hubungi_saya`
--

INSERT INTO `hubungi_saya` (`id`, `nama_lengkap`, `email`, `no_telp`, `pesan`) VALUES
(0, 'gravitasi', 'indah_rb@gmail.com', '098765435678', 'hii');

-- --------------------------------------------------------

--
-- Table structure for table `portofolio`
--

CREATE TABLE `portofolio` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `portofolio`
--

INSERT INTO `portofolio` (`id`, `judul`, `deskripsi`, `foto`) VALUES
(5, 'desain1', 'warna ungu', '1.jpeg'),
(24, 'desain2', 'warna ungu', '2.jpeg'),
(25, 'desain3', 'warna ungu', '3.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`nama`);

--
-- Indexes for table `hubungi_saya`
--
ALTER TABLE `hubungi_saya`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portofolio`
--
ALTER TABLE `portofolio`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
