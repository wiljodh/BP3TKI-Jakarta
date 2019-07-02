-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2019 at 12:39 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bp3tki`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kategori_berita` int(11) NOT NULL,
  `slug_berita` varchar(255) NOT NULL,
  `nama_berita` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `jenis_berita` varchar(20) NOT NULL,
  `status_berita` varchar(20) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tanggal_post` datetime NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `id_user`, `id_kategori_berita`, `slug_berita`, `nama_berita`, `keterangan`, `jenis_berita`, `status_berita`, `gambar`, `tanggal_post`, `tanggal`) VALUES
(36, 2, 3, 'maulid-nabi-muhammad-saw-mari-tiru-integritas-rasulullah', 'Maulid Nabi Muhammad SAW: Mari Tiru Integritas Rasulullah', '<p><strong>Jakarta, BP3TKI Jakarta</strong>, Rabu (05/11) - Dalam rangka menambah keimanan dan sinergitas pelayanan Pekerja Migran Indonesia, Balai Pelayanan Penempatan dan Perlindungan Tenaga Kerja Indonesia (BP3TKI) Jakarta menyelenggarakan kegiatan Maulid Nabi Muhammad SAW 1440 H di Aula Kantor BP3TKI Jakarta, Jalan Penganten Ali No. 71 Ciracas Jakarta Timur.</p>\r\n<p>Kegiatan ini dihadiri oleh seluruh pegawai BP3TKI Jakarta, Himpunan Instruktur Pembekalan Akhir Pemberangkatan (HIPAPI), Kepala Bank Rakyat Indonesia KK Ciracas, BPJS Ketenagakerjaan Cabang Ceger, Paguyuban PPTKIS (PAPKI) dan lain-lain.</p>\r\n<p>Mengusung tema &ldquo;Meneladani Integritas Rasulullah dengan Bekerja Cermat Kreatif dan Ikhlas dalam Semangat Melayani PMI&rdquo;, kegiatan ini berlangsung meriah dengan iringan hadroh marawis yang mengumandangkan puji-pujian bagi Baginda Rasulullah SAW serta barjanji yang dibacakan oleh Ustadz Maftuh Tohairi.</p>\r\n<p>Kepala BP3TKI Jakarta, Mucharom Ashadi dalam sambutannya menjelaskan bahwa kegiatan ini merupakan kegiatan yang dilaksanakan untuk menambah keimanan dan sebagai cerminan &ldquo;Al Mahabbah&rdquo; atau cinta kita kepada Nabi Besar Muhamammad SAW tentunya dengan mengikuti semua perbuatannya. Disamping itu, kegiatan ini untuk menambah rasa kebersamaan dan sinergitas seluruh pegawai BP3TKI Jakarta dan stakeholder.</p>\r\n<p>&ldquo;Seperti yang kita ketahui Rasulullah SAW merupakan suri tauladan yang baik sehingga patut kita contoh dan jalankan apa yang diajarkan oleh Rasulullah SAW&rdquo;, ujar Mucharom.</p>\r\n<p>Kegiatan berlanjut dengan mendengarkan tausyiah dari Ustad Fikri Auliaurrohman Lc yang menjelaskan mengenai bagaimana rahmat dari Allah SWT dan syafaat dapat membawa manusia masuk ke dalam Surga.</p>\r\n<p>&ldquo;Salah satu cara mendapatkan rahmat dari Allah SWT adalah bekerja dengan ikhlas dan bertanggunjawab atas apa yang diamanatkan. Perbaiki diri dan akhlak pula baik terhadap Allah SWT dan terhadap sesame manusia. <em>Hablumminallah</em> dan <em>Hablumminnas</em>&rdquo;, paparnya di depan peserta Maulid Nabi. <strong><em>(Humas/pw/rs)</em></strong></p>', 'Berita', 'Publish', 'maulid.jpg', '2018-12-23 12:46:02', '2018-12-23 11:46:02'),
(37, 2, 3, 'peningkatan-kerjasama-perlindungan-upaya-optimalisasi-perlindungan-dan-pemberdayaan-di-wilayah-dki-jakarta', 'Peningkatan Kerjasama Perlindungan, Upaya Optimalisasi Perlindungan dan Pemberdayaan di Wilayah DKI Jakarta', '<p><strong>Jakarta, BP3TKI Jakarta</strong>, Selasa (04/11) - Dalam rangka pengoptimalisasian perlindungan dan pemberdayaan Pekerja Migran Indonesia (PMI), Balai Pelayanan Penempatan dan Perlindungan Tenaga Kerja Indonesia (BP3TKI) Jakarta menyelenggarakan Rapat Koordinasi Peningkatan Kerjasama Perlindungan PMI di DKI Jakarta, (04/11) di Kantor BP3TKI Jakarta, Jalan Penganten Ali No.71 Ciracas, Jakarta Timur.</p>\r\n<p>Hadir pada kegiatan tersebut beberapa instansi yang aktif bersinergi mengenai perlindungan khususnya pada sektor pelayanan kepulanagan PMI bermasalah, sakit dan meninggal dunia serta pada sektor pemberdayaan bagi PMI Purna dan Keluarganya diantaranya Kasi Kerjasama Lembaga Keuangan dan Remitansi BNP2TKI, Kasi Kerjasama Debarkasi BNP2TKI, Rumah Perlindungan Trauma Center (RPTC), Kasi Perlindungan dan Pemberdayaan BP3TKI Serang, Koordinator Pelayanan Kepulangan di Commond Use Lounge (CUL) Bandara Soekarno Hatta, Dit PWNI BHI Kementerian Luar Negeri, Bank Indonesia Perwakilan DKI Jakarta serta Kasi Kerjasama dan Kemitraan Industri Dinas Perindustrian dan Energi Provinsi DKI Jakarta.</p>\r\n<p>Kepala BP3TKI Jakarta, dalam paparannya menjelaskan bahwa pada 2018 ini terhitung sudah 30 kali perjalanan yang memfasilitasi kepulangan PMI bermasalah ke daerah asal maupun ke RPTC jika PMI tersebut perlu di rehabilitasi maupun terdapat kelanjutan proses hukum yang harus ditangani terlebih dahulu. Selain pelayanan kepulangan, sejak tahun 2010 BP3TKI Jakarta telah membina 1035 PMI Purna dan keluarganya yang sampai kini masih patut kita fasilitasi peningkatan kualitas produknya.</p>\r\n<p>\"saya harap rapat ini mempererat&nbsp; kerjasama yang selama ini telah kita bina, sehingga baik pelayanan kepulangan dan pemberdayaan dapat lebih di optimalkan\", harap Mucharom.</p>\r\n<p>Diskusi antar instansi bergulir dalam rapat, setiap instansi mengemukakan program-program yang dapat disinergikan dengan BP3TKI Jakarta. Seperti Bank Indonesia Perwakilan DKI Jakarta yang bersinergi terkait remitansi PMI regional DKI Jakarta dan Dinas Perindustrian dan Energi yang akan bersinergi terkait pelatihan peningkatan kualitas kemasan produk, sertifikasi halal, dan lain-lain terkait pemberdayaan pada tahun 2019 mendatang.</p>\r\n<p>RPTC, BP3TKI Serang, CUL, PWNI BHI Kementerian Luar Negeri serta subdit pelayanan kepulangan BNP2TKI fokus pada permasalahan dan optimalisasi sinergitas pelayanan kepulangan dan perlindungan PMI. <strong><em>(Humas/pw/rs)</em></strong></p>', 'Berita', 'Publish', 'upaya.jpg', '2018-12-23 12:47:24', '2018-12-23 11:47:24'),
(38, 2, 3, 'bp3tki-jakarta-fasilitasi-pencairan-klaim-asuransi-85-juta-rupiah', 'BP3TKI JAKARTA FASILITASI PENCAIRAN KLAIM ASURANSI 85 JUTA RUPIAH', '<p><strong>Jakarta, BP3TKI Jakarta,</strong> Rabu (21/11) &ndash; BP3TKI Jakarta memfasilitasi klaim asuransi Pekerja Migran Indonesia (PMI) meninggal dunia an Rawud Bin Taslim di Ruang Rapat BP3TKI Jakarta, Jalan Penganten Ali No.71 Ciracas Jakarta Timur.</p>\r\n<p>Rawud merupakan PMI yang diberangkatkan sebagai ABK Nelayan oleh PT. Trias Insan Madani ke negara penempatan Taiwan. Rawud meningeal duni karena tenggelam di perairan Taiwan.</p>\r\n<p>Kepala BP3TKI Jakarta, Mucharom Ashadi turut berbela sungkawa di depan undangan yang hadir dalam penyerahan klaim asuransi meninggal dunia. &ldquo;Saya atas nama keluarga besar BP3TKI Jakarta turut berbelasungkawa atas meninggalnya Saudara kita Rawud Bin Taslim. Untuk itu, kami sebagai pemerintahan menunjukkan bahwa negara hadir untuk melindungi PMI melalui fasilitasi klaim asuransi meninggal dunia kepada ahli waris sehingga dapat digunakan sebagaimana mestinya&rdquo;, jelasnya.</p>\r\n<p>Pimpinan BPJS Kantor Wilayah Cabang Ceger, Dhani menjelaskan bahwa salah satu keuntungan sebagai PMI yang berangkat secara legal yaitu dapat melakukan klaim asuransi. &ldquo;Kami keluarga BPJS Cabang Ceger berduka cita atas meninggalnya Rawud. Rawud merupakan PMI yang berangkat secara legal sehingga dapat terlindungi penuh seperti ini. Total klaim asuransi meninggal dunia yang kami cairkan aadalah sebesar 85 juta rupiah&rdquo;, tegasnya.</p>\r\n<p>Wadono yang merupakan adik kandung Rawud memberikan ucapan terimakasihnya kepada segenap pihak yang telah membantu pencairan klaim asuransi. &ldquo;Saya sebagai adik Rawud datang bersama Bapak Ibu saya mengucapkan terimakasih kepada pihak BP3TKI Jakarta, BPJS Ceger, dan Bu Ayu dari PT. Trias Insan Madani yang pro aktif membantu proses pencairan ini&rdquo; ujarnya. <strong><em>(Humas/pw/rs)</em></strong></p>', 'Berita', 'Publish', 'bali.jpg', '2018-12-23 12:56:38', '2018-12-23 11:56:38'),
(39, 2, 3, 'bp3tki-jakarta-launching-warung-pmi-purna', 'BP3TKI JAKARTA LAUNCHING WARUNG PMI PURNA', '<p><strong>Jakarta, BP3TKI Jakarta,</strong> Selasa (30/10) &ndash; BP3TKI Jakarta membuat sebuah inovasi untuk mengatasai kendala pemasaran melalui Warung PMI Purna yang diresmikan pada Selasa (30/10) di Ruang Rapat BP3TKI Jakarta, Jalan Penganten Ali No.71 Ciracas Jakarta Timur.</p>\r\n<p>Peresmian ini dihadiri oleh Direktur Pemberdayaan, Direktur Sosialisasi dan Kelembagaan Penempatan, Kasubdit Fasilitasi dan Rehabilitasi TKI Purna, Kepala BP3TKI Jakarta, Pemimpin Kelompok Bisnis Remitance BNI, Kepala Kantor BPJS Cabang Ceger, Kepala BRI KK Ciracas, Ketua Paguyuban PPTKIS, dan 20 PMI Purna berwirausaha.</p>\r\n<p>Direktur Sosialisasi dan Kelembagaan Penempatan, A. Gatot Hermawan menjelaskan bahwa dirinya tidak heran jika BP3TKI Jakarta mampu membuat inovasi semacam ini. &ldquo;Saya pribadi tidak kaget dan heran karena BP3TKI Jakarta sudah beberapa kali membuat inovasi khususnya bagi PMI Purna. Sebelumnya juga ada inovasi Bengkel PMI, jadi bias dibilang saya cukup bangga pernah menjadi bagian di BP3TKI Jakarta&rdquo;, paparnya.</p>\r\n<p>Serupa dengan Gatot, Direktur Pemberdayaan Rohyati Sarosa berharap inovasi ini bukan hanya sebuah proyek perubahan namun bisa bermanfaat bagi PMI Purna. &ldquo;Saya harap inovasi ini bisa dikembangkan dan bermanfaat bagi banyak orang khusunya PMI Purna&rdquo;, ujarnya.</p>\r\n<p>Kepala BP3TKI Jakarta, Mucharom Ashadi mengungkapkan makna dari Warung PMI Purna ini. &ldquo;Warung PMI Purna ini merupakan sebuah inovasi yang dapat membantu PMI Purna untuk menampilkan produknya sehingga bisa dikenal masyarakat luas, dapat pula menjadi wadah konsultasi untuk meningkatkan kualitas produknya, dan yang terpenting Warung PMI Purna ini menjadi salah satu bukti bahwa negara hadir untuk membantu permasalahan PMI Purna khususnya di bidang pemasaran&rdquo;, jelasnya.</p>\r\n<p>Warung PMI Purna merupakan sebuah inovasi yang bermula dari proyek perubahan dari Kepala Seksi Perlindungan dan Pemberdayaan BP3TKI Jakarta terdahulu dan kini menjabat Kepala Seksi Pelaksanaan Sosialisasi BNP2TKI, Jupriyadi. Beragam produk PMI Purna mulai dari makanan hingga kerajinan ditampilkan dalam Warung PMI Purna BP3TKI Jakarta.</p>\r\n<p>Jupriyadi menjelaskan bahwa dirinya menggagas proyek tersebut berdasarkan cerita dari PMI Purna. &ldquo;Banyak PMI Purna yang berkeluhkesah mengenai pemasaran, maka setelah berkonsultasi akhirnya terciptalah gagasan membentuk Warung PMI Purna&rdquo;, pungkas pria yang akrab disapa Adi ini.</p>\r\n<p>Siti Nurul Dinia, PMI Purna produsen sambal cakalang mengungkapkan dirinya mengapresiasi peresmian Warung PMI Purna. &ldquo;Saya cukup senang bisa bergabung dan produknya ditampilkan di sini&rdquo; ungkap PMI asal Pondok Gede Jakarta Timur ini. <strong><em>(Humas/pw).</em></strong></p>', 'Berita', 'Publish', 'launch.jpg', '2018-12-23 12:59:56', '2018-12-23 11:59:56'),
(40, 2, 3, 'bp3tki-jakarta-fasilitasi-penyerahan-klaim-asuransi-256-juta-rupiah', 'BP3TKI Jakarta Fasilitasi Penyerahan Klaim Asuransi 256 Juta Rupiah', '<p><strong>Jakarta, BP3TKI Jakarta,</strong> Jumat (14/09) &ndash; BP3TKI Jakarta fasilitasi penyerahan klaim asuransi dan pemberian sisa hak kerja Pekerja Migran Indonesia ABK an Adi Sefrian senilai 256 juta rupiah pada Jumat (14/09) di Kantor BP3TKI Jakarta.</p>\r\n<p>Adi Seftian merupakan ABK dari negara penempatan Taiwan yang berangkat melalui PT. Righi Marine Internasional dan meninggal pada tahun 2017 lalu karena sakit. Desember 2017, pihak BP3TKI Jakarta kala itu telah memulangkan jenazah PMI dan memberikan santunan bela sungkawa sebesar 2,5 juta rupiah kepada ahli waris yakni Ibunya, Ahyana.</p>\r\n<p>Tidak berhenti sampai disitu, BP3TKI Jakarta melalui seksi perlindungan dan pemberdayaan, selalu memantau perkembangan klaim asuransi dan sisa gaji Adi melalui PT. Righi Marine Internasional.</p>\r\n<p>Hadir dalam kegiatan fasilitasi penyerahan klaim asuransi, Deputi Bidang Perlindungan BNP2TKI, Kepala BP3TKI Jakarta, Direktur PT. Righi Marine Internasional, dan ahli waris yakni ayah, ibu dan kedua adik almarhum.</p>\r\n<p>Deputi Bidang Perlindungan BNP2TKI, Dr. Anjar Prihantoro BW, SE, MA menjelaskan bahwa setiap PMI hendaknya berangkat secara procedural sehingga tercatat dan mudah dipantau.</p>\r\n<p>&ldquo;Semua PMI berangkat dengan benar sesuai prosedur sehingga tercatat dapat kita dapat mudah memantau dan meminta hak jika terjadi hal yang tidak diinginkan&rdquo;, jelas Anjar.</p>\r\n<p>Kepala BP3TKI Jakarta, Mucharom Ashadi menjelaskan bahwa peran pemerintah adalah mengawal hingga hak-hak PMI terpenuhi.</p>\r\n<p>&ldquo;Salah satu tugas pemerintahan untuk mengawal apa yang menjadi hak-hak PMI terpenuhi. Saya harap keluarga dapat memanfaatkan sebaik-baiknya apa yang telah diterima ini&rdquo; ungkapnya.</p>\r\n<p>Pihak keluarga tidak dapat berkata banyak karena masih mengingat mendiang sehingga ketika acarapun, ibu Ahyana masih berderai airmata.</p>\r\n<p>Kepala Seksi Perlindungan dan Pemberdayaan BP3TKI Jakarta, Zuni Ariffiyanto memberikan dukungan kepada pihak keluarga di akhir acara. Menurutnya keluarga harus tetap menjalani kehidupan dengan lebih baik.</p>\r\n<p>Menurut pihak keluarga, rencananya, uang hasil asuransi kematian dan sisa gaji PMI Adi Seftian akan digunakan untuk merenovasi rumah sesuai dengan keinginan almarhum semasa hidup. <strong><em>(Humas/pw)</em></strong></p>', 'Berita', 'Publish', 'pembinaan.jpg', '2018-12-23 13:02:09', '2018-12-23 12:02:09'),
(41, 4, 3, 'ciptakan-pegawai-siap-bp3tki-jakarta-adakan-pembinaan-pegawai', 'Ciptakan Pegawai \"SIAP\", BP3TKI Jakarta Adakan Pembinaan Pegawai', '<p><strong>Jakarta, BP3TKI Jakarta</strong>, Jumat (19/01) &ndash; Sumber Daya Manusia merupakah hal yang paling penting dalam sebuah organisasi, untuk memotivasi serta meningkatkan kinerja pegawai maka Balai Pelayanan Penempatan dan Perlindungan Tenaga Kerja Indonesia (BP3TKI) Jakarta mengadakan kegiatan pembinaan pegawai yang dilaksanakan bersama Biro Organisasi dan Kepegawaian BNP2TKI pada Jumat,(19/01).</p>\r\n<p>Kegiatan pembinaan dan <em>assessment</em> ini dihadiri oleh Kepala Biro Organisasi dan Kepegawaian BNP2TKI, Kepala Bagian Perencanaan dan Pengembangan Pegawai, Kepala Bagian Mutasi dan Informasi Pegawai, Kepala Bagian Organisasi dan Tata Laksana, Kepala BP3TKI Jakarta, dan seluruh pegawai BP3TKI Jakarta.</p>\r\n<p>Kepala Biro Organisasi dan Kepegawaian BNP2TKI, Justi Amaria, menjelaskan dalam paparannya pembinaan Aparatur Sipil Negara (ASN) merupakan serangkaian program yang dibuat untuk meningkatkan kinerja setiap pegawai. Justi juga menjelaskan kebijakan yang digunakan saat ini di lingkungan ASN adalah sistem merit. &ldquo;Sistem Merit merupakan suatu kebijakan dan manajemen ASN yang didasari oleh kualitas, kompetensi dan kinerja secara adil dan wajar tanpa membedakan latar belakang dari berbagai aspek seseorang&rdquo; jelasnya.</p>\r\n<p>Senada dengan Justi, Kepala BP3TKI Jakarta, Mucharom Ashadi menegaskan kegiatan pembinaan pegawai ini hendaknya dapat dilakukan secara berkala sehingga seluruh pegawai BP3TKI Jakarta senantiasa SIAP (Sinergi, Integritas, Akuntabel, Profesional) sesuai dengan moto reformasi birokrasi dan zona integritas. &ldquo;Dengan pembinaan pegawai ini, saya berharap seluruh pegawai dapat SIAP bukan hanya siap hadir dan mengerjakan tugas tepat waktu, tapi juga siap mental dan pengetahuan yang luas supaya tugas pokok dapat dijalankan dengan lancar&rdquo;, tegas Mucharom.</p>\r\n<p>Selain pembinaan pegawai, pada kesempatan ini juga diadakan <em>assessment</em> Pegawai Pemerintah Non Pegawai Negeri (PPNPM) berupa <em>interview</em> dan penilaian serta perpanjangan kontrak kerja di lingkungan BP3TKI Jakarta. <strong><em>(pw)</em></strong></p>', 'Berita', 'Publish', 'pembinaan1.jpg', '2018-12-24 01:15:46', '2018-12-23 18:15:46'),
(44, 4, 3, 'bp3tki-jakarta-sambut-kunjungan-direktur-utama-bpjs-ketenagakerjaan', 'BP3TKI JAKARTA SAMBUT KUNJUNGAN DIREKTUR UTAMA BPJS KETENAGAKERJAAN', '<p><strong>Jakarta, BP3TKI Jakarta</strong>, Kamis (07/03) &ndash; Guna mempererat kerjasama dan menginformasikan proses Pelayanan Penempatan dan Perlindungan BP3TKI Jakarta, BP3TKI Jakarta sambut kedatangan Direktur Utama BPJS Ketenagakerjaan pada Kamis (07/03).</p>\r\n<p>Dalam kunjungannya, Direktur Utama BPJS Ketenagakerjaan, Agus Susanto, menyaksikan langsung proses pelayanan penempatan dan perlindungan di BP3TKI Jakarta. Agus turut pula mengunjungi Calon Pekerja Migran Indonesia (CPMI) yang tengah mengikuti Pembekalan Akhir Pemberangkatan (PAP).</p>\r\n<p>Di dalam kelas PAP, Agus menyampaikan program-program yang dimiliki oleh BPJS khususnya terkait jaminan keselamatan kerja dan santunan bagi PMI yang meninggal dunia.</p>\r\n<p>Kepala BP3TKI Jakarta,Mucharom Ashadi menyambut baik kedatangan direktur utama BPJS ketenagakerjaan. Menurutnya silaturahmi ini dapat menjadi penghubung untuk peningkatan kerjasama bagi kedua belah pihak dalam pelayanan dan perlindungan PMI.</p>\r\n<p>&ldquo;Terimakasih atas kunjungannya ke BP3TKI Jakarta, kami berharap kunjungan ini membawa hal baik yang tentunya bagi peningkatan pelayanan baik penempatan dan perlindungan pekerja migran Indonesia&rdquo; pungkasnya. <strong><em>(Humas/pw/rs)</em></strong></p>', 'Berita', 'Publish', 'IMG_1943.JPG', '2019-01-10 16:02:53', '2019-01-10 09:02:53'),
(45, 4, 3, 'bp3tki-jakarta-dampingi-bnp2tki-dan-bank-indonesia-ujicoba-survei-remitansi-pmi', 'BP3TKI Jakarta Dampingi BNP2TKI dan Bank Indonesia Ujicoba Survei  Remitansi PMI', '<p><strong>Jakarta, BP3TKI Jakarta</strong>, Selasa (25/01) &ndash; Untuk memperoleh data dan informasi mengenai pola remitansi PMI, BP3TKI Jakarta turut mendampingi Direktorat Pemberdayaan BNP2TKI serta Bank Indonesia untuk melakukan ujicoba kuesioner survei kepada 50 orang Pekerja Migran Indonesia (PMI) yang sedang melaksanakan Pembekalan Akhir Pemberangkatan (PAP) di Kantor BP3TKI Jakarta, Jalan Penganten Ali No.71.</p>\r\n<p>Kegiatan ini dihadiri oleh Direktur Pemberdayaan BNP2TKI, Kasubdit Kerjasama Antar Lembaga BNP2TKI, Kepala BP3TKI Jakarta, serta Analis Ekonomi Bank Indonesia. Secara nasional, target survei adalah CPMI, PMI aktif, PMI re-entry, eks PMI, PMI Purna dan Keluarganya. Namun, koresponden survei yang dilaksanakan di Kelas PAP BP3TKI Jakarta hanya melibatkan&nbsp; PMI yang pernah bekerja ke luar negeri (eks PMI). Survei dilakukan pukul 07.30 wib, sebelum materi PAP dilaksanakan.</p>\r\n<p>Dalam kesempatan tersebut, Direktur Pemberdayaan BNP2TKI, A. Gatot Hermawan menjelaskan bahwa BNP2TKI dan Bank Indonesia akan menyelenggarakan survei terkait pola perhitungan remitansi. &ldquo;Bapak Ibu rekan-rekan Calon Pekerja Migran Indonesia, kami bermaksud menyampaikan kuesioner ini dengan harapan Bapak Ibu dapat memberikan informasi terkait gaji yang diterima, gaji yang dikirim ke Indonesia maupun fasilitas pengiriman dan penerimaan oleh PMI dan Keluarga PMI&rdquo;, paparnya.</p>\r\n<p>Kepala BP3TKI Jakarta, Mucharom Ashadi berpendapat bahwa kegiatan semacam ini sangat diperlukan untuk mengetahui seberapa besar remitansi yang dikirimkan PMI. &ldquo;Survei semacam ini jelas sangat membantu untuk mengetahui sebesar apa PMI mengirimkan uang kepada keluarga setiap bulannya serta bagaimana cara pengirimannya sehingga kita paham betul pola remitansinya seperti apa&rdquo;, jelas Mucharom.</p>\r\n<p>Untuk selanjutnya, pelaksanaan survei akan dilaksanakan pada bulan Juni sampai dengan Juli 2019 mendatang. <strong><em>(Humas/pw/za)</em></strong></p>', 'Berita', 'Publish', '123.jpg', '2019-01-30 09:08:12', '2019-01-30 02:08:12'),
(46, 4, 3, 'pmi-purna-bp3tki-jakarta-launcing-gerai-sukmafood-dads-recipe', 'PMI Purna BP3TKI JAKARTA Launcing Gerai Sukmafood & Dad’s Recipe', '<p><strong>Sukmajaya, Depok, Kamis (14/02)</strong>&nbsp;&ndash; PMI Purna Binaan BP3TKI Jakarta Indra Rusliawan membuat sebuah inovasi dengan melaunching gerai Sukmafood &amp; Dad&rsquo;s Recipe dimana gerai tersebut menyediakan semua produk UKM dari kota Depok Khususnya dari Kecamatan Sukmajaya, melalui gerai tersebut selain memasarkan produk secara konvensional juga memasarkan produk UKM Depok melalui media online.<br /><br />Acara tersebut diresmikan oleh Camat Sukmajaya Tito Ahmad Riyadi beliau menyampaikan bahwa saat ini jumlah UKM di depok kira kira 7 % dari total penduduk depok dengan adanya gerai Sukmafood &amp; Dad&rsquo;s Recipe ini mempermudah masyarakat di wilayah depok untuk mendapatkan produk UKM khususnya produk UKM dari Kecamatan Sukmajaya &ndash; Depok dan juga dipermudah dengan pemasaran produk secara online, kedepannya Bapak Tito berharap gerai Sukmafood &amp; Dad&rsquo;s Recipe ini bisa menjadi salah satu destinasi oleh oleh&nbsp; khas kota Depok dan dapat meningkatkan ekomoni UKM disana.<br /><br />Dalam sambutan kepala BP3TKI Jakarta, yang diwakili oleh Septiansari staf seksi Perlindungan dan Pemberdayaan disampaikan bahwa BP3TKI Jakarta selaku pemerintah menyambut gembira dengan berdirinya Gerai ini. Hal ini membuktikan bahwa kegiatan pembinaan pasca pelatihan Pemberdayaan telah berhasil melahirkan outcomes yaitu wirausahawan baru. Diharapkan dengan dibukanya gerai ini,&nbsp; dapat memotivasi dan merangsang PMI Purna binaan kami lainnya terus mengembangkan diri dalam membuka usaha.&nbsp;<br /><br />Dipesankan juga agar semangat pak Indra Rusliawan menjadi salah satu dari pendiri Sukmafood &amp; Dad&rsquo;s Recipe ini dapat ditularkan kepada binaan kami yang lain yaitu rekan rekan sesama PMI Purna khususnya di wilayah Jabodetabek dan sekitarnya.<br /><br />Indra Rusliawan sedikit bercerita awal terbentuknya Sukmafood &amp; Dad Recipe&rsquo;s ini tercetus dari kumpul kumpul pelaku UKM di kedai kopi miliknya, beliau kemudian mengagas bagaimana kalau produk UKM sukmajaya di kumpulkan digerai nya dari situ para UKM satu sama lain bisa saling sharing bagaimana packaging produk yang baik, bagaimana&nbsp; pemasaran produk yang baik agar bisa dijangkau dan dikenal masyarakat luas salah satunya dengan cara pemasaran online tersebut. (<em><strong>Humas/rs</strong></em>).</p>', 'Berita', 'Publish', 'depok.jpg', '2019-03-04 08:43:42', '2019-03-04 01:43:42'),
(47, 4, 3, 'bazaar-pameran-produk-pmi-purna-sebagai-implementasi-uu-182017-untuk-kesejahteraan-pmi-purna', 'Bazaar Pameran Produk PMI Purna sebagai Implementasi UU 18/2017 untuk Kesejahteraan PMI Purna', '<p><strong>Jakarta, BNP2TKI (28/2/19)</strong> __ Balai Pelayanan Penempatan Perlindungan Tenaga Kerja Indonesia (BP3TKI) Jakarta mengadakan kegiatan Talkshow Kewirausahaan dan Pameran Produk PMI Purna, bertempat di Gedung Menara Hijau. Acara yang berlangsung selama dua hari, dimulai dari Rabu (27/02) hingga Kamis (28/02) ini merupakan kegiatan tahunan dari BP3TKI Jakarta yang sudah dilakukan mulai dari 2018 lalu di tempat yang sama.<br /><br />Kegiatan ini dihadiri oleh pihak internal BNP2TKI, Ketua Dharma Wanita, Marita Tatang Razak beserta jajaran Dharma Wanita lainnya, Pembina Koperasi Purna BP3TKI Jakarta, Koperasi Purna Nusantara, yang juga mantan Deputi Bidang Perlindungan BNP2TKI, Lisna Yuliani Pulungan beserta stakeholders terkait, diantaranya Dinas Tenaga Kerja Provinsi DKI Jakarta, Bank BNI 46 dan BPJS Ketenagakerjaan Ceger, Jakarta Timur.&nbsp;<br /><br />Acara ini diikuti oleh total 25 stan dari Pekerja Migran Indonesia (PMI) Purna yang kebanyakan merupakan PMI Purna binaan BP3TKI Jakarta. Sebanyak 20 PMI Purna berasal dari Jakarta dan 5 lainnya berasal dari Lampung, Tangerang, Karawang, Jogjakarta dan Surabaya.<br />&nbsp;<br />Mucharom Ashadi, Kepala BP3TKI Jakarta dalam sambutannya menyatakan bahwa tujuan kegiatan ini untuk memfasilitasi PMI Purna agar dapat memperkenalkan produk-produk mereka kepada masyarakat luas serta dapat meningkatkan semangat para PMI purna dalam berwirausaha.&nbsp;<br /><br />\"Kegiatan ini merupakan salah satu bentuk amalan dari Undang-Undang 18 tahun 2017 tentang Pelindungan PMI, disebutkan didalamnya bahwa pemerintah pusat dan daerah mempunyai kewajiban untuk memberikan pelindungan PMI paska penempatan dengan pemberdayaan PMI purna dan keluarganya.\" Implementasinya adalah dengan Bazar pameran produk-produk PMI purna ini, sebagai hasil dari pelatihan bimtek pemberdayaan yang dilakukan oleh BP3TKI Jakarta, sebut Mucharom.<br /><br />Pembukaan kegiatan ini didahului oleh sambutan Deputi Perlindungan, Anjar Prihantoro Budi Winarso, disebutkan olehnya bahwa BNP2TKI mempunyai visi terwujudnya PMI yang profesional, bermartabak dan sejahtera. \"Event ini merupakan langkah awal dari terwujudnya visi tersebut, dengan bazar ini menjadi salah satu cara dalam peningkatan konsumsi atau comsumption development dalam kehidupan perekonomian negara.\"<br /><br />Anjar menambahkan bahwa pemberdayaan PMI purna dan keluarganya merupakan support pemerintah terhadap calon pelaku usaha untuk dapat mensejahterakan kehidupan dirinya dan keluarganya serta lingkungan sekitarnya. Kesejahteraan adalah tujuan yang ingin dicapai bagi para PMI purna ini. \"Walaupun skala kegiatan ini masih relatif kecil, tapi sebetulnya acaranya ini memberikan banyak manfaat secara langsung, multiplier effect yang diciptakan akan menjadi besar dengan cara memanfaatkan jejaring yang dimiliki oleh PMI sehinggal minimal, kesejahteraan dirinya dan keluarganya serta lingkungan sekitarnya dapat terjamin,\" tutup Anjar. __ <em><strong>(Humas/LDA)</strong></em></p>', 'Berita', 'Publish', 'IMG_9295.JPG', '2019-03-04 09:10:30', '2019-03-04 02:10:30'),
(48, 4, 3, 'masih-berlangsung-gelaran-pameran-produk-pmi-purna-bp3tki-jakarta-raup-omset-25-juta', 'Masih Berlangsung, Gelaran Pameran Produk PMI Purna BP3TKI Jakarta Raup Omset 25 Juta', '<p><strong>Jakarta, BNP2TKI, Jakarta (28/02)</strong> - Gelaran Bazaar dan Pameran Produk Pekerja Migran Indonesia (PMI) Purna Balai Pelayanan Penempatan dan Perlindungan Tenaga Kerja Indonesia (BP3TKI) Jakarta memasuki hari kedua, Kamis (28/02) ini. Setelah kemarin diresmikan oleh Deputi Perlindungan BNP2TKI Anjar Prihantoro Budi Winarso, hari ini kegiatan fokus dengan penjualan produk PMI Purna yang hingga kini beromset 25 juta rupiah.<br /><br />Masih berlangsung kegiatan yang juga berbalut dengan talkshow, kali ini hadir Usaha Mikro Kecil Menengah (UMKM) Belimbing yang memberikan arahan mengenai bisnis warung secara &nbsp;online dan pengajaran mengenai sistem kasir online. Pengajaran semacam ini jelas sangat bermanfaat bagj PMI Purna khusunya untuk pencatatan alur keluar masuk keuangan dalam produksi.<br /><br />Kepala BP3TKI Jakarta, Mucharom Ashadi menjelaskan bahwa BP3TKI Jakarta berusaha semaksimal mungkin untuk membuat PMI Purna naik kelas. \"Kami berusaha untuk membuat PMI Purna naik kelas, tentunya dengan perluasan jaringan usaha, dan peningkatan kemampuan dalam pengelolaan dan pencatatan &nbsp;hasil penjualan produk\", jelasnya.<br /><br />Dalam kegiatan ini, tercatat pula beberapa stand yang akhirnya bekerjasama dengan PT.Gojek Indonesia khusunya dalam transaksi elektronik gopay. Jaya dan Eni merupakan PMI Purna yang ikut bergabung dalam sistem gopay.<br /><br />\"Untungnya sih kemudahan dalam bertransaksi ya, khususnya bagi anak muda kan maunya langsung kirim barcode saja dan transaksi selesai\", tutur PMI Purna yang memproduksi aneka brownies dan macaroni schoetel ini. <em><strong>(Humas/BP3TKI Jakarta/pw)</strong></em> </p>', 'Berita', 'Publish', 'IMG_9318.JPG', '2019-03-04 09:11:29', '2019-03-04 02:11:29');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_berita`
--

