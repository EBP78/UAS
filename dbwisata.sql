-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2022 at 03:35 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbwisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` int(11) NOT NULL,
  `adminName` varchar(255) NOT NULL,
  `adminEmail` varchar(255) NOT NULL,
  `adminPassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `adminName`, `adminEmail`, `adminPassword`) VALUES
(1, 'Edward BP', 'edwardbrainp78@gmail.com', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'Admin Main UAS', 'uas@webdev.com', 'ee460938559a0d5bcae5fca8e1faa2f8'),
(3, 'bambang', 'a@a.a', '47bce5c74f589f4867dbd57e9ca9f808'),
(4, 'beluga', 'beluga@gmail.com', '202cb962ac59075b964b07152d234b70'),
(5, 'admin', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3'),
(6, 'coba', 'coba@coba.com', 'c3ec0f7b054e729c5a716c8125839829'),
(7, 'test', 'test@gmail.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `areaID` char(5) NOT NULL,
  `areaNama` varchar(255) NOT NULL,
  `areaWilayah` varchar(255) NOT NULL,
  `areaKeterangan` varchar(255) NOT NULL,
  `provinsiID` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`areaID`, `areaNama`, `areaWilayah`, `areaKeterangan`, `provinsiID`) VALUES
('AR01', 'Curup', 'Bengkulu', 'daerah yang berjarak 2 jam perjalanan dari bandara bengkulu', 'PR01'),
('AR02', 'Lebong', 'Bengkulu', 'Daerah yang berjarak 4 jam perlanan dari bandara bengkulu.', 'PR01'),
('AR03', 'Kepahiang', 'Bengkulu', 'Daerah yang berjarak 1,5 jam perlanan dari bandara bengkulu.', 'PR01'),
('AR05', 'Kota Bengkulu', 'Bengkulu', 'sangat dekat dengan pantai', 'PR01'),
('AR06', 'Palembang', 'Palembang', 'di palemabang di provinsi sumatra selatan', 'PR02');

-- --------------------------------------------------------

--
-- Table structure for table `destinasi`
--

CREATE TABLE `destinasi` (
  `destinasiID` char(5) NOT NULL,
  `destinasiNama` varchar(255) NOT NULL,
  `destinasiAlamat` varchar(255) NOT NULL,
  `kategoriID` char(5) NOT NULL,
  `areaID` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `destinasi`
--

INSERT INTO `destinasi` (`destinasiID`, `destinasiNama`, `destinasiAlamat`, `kategoriID`, `areaID`) VALUES
('WS001', 'Kebun Teh Kabawetan', 'Jl. Kabawetan, Tangsi Baru, Kaba Wetan, Kabupaten Kepahiang, Bengkulu 39372', 'WK01', 'AR03'),
('WS002', 'Suban Air Panas', 'Cawang Baru, Curup Tim., Kabupaten Rejang Lebong, Bengkulu 39119', 'WK01', 'AR01'),
('WS003', 'Pantai Panjang', 'Kecamatan Ratu Agung, Kecamatan Teluk Segara, & Kecamatan Ratu Samban.', 'WK01', 'AR05'),
('WS004', 'Bukit Kaba', 'Dari Kota Curup, gunung ini berada di sebelah tenggara dengan jarak sekitar 15 km', 'WK01', 'AR01'),
('WS005', 'Masjid Jamik Bengkulu', 'Jl. Letjend Suprapto, Tengah Padang, Kec. Ratu Samban, Kota Bengkulu, Bengkulu 38222', 'WK03', 'AR05'),
('WS006', 'jembatan ampera', 'jembatan ampera', 'WK02', 'AR06');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `hotelID` char(5) NOT NULL,
  `hotelName` varchar(255) NOT NULL,
  `hotelAlamat` text NOT NULL,
  `hotelHarga` int(11) NOT NULL,
  `wifi` char(1) NOT NULL,
  `ac` char(1) NOT NULL,
  `restoran` char(1) NOT NULL,
  `kolamRenang` char(1) NOT NULL,
  `lift` char(1) NOT NULL,
  `parkir` char(1) NOT NULL,
  `link` text NOT NULL,
  `kecamatanID` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`hotelID`, `hotelName`, `hotelAlamat`, `hotelHarga`, `wifi`, `ac`, `restoran`, `kolamRenang`, `lift`, `parkir`, `link`, `kecamatanID`) VALUES
('HT01', 'Golden Rich 88', 'Jl. Iskandar Ong, Talang Rimbo Baru, Curup Tengah, Kabupaten Rejang Lebong, Bengkulu', 350000, 'Y', 'Y', 'Y', 'Y', 'N', 'Y', 'https://www.traveloka.com/id-id/hotel/indonesia/golden-rich-88-hotel-3000020014221', 'KC01'),
('HT02', 'Musrel Alphard ', 'Jl. Ahmad Yani Kelurahan No.38, Talang Ulu, Curup Tim., Kabupaten Rejang Lebong, Bengkulu 39125', 300000, 'Y', 'Y', 'Y', 'Y', 'N', 'Y', 'https://hotel-musrel-alphard-curup.business.site/', 'KC01'),
('HT03', 'Dioba Gite', 'Jl Nur Arifin, Pelabuhan Baru, Curup Tengah, Kabupaten Rejang Lebong, Bengkulu 39115', 215000, 'Y', 'Y', 'Y', 'Y', 'N', 'Y', 'https://id.trip.com/hotels/central-curup-hotel-detail-47099764/hotel-dioba-gite/', 'KC01'),
('HT04', 'Santika', 'Jl. Jati No.45, Sawah Lebar, Kec. Ratu Agung, Kota Bengkulu, Bengkulu 39225', 750000, 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'https://www.agoda.com/id-id/hotel-santika-bengkulu/hotel/bengkulu-id.html?finalPriceView=1&isShowMobileAppPrice=false&cid=1731353&numberOfBedrooms=&familyMode=false&adults=2&children=0&rooms=1&maxRooms=0&checkIn=2021-12-19&isCalendarCallout=false&childAges=&numberOfGuest=0&missingChildAges=false&travellerType=-1&showReviewSubmissionEntry=false&currencyCode=IDR&isFreeOccSearch=false&isCityHaveAsq=false&los=1&searchrequestid=24aac5cb-dab4-4f9a-83d9-ffa2ba6dac52', 'KC02'),
('HT05', 'Mercure', 'Jl. S. Parman No.27, Padang Jati, Kec. Ratu Samban, Kota Bengkulu, Bengkulu 38227', 850000, 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'https://www.traveloka.com/id-id/hotel/indonesia/mercure-bengkulu-9000000687564', 'KC03'),
('HT06', 'baru buka', 'belom tau', 300000, 'Y', 'N', 'Y', 'Y', 'N', 'N', 'belomtau.com', 'KC01');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `imageID` char(5) NOT NULL,
  `imageName` varchar(255) NOT NULL,
  `destinasiID` char(5) NOT NULL,
  `File` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`imageID`, `imageName`, `destinasiID`, `File`) VALUES