CREATE TABLE `kategori_berita` (
  `id_kategori_berita` int(11) NOT NULL,
  `slug_kategori_berita` varchar(255) NOT NULL,
  `nama_kategori_berita` varchar(255) NOT NULL,
  `keterangan` text,
  `urutan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_berita`
--

INSERT INTO `kategori_berita` (`id_kategori_berita`, `slug_kategori_berita`, `nama_kategori_berita`, `keterangan`, `urutan`) VALUES
(3, 'bp3tki', 'BP3TKI', 'Berita BP3TKI', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kategori_produk`
--

CREATE TABLE `kategori_produk` (
  `id_kategori_produk` int(11) NOT NULL,
  `slug_kategori_produk` varchar(255) NOT NULL,
  `nama_kategori_produk` varchar(255) NOT NULL,
  `keterangan` text,
  `urutan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_produk`
--

INSERT INTO `kategori_produk` (`id_kategori_produk`, `slug_kategori_produk`, `nama_kategori_produk`, `keterangan`, `urutan`) VALUES
(3, 'cacing', 'Cacing', '', 2),
(4, 'ikan-lele', 'Ikan Lele', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `konfigurasi`
--

CREATE TABLE `konfigurasi` (
  `id_konfigurasi` int(11) NOT NULL,
  `home_setting` varchar(20) NOT NULL,
  `namaweb` varchar(200) NOT NULL,
  `tagline` varchar(200) DEFAULT NULL,
  `tentang` varchar(500) DEFAULT NULL,
  `gambar` text,
  `video` varchar(50) DEFAULT NULL,
  `yacht` text NOT NULL,
  `website` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `alamat` varchar(400) DEFAULT NULL,
  `telepon` varchar(50) DEFAULT NULL,
  `hp` varchar(50) DEFAULT NULL,
  `fax` varchar(50) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `keywords` varchar(400) DEFAULT NULL,
  `metatext` text,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `google_map` text,
  `judul_1` varchar(200) DEFAULT NULL,
  `pesan_1` varchar(200) DEFAULT NULL,
  `judul_2` varchar(200) DEFAULT NULL,
  `pesan_2` varchar(200) DEFAULT NULL,
  `judul_3` varchar(200) DEFAULT NULL,
  `pesan_3` varchar(200) DEFAULT NULL,
  `judul_4` varchar(200) DEFAULT NULL,
  `pesan_4` varchar(200) DEFAULT NULL,
  `judul_5` varchar(200) DEFAULT NULL,
  `pesan_5` varchar(200) NOT NULL,
  `judul_6` varchar(200) DEFAULT NULL,
  `pesan_6` varchar(200) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konfigurasi`
--

INSERT INTO `konfigurasi` (`id_konfigurasi`, `home_setting`, `namaweb`, `tagline`, `tentang`, `gambar`, `video`, `yacht`, `website`, `email`, `alamat`, `telepon`, `hp`, `fax`, `logo`, `icon`, `keywords`, `metatext`, `facebook`, `twitter`, `instagram`, `google_map`, `judul_1`, `pesan_1`, `judul_2`, `pesan_2`, `judul_3`, `pesan_3`, `judul_4`, `pesan_4`, `judul_5`, `pesan_5`, `judul_6`, `pesan_6`, `id_user`, `tanggal`) VALUES
(1, 'Image', 'BP3TKI JAKARTA', NULL, NULL, 'Seven_Seas_Upper_Deck1.jpg', 'fsH_KhUWfho', '<p>Through the adoption of a proactive stance, the astute manager can adopt a position at the vanguard. In order to build a shared view of what can be improved, to experience a profound paradigm shift, that will indubitably lay the firm foundations for any leading company. Exploitation of core competencies as an essential enabler, exploiting the productive lifecycle by moving executive focus from lag financial indicators to more actionable lead indicators.</p>\r\n<p>An investment program where cash flows exactly match shareholders\' preferred time patterns of consumption defensive reasoning, the doom loop and doom zoom highly motivated participants contributing to a valued-added outcome. In order to build a shared view of what can be improved, in a collaborative, forward-thinking venture brought together through the merging of like minds. Combined with optimal use of human resources, from binary cause and effect to complex patterns, working through a top-down, bottom-up approach. Maximization of shareholder wealth through separation of ownership from management measure the process, not the people. While those at the coal face don\'t have sufficient view of the overall goals.</p>\r\n<p>Whenever single-loop learning strategies go wrong, to focus on improvement, not cost, in order to build a shared view of what can be improved. An important ingredient of business process reengineering that will indubitably lay the firm foundations for any leading company the new golden rule gives enormous power to those individuals and units. Whenever single-loop learning strategies go wrong, building a dynamic relationship between the main players. Organizations capable of double-loop learning, through the adoption of a proactive stance, the astute manager can adopt a position at the vanguard.</p>\r\n<p>To ensure that non-operating cash outflows are assessed. An important ingredient of business process reengineering big is no longer impregnable to experience a profound paradigm shift. The new golden rule gives enormous power to those individuals and units, while those at the coal face don\'t have sufficient view of the overall goals. Taking full cognizance of organizational learning parameters and principles, working through a top-down, bottom-up approach, an investment program where cash flows exactly match shareholders\' preferred time patterns of consumption. Big is no longer impregnable in a collaborative, forward-thinking venture brought together through the merging of like minds.</p>\r\n<p>Through the adoption of a proactive stance, the astute manager can adopt a position at the vanguard. The three cs - customers, competition and change - have created a new world for business motivating participants and capturing their expectations, organizations capable of double-loop learning. To focus on improvement, not cost, exploiting the productive lifecycle taking full cognizance of organizational learning parameters and principles. Presentation of the process flow should culminate in idea generation, the balanced scorecard, like the executive dashboard, is an essential tool quantitative analysis of all the key ratios has a vital role to play in this.</p>\r\n<p> </p>', 'http://www.bp3tkijakarta.com', 'info@bp3tkijakarta.com', 'Jl. Pengantin Ali No.71, Ciracas, RT.8/RW.6, Ciracas, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13740', '021 - 8778140', NULL, '021 - 877184 ', 'logo2.png', 'Logo_Baru_BNP2TKI_(1)11.png', 'BP3TKI Jakarta', '', 'https://www.facebook.com/pelayanan.tki.54', 'https://www.youtube.com/channel/UCYR3MSAeuPhjL24fepBm70A', 'https://www.instagram.com/kantorBP3TKIjkt/', '			<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5608.186078162864!2d106.87814781814812!3d-6.317932515468355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ed1345e63b09%3A0x1812c8b32e045f2c!2sBP3TKI!5e0!3m2!1sen!2sid!4v1510653222952\" width=\"100%\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 'MEMBANGUN BUDAYA PERUSAHAAN', 'BUDAYA', 'MEMBANGUN BUDAYA PELAYANAN', 'TEPAT WAKTU', 'MENINGKATKAN PELAYANAN CALL CENTER', 'HEMAT', 'PROGRAM PENDIDIKAN KHUSUS', 'MURAH', 'PROGRAM SEMITAINMENT TRAINING', 'DIJAMIN BISA', 'JUNGGLE SURVIVAL TRAINING', 'YA SUDAHLAH', 4, '2019-06-18 14:06:46');

-- --------------------------------------------------------

--
-- Table structure for table `penempatan2016`
--

CREATE TABLE `penempatan2016` (
  `asiapasifik` varchar(255) NOT NULL,
  `timurtengah` varchar(255) NOT NULL,
  `lainlain` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `penempatan2016`
--

INSERT INTO `penempatan2016` (`asiapasifik`, `timurtengah`, `lainlain`) VALUES
('42607', '11150', '231');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kategori_produk` int(11) NOT NULL,
  `slug_produk` varchar(255) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `satuan` varchar(20) NOT NULL,
  `status_produk` varchar(20) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tanggal_post` datetime NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `id_user`, `id_kategori_produk`, `slug_produk`, `nama_produk`, `keterangan`, `harga`, `stok`, `satuan`, `status_produk`, `gambar`, `tanggal_post`, `tanggal`) VALUES
(1, 2, 3, 'cacing-pita', 'Cacing pita', '<p>adada</p>', 12000, 12000, 'Ekor', 'Publish', 'owl6.jpg', '2016-06-20 04:27:19', '2016-08-04 02:20:44'),
(2, 2, 4, 'kambing-otawa', 'Kambing Otawa', '<p>Kambing Otawa</p>', 12000, 12, 'Kilogram', 'Publish', 'owl3.jpg', '2016-06-20 04:53:40', '2016-08-04 02:20:35'),
(3, 2, 4, 'ikan-lele-dumbo-baru', 'Ikan Lele Dumbo baru', '<p>Ikan Lele Dumbo</p>', 24000, 100, 'Kilogram', 'Publish', 'owl21.jpg', '2016-06-20 04:58:41', '2016-08-04 02:20:30');

-- --------------------------------------------------------

--
-- Table structure for table `struktur_organisasi`
--

CREATE TABLE `struktur_organisasi` (
  `id_konfigurasi` int(11) NOT NULL,
  `organisasi_1` text,
  `organisasi_2` text,
  `organisasi_3` text,
  `organisasi_4` text,
  `organisasi_5` text,
  `id_user` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `struktur_organisasi`
--

INSERT INTO `struktur_organisasi` (`id_konfigurasi`, `organisasi_1`, `organisasi_2`, `organisasi_3`, `organisasi_4`, `organisasi_5`, `id_user`, `tanggal`) VALUES
(1, 'organisasi_1.jpg', 'organisasi_2.jpg', 'organisasi_3.jpg', 'organisasi_4.jpg', 'organisasi_5.jpg', 0, '2019-07-01 03:28:11');

-- --------------------------------------------------------

--
-- Table structure for table `tentang`
--

CREATE TABLE `tentang` (
  `id_konfigurasi` int(11) NOT NULL,
  `visi` text,
  `misi` text,
  `sejarah` text,
  `kedudukan_1` text,
  `kedudukan_2` text,
  `tugas` text,
  `fungsi` text,
  `id_user` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tentang`
--

INSERT INTO `tentang` (`id_konfigurasi`, `visi`, `misi`, `sejarah`, `kedudukan_1`, `kedudukan_2`, `tugas`, `fungsi`, `id_user`, `tanggal`) VALUES
(1, 'Mewujudkan Pelayanan Penempatan dan Perlindungan TKI yang Berkualitas dan Bermartabat', '1. Memberikan pelayanan dokumen CTKI yang akan berangkat ke luar negeri melalui SPPKTKLN/SISKOTKLN<br />\r\n2. Memberikan pelayanan informasi pasar kerja luar negeri<br />\r\n3. Memberikan pelayanan pembinaan terhadap PPTKIS/Kantor Cabang, BLKLN, dan tempat penampungan TKI dalam upaya pemantapan peningkatan kualitas TKI<br />\r\n4. Memberikan pelayanan perlindungan dan bantuan hukum bagi TKI yang bermasalah, baik pada saat pra, masa dan purna penempatan<br />\r\n5. Melakukan peningkatan SDM BP3TKI Jakarta dan sarana penunjang', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla feugiat ligula nec justo tincidunt ultricies. In semper dolor a quam sagittis sodales. Etiam dolor nunc, ornare quis velit bibendum, faucibus sagittis metus. Aliquam tempor, odio at lobortis faucibus, enim tortor pharetra metus, vitae vehicula sem lacus ut mauris. Pellentesque odio leo, efficitur et pulvinar id, egestas vel sapien. Mauris laoreet turpis sed imperdiet gravida. Proin dignissim orci tempus purus gravida, ut scelerisque dolor molestie. In at libero lacinia, mollis arcu sodales, mattis turpis. Suspendisse potenti. Phasellus bibendum dictum purus quis porttitor. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.<br />\r\n<br />\r\nVivamus a ligula mi. Nam varius odio ac neque maximus fermentum. Quisque ut tellus placerat, sollicitudin nisi vel, condimentum mi. Praesent eget justo et sem tincidunt cursus sed eleifend neque. Aenean sollicitudin orci a sollicitudin tristique. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec malesuada, nulla sit amet rutrum malesuada, mi ipsum malesuada dolor, vel aliquet felis lorem vitae est. Suspendisse non vehicula nibh. Maecenas at quam ipsum. Ut eget justo et velit ullamcorper varius vulputate efficitur nibh. Donec augue erat, porta et velit a, aliquet molestie odio. Nunc dapibus justo nec justo fringilla semper.<br />\r\n<br />\r\nFusce ut venenatis nisl, auctor scelerisque odio. Vestibulum efficitur viverra dui, eget maximus velit consequat in. Vivamus sed tincidunt risus, eget consectetur ipsum. Nam ultricies quam nec odio dictum, id congue nisl sodales. Cras et tempus magna. Aliquam quis egestas turpis. Aliquam dictum libero in tortor varius porttitor.<br />\r\n<br />\r\nSed sed sem eu risus vehicula auctor at id diam. Mauris malesuada justo ac tellus sodales, vitae tempus lacus ultricies. In pellentesque tellus at commodo scelerisque. Curabitur ultrices dolor augue, vel consectetur nibh pellentesque venenatis. Nullam a nunc pretium, semper eros sed, luctus eros. Quisque nec purus aliquam libero laoreet iaculis. Praesent vehicula bibendum enim sit amet lacinia. In eget eros leo. Suspendisse potenti. Integer id faucibus arcu. Fusce varius nunc non nisi tristique, vel interdum diam malesuada. Ut dictum enim at augue rutrum, ut tincidunt lacus tempor.<br />\r\n<br />\r\nCras vehicula ante eros, in aliquet lorem aliquet non. Duis ipsum sem, rhoncus a lectus ut, fermentum sagittis ex. Praesent iaculis augue auctor risus pulvinar ultricies. Sed rhoncus a ex ac scelerisque. Etiam ultricies gravida posuere. Nullam non arcu hendrerit, tristique massa sed, volutpat tellus. Aenean ornare mi ac urna iaculis, in consequat ante pretium. Fusce commodo purus non purus lacinia condimentum. Ut cursus venenatis ultricies. Quisque bibendum, felis euismod efficitur dapibus, quam neque aliquet diam, id fermentum diam justo eu elit. Duis dignissim non risus at aliquam. Mauris in erat semper, consequat eros ac, condimentum mi. Maecenas lorem neque, aliquam a felis ut, lobortis congue purus. Sed non ex eu ligula pharetra accumsan ut at turpis.', 'Badan Nasional Penempatan dan Perlindungan Tenaga Kerja Indonesia (BNP2TKI) merupakan lembaga Pemerintah Non Kementerian yang bertanggung jawab kepada Presiden.', 'Balai Pelayanan Penempatan dan Perlindungan Tenaga Kerja Indonesia (BP3TKI) Jakarta sebagai Unit Pelaksana Teknis di lingkungan Badan Nasional Penempatan dan Perlindungan Tenaga Kerja Indonesia (BNP2TKI) berada di bawah dan bertanggung jawab kepada Kepala BNP2TKI melalui Sekretaris Utama secara administrasi dan melalui Deputi secara teknis sesuai dengan bidang tugas masing-masing.', 'Unit pelaksana teknis Pelayanan Penempatan dan Perlindungan Tenaga Kerja Indonesia mempunyai tugas memberikan kelancaran dan kemudahan dalam Pelayanan Penempatan dan Perlindungan, serta penyelesaian masalah Tenaga Kerja Indonesia (TKI) secara terkoordinasi dan terintegrasi diwilayah kerjanya masing-masing.', 'Dalam melaksanakan tugas sebagaimana dimaksud dalam pasal 2, unit Pelaksana Teknis Pelayanan Pelayanan Penempatan dan Perlindungan TKI menyelenggarakan fungsi: <br />\r\n1. Penyusunan rencana, program, dan anggaran<br />\r\n2. Pembinaan, pemantauan, dan evaluasi kinerja lembaga yang terkait dengan Penempatan dan Perlindungan TKI<br />\r\n3. Permasyarakatan Program Penempatan dan Perlindungan TKI<br />\r\n4. Pemetaan suplay dan potensi serta harmonisasi kualitas calon TKI<br />\r\n5. Pendaftaran dan seleksi calon TKI (bagi Penempatan oleh Pemerintah)<br />\r\n6. Verifikasi dokumen Penempatan dan Perlindungan TKI<br />\r\n7. Pelaksanaan Pembekalan Akhir Pemberangkatan (PAP)<br />\r\n8. Pelayanan penerbitan Kartu Tenaga Kerja Luar Negeri (KTKLN)<br />\r\n9. Pengelolaan data dan informasi Penempatan dan Perlindungan TKI<br />\r\n10. Pemantauan Penempatan dan Perlindungan TKI di Negara Penempatan berkoordinasi dengan Perwakilan RI<br />\r\n11. Pelaksanaan mediasi, advokasi, dan penyelesaian masalah TKI<br />\r\n12. Pelaksanaan pemberdayaan warga Negara Indonesia overstayer (WNIO)/TKI bermasalah (TKI-B)/TKI Purna dan keluarganya<br />\r\n13. Pelaksanaan evaluasi dan penyusunan laporan pelaksanaan Penempatan dan Perlindungan TKI dan n.Pelaksanaan urusan Tata Usaha dan Rumah Tangga unit pelaksana teknis.', 4, '2019-06-18 14:11:29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(150) NOT NULL,
  `akses_level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama`, `email`, `username`, `password`, `akses_level`) VALUES
(4, 'Administrator', 'admin@bp3tkijakarta.com', 'admin', '$2y$10$7BxnOzXuHRDvpFOV9rKim.nC0o0xlnW9jx8at.84Y7iHpTZV6bU3K', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id_video` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `posisi` varchar(20) NOT NULL,
  `keterangan` text,
  `video` varchar(200) NOT NULL,
  `urutan` int(11) DEFAULT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id_video`, `judul`, `posisi`, `keterangan`, `video`, `urutan`, `id_user`, `tanggal`) VALUES
(1, 'ada', 'Homepage', NULL, 'dTA3-GxQyks', 1, 1, '2016-10-13 02:14:41'),
(2, 'Video tutorial', 'Homepage', NULL, 'uNdvaTZiOHo', 1, 1, '2016-10-13 02:14:46'),
(3, 'PMI PURNA BINAAN BP3TKI JAKARTA - RODIATUL ADAWIYAH', 'Video', NULL, 'https://www.youtube.com/watch?v=i9zmmj4Wzb0&t=2s', 2, 4, '2018-12-26 02:03:15'),
(4, 'TALKSHOW, PAMERAN PRODUK PEKERJA MIGRAN INDONESIA PURNA DAN PASAR MURAH', 'Video', NULL, 'https://www.youtube.com/watch?v=BOl3V_1Gwmw&t=619s', 5, 4, '2019-03-05 02:04:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `kategori_berita`
--
ALTER TABLE `kategori_berita`
  ADD PRIMARY KEY (`id_kategori_berita`);

--
-- Indexes for table `kategori_produk`
--
ALTER TABLE `kategori_produk`
  ADD PRIMARY KEY (`id_kategori_produk`);

--
-- Indexes for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  ADD PRIMARY KEY (`id_konfigurasi`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `struktur_organisasi`
--
ALTER TABLE `struktur_organisasi`
  ADD PRIMARY KEY (`id_konfigurasi`);

--
-- Indexes for table `tentang`
--
ALTER TABLE `tentang`
  ADD PRIMARY KEY (`id_konfigurasi`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id_video`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `kategori_berita`
--
ALTER TABLE `kategori_berita`
  MODIFY `id_kategori_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `kategori_produk`
--
ALTER TABLE `kategori_produk`
  MODIFY `id_kategori_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  MODIFY `id_konfigurasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `struktur_organisasi`
--
ALTER TABLE `struktur_organisasi`
  MODIFY `id_konfigurasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tentang`
--
ALTER TABLE `tentang`
  MODIFY `id_konfigurasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id_video` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