('IM001', 'suban air panas 1', 'WS002', 'suban-1.jpeg'),
('IM002', 'suban air panas 2', 'WS002', 'suban-2.jpg'),
('IM003', 'suban air panas 3', 'WS002', 'suban-3.jpg'),
('IM004', 'bukit kaba 1', 'WS004', 'bukit_kaba_1.jpg'),
('IM005', 'kebun teh kabawetan', 'WS001', 'kebun-teh-1.jpg'),
('IM006', 'pantai panjang 1', 'WS003', 'pantai-panjang-1.jpg'),
('IM007', 'masjid jamik bengkulu 1', 'WS005', 'Masjid-Jamik-Bengkulu.jpg'),
('IM008', 'suban air panas 4', 'WS002', 'suban-4.jpg'),
('IM009', 'jembatan ampera 1', 'WS006', 'jembatan-ampera-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `image_kuliner`
--

CREATE TABLE `image_kuliner` (
  `image_kulinerID` char(5) NOT NULL,
  `imageNama` varchar(255) NOT NULL,
  `restoranID` char(5) NOT NULL,
  `File` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `image_kuliner`
--

INSERT INTO `image_kuliner` (`image_kulinerID`, `imageNama`, `restoranID`, `File`) VALUES
('IK001', 'nasi goreng 1', 'RS02', 'nasi-goreng-1.jpg'),
('IK002', 'ayam geprek 1', 'RS03', 'ayam-geprek-1.jpg'),
('IK003', 'nasi padang 1', 'RS01', 'nasi-padang-1.png'),
('IK04', 'soto 1', 'RS04', 'soto.webp');

-- --------------------------------------------------------

--
-- Table structure for table `kabupaten`
--

CREATE TABLE `kabupaten` (
  `kabupatenID` char(5) NOT NULL,
  `kabupatenNama` varchar(255) NOT NULL,
  `kabupatenLuas` int(11) NOT NULL,
  `ProvinsiID` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kabupaten`
--

INSERT INTO `kabupaten` (`kabupatenID`, `kabupatenNama`, `kabupatenLuas`, `ProvinsiID`) VALUES
('KB01', 'Rejang Lebong', 1640, 'PR01'),
('KB02', 'Bengkulu Tengah', 1223, 'PR01'),
('KB03', 'Kota Bengkulu', 152, 'PR01');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `kategoriID` char(5) NOT NULL,
  `kategoriNama` varchar(255) NOT NULL,
  `KategoriKeterangan` varchar(255) NOT NULL,
  `KategoriReferensi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kategoriID`, `kategoriNama`, `KategoriKeterangan`, `KategoriReferensi`) VALUES
('WK01', 'Alam', 'Wisata dengan pemandangan pantai dan gunung.', 'Buku'),
('WK02', 'Budaya', 'Wisata sejarah, peninggalan masa lalu.', 'Buku'),
('WK03', 'Religi', 'Wisata dengan topik religi yang akan menenangkan hati.', 'Kitab Suci');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `kecamatanID` char(5) NOT NULL,
  `kecamatanNama` varchar(255) NOT NULL,
  `kecamatanLuas` int(11) NOT NULL,
  `kabupatenID` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`kecamatanID`, `kecamatanNama`, `kecamatanLuas`, `kabupatenID`) VALUES
('KC01', 'Curup', 4, 'KB01'),
('KC02', 'Ratu Agung', 12, 'KB03'),
('KC03', 'Ratu Samban', 30, 'KB03');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `eventKode` char(5) NOT NULL,
  `eventNama` varchar(255) NOT NULL,
  `kabupatenKode` char(5) NOT NULL,
  `eventKet` text NOT NULL,
  `eventMulai` date NOT NULL,
  `eventSelesai` date NOT NULL,
  `eventPoster` text NOT NULL,
  `eventSumber` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`eventKode`, `eventNama`, `kabupatenKode`, `eventKet`, `eventMulai`, `eventSelesai`, `eventPoster`, `eventSumber`) VALUES
('EV001', 'Berendam Air Panas Bersama Keluarga', 'KB01', 'berendam air panas di suban air panas yang menyehatkan dan menyegarkan tubuh bersama keluarga tercinta. berendam air panas di suban sangat bermanfaat karena air panasnya berasal dari sumber air panas asli dari pegunungan.', '2021-11-10', '2021-11-13', 'air-panas-keluarga.webp', 'suban_air_panas'),
('EV002', 'Berkunjung Ke Masjid Tertua di Bengkulu.', 'KB03', 'Berkunjung ke masjid jamik bengkulu yang merupakan masjid tertua di bengkulu yang langsung di design oleh soekarno semasa pengasingannya. design langsung oleh sang presiden pertama indonesia memanglah luar biasa. membuat pengalaman berkunjung yang luar biasa dengan tema religi sekaligus sejarah.', '2021-11-02', '2021-11-05', 'melihat-masjit-tertua-bengkulu.jpg', 'bengkuluPost'),
('EV003', 'Melihat keindahan Alam Air Terjun', 'KB01', 'kegiatan refreshing bersama alam yang menabjubkan. air terjun yang indah suasana yang damai akan disajikan pada kegiatan ini untuk menghilangkan penat setelah berkerja keras setiap hari. nikmati liburan anda bersama kami dengan melihat air terjun yang indah.', '2021-12-23', '2021-12-25', 'melihat-air-terjun.jpg', 'rejang_lebong_post');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `komentarID` int(11) NOT NULL,
  `komentarName` varchar(255) NOT NULL,
  `komentarEmail` varchar(255) NOT NULL,
  `komentarContent` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`komentarID`, `komentarName`, `komentarEmail`, `komentarContent`) VALUES
(1, 'bukan Edward', 'bukanedward@gmail.com', 'Wah saya sangat suka dengan webnya. tampilannya menarik dan mudah untuk diakses!!! Mantap!!'),
(2, 'Bambang', 'bambang@gmail.com', 'wah saya baru tau ada banyak sekali wisata indonesia yang belum saya ketahui seperti suban air panas. saya baru tau indonesia ada sumber air panas alami.'),
(4, 'siti', 'asd@asd', 'Pertamaxx'),
(6, 'Tono', 'tono@tono.com', 'Halo bang\r\n'),
(8, 'coba', 'cob@gmail.com', 'coba !!!');

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `mobilID` char(5) NOT NULL,
  `mobilNama` varchar(255) NOT NULL,
  `lamaPerjalanan` varchar(255) NOT NULL,
  `biaya` int(11) NOT NULL,
  `kabupatenAsal` char(5) NOT NULL,
  `kabupatenTujuan` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`mobilID`, `mobilNama`, `lamaPerjalanan`, `biaya`, `kabupatenAsal`, `kabupatenTujuan`) VALUES
('MB01', 'Mobil Bengkulu Jaya', '2 jam', 75000, 'KB01', 'KB02'),
('MB02', 'Curup Jaya', '2 jam', 50000, 'KB01', 'KB02'),
('MB03', 'Mobil Om Amin', '1,5 jam', 100000, 'KB02', 'KB01');

-- --------------------------------------------------------

--
-- Table structure for table `news_destinasi`
--

CREATE TABLE `news_destinasi` (
  `news_destinasiID` char(5) NOT NULL,
  `newsHead` text NOT NULL,
  `newsContent` text NOT NULL,
  `newsDate` date DEFAULT NULL,
  `destinasiID` char(5) NOT NULL,
  `imageID` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news_destinasi`
--

INSERT INTO `news_destinasi` (`news_destinasiID`, `newsHead`, `newsContent`, `newsDate`, `destinasiID`, `imageID`) VALUES
('NW01', 'Suban Air Panas Tetap Ramai Walaupun ditengah Pandemi COVID-19', 'Meski masih dalam suasana pandemi Covid-19, namun sejumlah lokasi objek wisata yang ada di Kabupaten Rejang Lebong saat ini masih ramai dikunjungi wisatawan baik pengunjung lokal maupun luar daerah. Seperti objek wisata pemandian Suban Air Panas, Danau Mas Harun Bastari, hingga sejumlah taman bunga di Kecamatan Selupu Rejang. Ramai nya pengunjung di sejumlah objek wisata ini lantaran memang ini tempat favorit dari sejumlah kalangan masyarakat. “Kalau hari libur biasanya saya ajakin keluarga untuk liburan sambil refreshing otak,” kata Abdul (32) salah seorang pengunjung yang membawa keluarganya dari Kabupaten Bengkulu Selatan.\r\n\r\nRead More at: Objek Wisata Tetap Ramai di Tengah Pandemi Covid-19 - Bengkulu Ekspress Rejang Lebong \r\n\r\nAbdul sengaja berlibur bersama keluarga ke Kabupaten Rejang Lebong untuk melihat wisata Danau Mas, Suban Air Panas, dan Taman Bunga. “Saya datang kesini karena ajakan dari anak saya yang sedang ingin ke pemandian air panas sambil jalan jalan ke taman bunga,” ungkapnya. Hal senada juga di sampaikan Purwanto (47) pengunjung dari Kota Lubuk Linggau. Menurutnya, selain udara yang dingin dan segar, Rejang Lebong memang menjadi salah satu tujuan wisata di Provinsi Bengkulu. “Belum lengkap kalau belum berlibur ke Curup, selain bersilaturahmi ke tempat keluarga kami juga mengunjungi sejumlah objek wisata yang ada disini. Walaupun masih dalam masa pandemi tetapi kami masih menjaga protokol kesehatan,” tuturnya. Sementara itu, salah satu pengelola wisata Suban Air Panas, Robert (37) mengaku, di kawasan Suban Air Panas ini hampir setiap hari selalu dikunjungi wisatawan lokal maupun luar daerah terutama pada hari sabtu dan minggu. “Di banding hari kerja, hari libur wisatawan lebih ramai mengunjungi tempat ini, biasanya juga ada yang membawa keluarga besarnya,” katanya.\r\n\r\nRead More at: Objek Wisata Tetap Ramai di Tengah Pandemi Covid-19 - Bengkulu Ekspress Rejang Lebong ', '2021-11-15', 'WS002', 'IM001'),
('NW02', 'Wisata ke Bukit Kaba Bengkulu, Ini Detail Tarif Tiket Masuk dan Aksesnya', 'Destinasi wisata Bukit Kaba di Desa Sumber Urip, Kecamatan Selupu Rejang, Kabupaten Rejang Lebong, Provinsi Bengkulu, sudah kembali buka pada 17 Agustus 2020. Sejak pandemi Covid-19 merebak, taman wisata alam ini tutup selama lima bulan.\r\n\r\nPetugas loket Taman Wisata Alam Bukit Kaba, Fajar Ahmadi mengatakan seiring waktu, jumlah pengunjung sudah mulai bertambah saat ini. \"Meski belum seramai dulu sebelum wabah corona,\" kata Fajar pada Minggu, 15 November 2020.\r\n\r\nWisatawan yang datang ke Taman Wisata Alam Bukit Kaba, menurut dia, sebagian besar berasal dari berbagai kabupaten/kota di Provinsi Bengkulu dan sejumlah daerah di Provinsi Sumatera Selatan, seperti Kota Palembang, Lubuk Linggau, dan Musi Rawas Utara. Mereka biasanya datang untuk menikmati suasana alam atau mendaki.\r\n\r\nUntuk sementara ini, menurut Fajar, wisatawan hanya boleh mendaki atau hiking saja. \"Belum boleh kemping atau berkemah di sini,\" kata dia. Musababnya, pengelola Taman Wisata Alam Bukit Kaba juga wajib mengawasi setiap pengunjung agar tetap menerapkan protokol kesehatan guna mencegah penyebaran Covid-19.\r\n\r\nFajar merinci, jumlah pengunjung terbanyak pada Hari Sumpah Pemuda 28 Oktober 2020. Saat itu, sebanyak 208 orang menuju puncak puncak Bukit Kaba sekaligus memperingati Hari Sumpah Pemuda. Sementara pada akhir pekan, jumlah pengunjung Taman Wisata Alam Bukit Kaba sekitar 106 orang.\r\n\r\nAdapun pada hari kerja atau Senin sampai Jumat, hanya ada sepuluh sampai 50 wisatawan yang datang. \"Bahkan pernah tidak ada pengunjung sama sekali,\" katanya.\r\n\r\nMengenai tiket masuk Taman Wisata Alam Bukit Kaba, Fajar mengatakan pengunjung yang datang pada hari Senin sampai Jumat mesti membayar tiket masuk Rp 5.000, Jasa BUMDes Rp 6.500, asuransi kecelakaan Rp 1.000. Wisatawan yang datang berombongan lebih dari 10 orang dikenakan tiket masuk Rp 2.500 per orang, jasa BUMDes Rp 6.500 per orang, dan asuransi kecelakaan Rp 1.000 per orang.\r\n\r\nPada hari libur Nasional dan akhir pekan, tiket Taman Wisata Alam Bukit Kaba dibanderol Rp 7.500 per orang. Sementara rombongan yang datang di hari libur dikenakan biaya Rp 3.750 per orang, jasa BUMDes Rp 6.500 dan asuransi kecelakaan Rp1.000 untuk setiap orang.\r\n\r\nBeda lagi dengan tarif tiket untuk wisatawan mancanegara. Pada hari Senin sampai Jumat, wisatawan mancanegara yang datang ke Taman Wisata Alam Bukit Kaba mesti membayar Rp 100 ribu per orang, jasa BUMDes Rp 6.500, dan asuransi kecelakaan Rp 5.000 per orang. Adapun di hari libur, wisatawan mancanegara membayar tiket sebesar Rp 225 ribu per orang, jasa BUMDes Rp 6.500, dan Rp 5.000 guna asuransi kecelakaan.\r\n\r\nDari Kota Bengkulu, perlu waktu sekitar 2 jam 40 menit berkendara untuk sampai di Taman Wisata Alam Bukit Kaba. Wisatawan yang lelah mendaki dapat memanfaatkan jasa ojek dari kaki bukit sampai ke puncak Bukit Kaba. Tarif ojek Rp 100 ribu untuk naik dan turun. Jika hanya sekali jalan, naik atau turun saja, membayar sekitar Rp 60 ribu.', '2021-11-04', 'WS004', 'IM004'),
('NW03', 'Pagi Sejuk di Kebun Teh Naga Hitam Kabawetan', 'Kabupaten Kepahiang, Bengkulu, menyimpan pesona keindahan alam lewat kebun teh bernama Kabawetan. Perkebunan teh seluas 1.911,7 hektare ini menyajikan hamparan hijaunya dedaunan yang elok dipandang dan sejuk untuk dinikmati, terutama di pagi hari.\r\n\r\nSebuah sensasi pada panorama yang indah dan kesegaran alamnya menawarkan salam pagi ketika berwisata di daerah ini. Udaranya bersih dan sejuk sangat cocok untuk melepas kepenatan pikiran setelah beraktivitas rutin.\r\n\r\nPemandangan di atas kebun teh Kabawetan pun sangat indah. Dari sini, Anda bisa melihat hamparan lembah dan Kota Kepahiang ditambah dengan pemandangan Bukit Barisan yang berbaris kokoh.\r\n\r\n\r\nUntuk mencapai di lokasi kebun teh Kabawetan ini, kita harus menempuh perjalanan selama tiga jam dari pusat Kota Bengkulu. Sepanjang pejalanan menembus sisi Bukit Barisan itu, kita disuguhi panorama hutan hujan alami yang sesekali diselingi tegur sapa yang ramah dari penduduk desa.\r\n\r\nSaat ini perkebunan teh tersebut dikelola dua perusahaan, yakni Taiwan Oolong Tea dan Teh Kabawetan. Ya, kebun ini memang perkebunan penghasil teh oolong, atau yang dalam bahasa Indonesia berarti \'haga hitam\'.\r\n\r\nDalam kebudayaan Tiongkok, naga hitam selalu diidentikkan dengan sesuatu yang baik. Jika teh oolong itu diminum secara rutin, niscaya badan akan terasa bugar dan jauh dari penyakit.\r\n\r\nTokoh masyarakat Kabupaten Kepahiang, Bando Amin C Kader menuturkan, perkebunan ini awalnya bernama N.V.Land Bovus Maatschaapy pada 1925 yang berkantor pusat di Sumatera Selatan.\r\n\r\n\"Pada saat itu yang ditanam di kebun ini hanya kopi dan kina,\" ujar Bando di Kepahiang, Rabu, 8 Februari 2017.\r\n\r\nPada 1933–1936, pihak perusahaan mencoba menanam dan membudidadayakan tanaman teh. Sedangkan, kopi dan kina hingga kini tidak ditanam lagi.\r\n\r\nPabrik teh kemudian didirikan pada 1935 yang lokasinya tidak jauh dari perkebunan ini, tepatnya di Desa Tangsi Baru, Kabawetan dan Kampung Bogor. Di masa pendudukan Jepang, perkebunan ini diambil alih oleh pemerintahan Jepang.\r\n\r\nNamun, perkebunan tersebut masih dikelola dengan baik dengan nama produknya \'teh kabawetan\'. Di zaman kemerdekaan, perkebunan ini lalu diambil alih pemerintah Indonesia, tetapi akhirnya telantar. Pada 1965, perkebunan ini kembali hidup di bawah bendera PT Trisula Ulung Mega Surya.\r\n\r\n\"Perkebunan ini diambil alih oleh Pemda Tingkat I Bengkulu antara tahun 1975-1979, lalu diserahkan oleh Pemda kepada PT Kabawetan dan pada tahun 1980 disewakan pada PTPN XXIII dengan luas lahan keseluruhan 1.911,7 hektare. Setelah itu diserahkan pengelolaannya kepada pihak swasta,\" ujar Bando.\r\n\r\nTeh oolong naga hitam dari Kepahiang ini memiliki mutu yang sangat baik. Namun, hasil produksinya tidak bisa dijumpai di pasar domestik. Seluruh produksi teh oolong ini diekspor ke Taiwan.\r\n\r\nSetiap bulan, kata Bando, sedikitnya satu kontainer teh olahan kering dikirim ke negara tujuan ekspor tersebut melalui Pelabuhan Tanjung Priok Jakarta.\r\n\r\nSetibanya di Taiwan, teh oolong Kepahiang ini akan diberi merek \"Taiwan Oolong Tea\" dan sama sekali tidak ada unsur nama Kepahiang, Bengkulu, bahkan Indonesia sekali pun.\r\n\r\n\"Jadi kontribusi perusahaan teh ini hampir tidak ada,\" ungkap mantan Bupati Kepahiang selama dua periode tersebut.\r\n\r\nTetapi jangan takut, bagi pengunjung, pihak perusahaan biasanya memberikan layanan minum teh secara gratis. Siapa pun yang datang secara resmi, dipastikan akan disuguhi teh naga hitam yang dipercaya akan meningkatkan vitalitas.\r\n\r\nRahmadin, salah seorang pengunjung, mengaku setelah minum teh naga hitam, dirinya merasa lebih segar dan bersemangat. Meskipun hanya satu cangkir kecil yang diteguknya, itu sudah cukup membuat hangat tubuh dan berkeringat di pagi hari saat menikmati kebun teh Kabawetan ini.\r\n\r\n\"Aroma yang harum, rasa hangat yang menjalar saat teh masuk ke tubuh kita dan efek segar serta bergairah saya rasakan setelah minum teh naga hitam ini,\" ujar Rahmadin.', '2021-11-01', 'WS001', 'IM005'),
('NW04', 'Pantai Panjang Bengkulu : Pantai Terpanjang dan Terunik di Bengkulu', 'Pantai Panjang merupakan pantai pasir putih dengan garis pantai halus yang membentang sepanjang 7 km. Pantai panjang tidak memiliki terumbu dan lebarnya mengembang sampai 500 meter saat air laut surut sehingga hamparan pasir putihnya menjadi semakin luas. Daerah sekitar pantai adalah pusat pariwisata dan dilengkapi dengan restoran, hotel, cottage dan toko-toko. Tidak seperti banyak pantai pada umumnya, Pantai Panjang tidak memiliki pohon kelapa, tetapi didominasi oleh pohon cemara dan pinus yang membuat tempat berlindung yang indah untuk beristirahat dan bersantai di bawah.\r\n\r\nSebagai kawasan wisata utama, berbagai fasilitas diposisikan di sepanjang pantai seperti restoran, kafe, akomodasi, taman bermain anak-anak serta fasilitas olahraga. Pantai Panjang memiliki air yang jernih serta dilapisi dengan pasir yang sangat halus yang tidak akan menyakiti kaki Anda, sehingga sangat sempurna untuk berjalan-jalan atau joging pagi. Ombak yang tidak terlalu berombak, sehingga merasa bebas untuk bermain di air, berenang atau memancing.\r\n\r\nPinggiran pantai dilapisi dengan deretan pohon cemara dan pohon pinus yang harum, dilengkapi dengan keindahan pasir pantai yang lembut dan pasir putih. Sore adalah waktu yang ideal untuk pergi ke pantai karena cuaca akan menjadi dingin. Bertahan lama cukup untuk menanti malam yang akan datang, dan menonton warna cakrawala menyala dalam cahaya matahari terbenam. Pantai ini juga tempat yang populer bagi wisatawan untuk mendirikan kemah pada malam hari.', '2021-11-10', 'WS003', 'IM006'),
('NW05', 'Air Panas Suban Bengkulu dan Legenda Batu Menangis', 'Kabupaten Rejang Lebong, Bengkulu, mendapat limpahan air panas bumi cukup banyak. Salah satunya adalah pemandian air panas Suban di Kota Curup, Ibu Kota Rejang Lebong.\r\n\r\nLokasinya tak jauh dari jalan raya lintas Sumatera Lubuk Linggau-Curup. Di pinggir jalan raya ada papan petunjuk untuk menuju lokasi ini. Dari petunjuk tersebut, jarak pemandian air panas Suban sekitar 2 km dan bisa ditempuh dengan kendaraan, baik roda dua maupun roda empat.\r\n\r\nDi masa pandemi Covid-19, Objek Wisata Suban Air Panas dijaga oleh anggota kepolisian, TNI, Satpol PP, petugas Dinas Kesehatan dan petugas Dinas Perhubungan. Para petugas tersebut diinstruksikan untuk mendisiplinkan warga mematuhi protokol kesehatan Covid-19. Di antaranya mengenakan masker, membasuh tangan dengan sabun/hand sanitizer dan suhu badan dalam kondisi normal, serta tak melakukan kerumunan. Jika Anda tak mematuhi salah satu saja dari hal tadi, dipastikan tak akan bisa masuk objek wisata yang Anda tuju.\r\n\r\nPopularitas Suban Air Panas telah merambah hingga jauh. Tak heran, pengunjung yang datang tak hanya dari kabupaten di luar Rejang Lebong, bahkan juga dari luar Provinsi Bengkulu.\r\n\r\nFasilitasnya cukup lengkap. Tersedia beberapa kolam yang bisa Anda pilih sesuai selera, dari yang dangkal hingga yang agak dalam, tapi juga ada penyewaan pelampung, pakaian renang, tempat salin pakaian dan kantin serta mushola.\r\n\r\nAir panas Suban mengalir dari Bukit Kaba yang ada di atasnya. Seperti diketahui, Kaba merupakan salah satu lapangan panas bumi yang telah ditetapkan menjadi wilayah kerja panas bumi (WKP) sejak tahun 2012 lalu. BUMN PLN kini bersiap melakukan eksplorasi di wilayah ini.\r\n\r\nSelain udaranya yang sejuk, pemandian Suban juga menghadirkan keindahan alam nan hijau. Ditambah dengan panaroma tebing-tebing indah yang ditumbuhi pepohonan, air panas Suban sangat pas untuk bersantai melepas penat.\r\n\r\nDi pemandian ini pun ada dua batu besar yang dianggap sakral oleh masyarakat setempat. Namanya Batu Tri Sakti yang konon dihuni oleh tiga roh besar yang sifatnya melindungi. Yang satu lagi adalah Batu Menangis yang konon kadang-kadang mengeluarkan air seolah-olah sedang menangis.\r\n\r\nKeberadaan Batu Menangis berkaitan dengan legenda seorang putri bernama Gemercik Emas yang selalu terisak-isak, karena ia menolak untuk menikah dengan seorang pangeran bernama Putra Gambir Melang.\r\n\r\nKedua batu ini sangat dijaga kelestariannya karena telah masuk dalam daftar salah satu cagar budaya.\r\n\r\nMaka, mengunjungi pemandian air panas Suban, tak hanya bisa bersuka ria menikmati air panas alami, tapi juga bisa mengenal cerita rakyat Rejang Lebong', '2021-11-12', 'WS002', 'IM002'),
('NW06', 'Masjid Tertua di Bengkulu : Masjid Jamik Bengkulu', 'Merupakan mejid tertua yang ada di Bengkulu. Mesjid Jamik cukup terkenal, berdiri kokoh di jantung kota Bengkulu tepatnya Jl. Letjend Suprapto Tengah Padang Ratu Samban Kota Bengkulu. membuat mesjid ini gampang dijumpai. Terkenalnya masjid ini bukan hanya karena keunikan bangunannya melainkan sosok dibalik pendiri atau perancang bentuk masjid ini yaitu Presiden pertama Sukarno kala me jalani massa pengasingan di Bengkulu. \r\n\r\nMasjid Jamik Bengkulu ini pada awalnya memiliki bentuk yang sangat sederhana. Pada saat itu hanya menggunakan bahan atau material dari kayu, beratapkan daun rumbia, dan memiliki lantai yang sangat sederhana pula. Karena itu, jika musim hujan tiba, seringkali daerah sekitar masjid menjadi becek dan kotor.\r\n\r\nBung Karno yang memang dibilang ahli dalam mendesain bangunan akhirnya melakukan renovasi dan perbaikan secara menyeluruh terhadap bangunan yang kini dikenal dengan Masjid Jamik.\r\n\r\nDesain yang dibuat oleh Bung Karno memiliki gaya Eropa dengan adanya dua buah bubungan serta teras yang memanjang di bagian depan masjid. Desain yang telah dirancang oleh Bung Karno ini akhirnya diwujudkan menjadi sebuah bangunan masjid dan tentunya pengerjaan ini dibantu oleh warga sekitar dan dikerjakan secara bersama-sama. Dana yang diperoleh pun hasil dari kumpulan iuran warga sekitar.\r\n\r\nMasjid ini memiliki tiga buah bangunan yang menyatu. Ketiga bangunan tersebut diantaranya adalah serambi, ruang utama serta tempat untuk berwudhu. Lantai yang digunakan pada ruangan serambi adalah berupa ubin teraso putih dan memiliki bentuk persegi dengan ukuran sekitar 11.46 x 7.58 m. Dibagian ini pula terdapat satu buah bedug dengan diameter sekitar 80 cm. Bagian pintu sendiri berjumlah dua dan menggunakan bahan teralis besi.\r\n\r\nMasjid Jamik ini juga memiliki halaman yang terbilang cukup luas. Kini halaman masjid ini telah dilengkapi dengan pagar besi serta pilar yang terbuat dari batu. Di bagian halaman ini juga terdapat pohon serta tanaman yang terlihat begitu indah. Adanya pepohonan ini juga membuat udara di masjid begitu sejuk.\r\n\r\nHingga saat ini Masjid Jamik ini telah menjadi bangunan bersejarah yang berkategori sebagai benda cagar budaya dan juga telah dilindungi berdasarakan Undang-Undang No 11 Tahun 2010.', '2020-11-12', 'WS005', 'IM007'),
('NW07', 'jembatan palembang : jembatan ampera', 'Jembatan Ampera, yang telah menjadi lambang kota, terletak di tengah-tengah Kota Palembang, menghubungkan daerah Seberang Ulu dan seberang Ilir yang dipisahkan oleh Sungai Musi.\r\n\r\nJembatan Ampera dibangun pada tahun 1962 dengan biaya pembangunan yang diambil dari perampasan perang Jepang. Hal demikian juga terjadi pada pembangunan tugu Monas Jakarta. Jembatan ini awalnya sempat diberi nama Jembatan Soekarno, presiden Indonesia saat itu. Pemberian nama tersebut dianggap sebagai bentuk penghormatan kepada jasa presiden Soekarno saat itu. Namun, presiden Soekarno kurang berkenan karena tidak ingin menimbulkan tendensi individu tertentu. Dari alasan tersebut nama jembatan kemudian disamakan dengan slogan bangsa Indonesia pada tahun 1960 yaitu Amanat Penderitaan Rakyat atau disingkat Ampera.\r\n\r\nStruktur bangunan jembatan Ampera dijelaskan sebagai berikut:\r\n\r\n1. Jembatan Ampera dibangun dengan panjang 1,117 meter dan lebar 22 meter\r\n\r\n2. Sementara tinggi jembatan Ampera adalah 11,5 di atas permukaan air, sedangkan tinggi menara mencapai 63 m dari tanah.\r\n\r\n3. Antar menara memiliki jarak sekitar 75 meter dan berat jembatan berkisar 944 ton', '2021-11-23', 'WS006', 'IM009'),
('NW10', 'asd', 'asd', '2021-11-23', 'WS006', 'IM005');

-- --------------------------------------------------------

--
-- Table structure for table `pesawat`
--

CREATE TABLE `pesawat` (
  `pesawatID` char(5) NOT NULL,
  `pesawatNama` varchar(255) NOT NULL,
  `jamPenerbangan` varchar(255) NOT NULL,
  `lamaPenerbangan` varchar(255) NOT NULL,
  `biaya` int(11) NOT NULL,
  `provinsiAsal` char(5) NOT NULL,
  `provinsiTujuan` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesawat`
--

INSERT INTO `pesawat` (`pesawatID`, `pesawatNama`, `jamPenerbangan`, `lamaPenerbangan`, `biaya`, `provinsiAsal`, `provinsiTujuan`) VALUES
('PS01', 'Garuda ', '13.00 WIB', '1 jam', 500000, 'PR01', 'PR02'),
('PS02', 'Merpati Airlines', '08.00 WIB', '1 jam', 750000, 'PR02', 'PR01'),
('PS03', 'Citylink', '14.30 WIB', '1 jam', 600000, 'PR01', 'PR02');

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE `provinsi` (
  `provinsiID` char(5) NOT NULL,
  `provinsiNama` varchar(255) NOT NULL,
  `provinsiTglBerdiri` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`provinsiID`, `provinsiNama`, `provinsiTglBerdiri`) VALUES
('PR01', 'Bengkulu', '1968-11-18'),
('PR02', 'Sumatra Selatan', '1950-08-14');

-- --------------------------------------------------------

--
-- Table structure for table `restoran`
--

CREATE TABLE `restoran` (
  `restoranID` char(5) NOT NULL,
  `restoranNama` varchar(255) NOT NULL,
  `restoranDeskripsi` text NOT NULL,
  `restoranHarga` varchar(255) NOT NULL,
  `restoranRating` int(11) NOT NULL,
  `kecamatanID` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `restoran`
--

INSERT INTO `restoran` (`restoranID`, `restoranNama`, `restoranDeskripsi`, `restoranHarga`, `restoranRating`, `kecamatanID`) VALUES
('RS01', 'Rumah Makan 999', 'Didalamnya disajikan makanan khas berselara yang sangat enak. mulai dari sayur sayuran, rendang, ayam goreng, perkedel dan banyak lagi makanan yang enak ditambah pelayanan yang ramah membuat pengalaman makan menjadi luar biasa.', 'Rp 10.000,00 - Rp 45.000,00', 5, 'KC01'),
('RS02', 'Somichan', 'menjual nasi goreng, mie goreng / tumis, bandrek dan juga soto minang channiago yang merupakan kepanjangan dari nama tempat makan ini sendiri.', 'Rp 5.000,00 - Rp 30.000,00', 4, 'KC01'),
('RS03', 'Dapur Kito', 'menjual beragam jenis makanan dan merupakan salah satu pelopor gerakan jumat berkah di curup', 'Rp 10.000,00 - Rp 50.000,00', 4, 'KC01'),
('RS04', 'dapur cucu', 'rasa soto yang dibuat nenek', 'Rp 20.000 - Rp 30.000', 3, 'KC02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`areaID`),
  ADD KEY `provinsiarea` (`provinsiID`);

--
-- Indexes for table `destinasi`
--
ALTER TABLE `destinasi`
  ADD PRIMARY KEY (`destinasiID`),
  ADD KEY `kategoridestinasi` (`kategoriID`),
  ADD KEY `areadestiansi` (`areaID`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`hotelID`),
  ADD KEY `kecamatanhotel` (`kecamatanID`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`imageID`),
  ADD KEY `destinasiimage` (`destinasiID`);

--
-- Indexes for table `image_kuliner`
--
ALTER TABLE `image_kuliner`
  ADD PRIMARY KEY (`image_kulinerID`),
  ADD KEY `restoranimage` (`restoranID`);

--
-- Indexes for table `kabupaten`
--
ALTER TABLE `kabupaten`
  ADD PRIMARY KEY (`kabupatenID`),
  ADD KEY `provinsikabupaten` (`ProvinsiID`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategoriID`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`kecamatanID`),
  ADD KEY `kabupatenkecamatan` (`kabupatenID`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`eventKode`),
  ADD KEY `kabupatenEvent` (`kabupatenKode`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`komentarID`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`mobilID`),
  ADD KEY `kabupatenasal` (`kabupatenAsal`),
  ADD KEY `kabupatentujuan` (`kabupatenTujuan`);

--
-- Indexes for table `news_destinasi`
--
ALTER TABLE `news_destinasi`
  ADD PRIMARY KEY (`news_destinasiID`),
  ADD KEY `destinasinews` (`destinasiID`),
  ADD KEY `imagenews` (`imageID`);

--
-- Indexes for table `pesawat`
--
ALTER TABLE `pesawat`
  ADD PRIMARY KEY (`pesawatID`),
  ADD KEY `provinsiasal` (`provinsiAsal`),
  ADD KEY `provinsitujuan` (`provinsiTujuan`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`provinsiID`);

--
-- Indexes for table `restoran`
--
ALTER TABLE `restoran`
  ADD PRIMARY KEY (`restoranID`),
  ADD KEY `kecamatanrestoran` (`kecamatanID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `komentarID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `area`
--
ALTER TABLE `area`
  ADD CONSTRAINT `provinsiarea` FOREIGN KEY (`provinsiID`) REFERENCES `provinsi` (`provinsiID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `destinasi`
--
ALTER TABLE `destinasi`
  ADD CONSTRAINT `areadestiansi` FOREIGN KEY (`areaID`) REFERENCES `area` (`areaID`),
  ADD CONSTRAINT `kategoridestinasi` FOREIGN KEY (`kategoriID`) REFERENCES `kategori` (`kategoriID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hotel`
--
ALTER TABLE `hotel`
  ADD CONSTRAINT `kecamatanhotel` FOREIGN KEY (`kecamatanID`) REFERENCES `kecamatan` (`kecamatanID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `destinasiimage` FOREIGN KEY (`destinasiID`) REFERENCES `destinasi` (`destinasiID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `image_kuliner`
--
ALTER TABLE `image_kuliner`
  ADD CONSTRAINT `restoranimage` FOREIGN KEY (`restoranID`) REFERENCES `restoran` (`restoranID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kabupaten`
--
ALTER TABLE `kabupaten`
  ADD CONSTRAINT `provinsikabupaten` FOREIGN KEY (`ProvinsiID`) REFERENCES `provinsi` (`provinsiID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD CONSTRAINT `kabupatenkecamatan` FOREIGN KEY (`kabupatenID`) REFERENCES `kabupaten` (`kabupatenID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD CONSTRAINT `kabupatenEvent` FOREIGN KEY (`kabupatenKode`) REFERENCES `kabupaten` (`kabupatenID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mobil`
--
ALTER TABLE `mobil`
  ADD CONSTRAINT `kabupatenasal` FOREIGN KEY (`kabupatenAsal`) REFERENCES `kabupaten` (`kabupatenID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kabupatentujuan` FOREIGN KEY (`kabupatenTujuan`) REFERENCES `kabupaten` (`kabupatenID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `news_destinasi`
--
ALTER TABLE `news_destinasi`
  ADD CONSTRAINT `destinasinews` FOREIGN KEY (`destinasiID`) REFERENCES `destinasi` (`destinasiID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `imagenews` FOREIGN KEY (`imageID`) REFERENCES `image` (`imageID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pesawat`
--
ALTER TABLE `pesawat`
  ADD CONSTRAINT `provinsiasal` FOREIGN KEY (`provinsiAsal`) REFERENCES `provinsi` (`provinsiID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `provinsitujuan` FOREIGN KEY (`provinsiTujuan`) REFERENCES `provinsi` (`provinsiID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `restoran`
--
ALTER TABLE `restoran`
  ADD CONSTRAINT `kecamatanrestoran` FOREIGN KEY (`kecamatanID`) REFERENCES `kecamatan` (`kecamatanID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
