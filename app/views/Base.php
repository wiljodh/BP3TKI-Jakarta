<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="description" content="BP3TKI is a HTML5 & CSS3 created based on Bootstrap 3.">
		<meta name="Willy Jodhi Sangkala" content="BP3TKI Jakarta">
		<meta name="keyword" content="bp3tki, html5, css3, template, multiple page template">
		<!-- Shareable -->
		<meta property="og:title" content="HTML5 & CSS3 BP3TKI Jakarta is based on Bootstrap 3" />
		<meta property="og:type" content="BP3TKI Website" />
		<meta property="og:url" content="https://github.com/wiljodh" />
		<meta property="og:image" content="https://github.com/wiljodh" />
		<title>BP3TKI JAKARTA &raquo; BP3TKI JAKARTA</title>
		<link rel="icon" type="image/x-icon" href="{base_url}assets/images/icon/favicon.ico"/>
		<!-- Bootstrap -->
		<link rel="stylesheet" href="{base_url}assets/scripts/bootstrap/bootstrap.min.css">
		<!-- IonIcons -->
		<link rel="stylesheet" href="{base_url}assets/scripts/ionicons/css/ionicons.min.css">
		<!-- Toast -->
		<link rel="stylesheet" href="{base_url}assets/scripts/toast/jquery.toast.min.css">
		<!-- OwlCarousel -->
		<link rel="stylesheet" href="{base_url}assets/scripts/owlcarousel/dist/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="{base_url}assets/scripts/owlcarousel/dist/assets/owl.theme.default.min.css">
		<!-- Magnific Popup -->
		<link rel="stylesheet" href="{base_url}assets/scripts/magnific-popup/dist/magnific-popup.css">
		<link rel="stylesheet" href="{base_url}assets/scripts/sweetalert/dist/sweetalert.css">
		<!-- Custom style -->
		<link rel="stylesheet" href="{base_url}assets/css/style.css">
		<link rel="stylesheet" href="{base_url}assets/css/skins/all.css">
		<link rel="stylesheet" href="{base_url}assets/css/demo.css">
		<!-- Favicon -->
		<link rel="apple-touch-icon" sizes="180x180" href="{base_url}assets/images/icon/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="{base_url}assets/images/icon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="{base_url}assets/images/icon/favicon-16x16.png">
		<link rel="manifest" href="{base_url}assets/images/icon/site.webmanifest">
		<link rel="mask-icon" href="{base_url}assets/images/icon/safari-pinned-tab.svg" color="#5bbad5">
		<meta name="msapplication-TileColor" content="#da532c">
		<meta name="theme-color" content="#ffffff">

	</head>

	<body class="skin-orange">
		<header class="primary">
			<div class="firstbar">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-12">
							<div class="brand">
								<a href="{base_url}">
									<img src="{base_url}assets/images/logo.png" alt="BP3TKILogo" width="150" height="50">
								</a>
							</div>						
						</div>
						<div class="col-md-6 col-sm-12">
							<form class="search" autocomplete="off">
								<div class="form-group">
									<div class="input-group">
										<input type="text" name="q" class="form-control" placeholder="Pencarian ...">									
										<div class="input-group-btn">
											<button class="btn btn-primary"><i class="ion-search"></i></button>
										</div>
									</div>
								</div>
								<div class="help-block">
									<ul><b>
									<?php echo date('l, d-m-Y  h:i:s a');?>
									</b></ul>
								</div>
							</form>								
						</div>
						<div class="col-md-3 col-sm-12 text-right">
							<ul class="nav-icons">
								<li><a href="{base_url}register"><i class="ion-person-add"></i><div>DAFTAR</div></a></li>
								<li><a href="{base_url}login"><i class="ion-person"></i><div>MASUK</div></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<!-- Start nav -->
			<nav class="menu">
				<div class="container">
					<div class="brand">
						<a href="#">
							<img src="{base_url}assets/images/logo.png" alt="bp3tki logo">
						</a>
					</div>
					<div class="mobile-toggle">
						<a href="#" data-toggle="menu" data-target="#menu-list"><i class="ion-navicon-round"></i></a>
					</div>
					<div class="mobile-toggle">
						<a href="#" data-toggle="sidebar" data-target="#sidebar"><i class="ion-ios-arrow-left"></i></a>
					</div>
					<div id="menu-list">
						<ul class="nav-list">
							<li class="for-tablet nav-title"><a>Menu</a></li>
							<li class="for-tablet"><a href="login.php">Login</a></li>
							<li class="for-tablet"><a href="register.php">Register</a></li>
							<li><a href="{base_url}">BERANDA</a></li>
							<li class="dropdown magz-dropdown">
								<a href="{base_url}">TENTANG KAMI<i class="ion-ios-arrow-right"></i></a>
								<ul class="dropdown-menu">
									<li><a href="{base_url}sejarah">Sejarah</a></li>
									<li><a href="{base_url}visimisi">Visi Dan Misi</a></li>
									<li><a href="{base_url}kedudukan">Kedudukan</a></li>
									<li><a href="{base_url}tugasdanfungsi">Tugas Dan Fungsi</a></li>
									<li class="dropdown magz-dropdown">
										<a href="{base_url}">Struktur & Organisasi <i class="ion-ios-arrow-right"></i></a>
										<ul class="dropdown-menu">
											<li><a href="{base_url}strukturorganisasibp3tki">Organisasi BP3TKI Jakarta</a></li>
											<li><a href="{base_url}subbagiantatausaha">Sub Bag Tata Usaha</a></li>
											<li><a href="{base_url}perlindunganpemberdayaan">Perlindungan Pemberdayaan</a></li>
											<li><a href="{base_url}penyiapanpenempatan">Penyiapan Penempatan</a></li>
											<li><a href="{base_url}kelembagaandanpemasyarakatan">Kelembagaan <br>Pemasyarakatan</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li class="dropdown magz-dropdown"><a href="{base_url}">LAYANAN PUBLIK <i class="ion-ios-arrow-right"></i></a>
								<ul class="dropdown-menu">
									<li><a href="{base_url}">Penyiapan Penempatan <i class="ion-ios-arrow-right"></i></a>
										<ul class="dropdown-menu">
											<li><a href="{base_url}pelayananlegalisasicoststructure">Pelayanan Legalisasi Cost Structure</a></li>
											<li><a href="{base_url}pelayananpenjadwalanpap">Pelayanan Penjadwalan PAP</a></li>
											<li><a href="{base_url}pelayananpmimandiri">Pelayanan PMI Mandiri</a></li>
											<li><a href="{base_url}pelayananregistrasicpmi">Pelayanan Registrasi CPMI</a></li>
											<li><a href="{base_url}pelayananukps">Pelayanan UKPS</a></li>
										</ul>
									</li>
									<li class="dropdown magz-dropdown"><a href="{base_url}">Perlindungan &<br> Pemberdayaan <i class="ion-ios-arrow-right"></i></a>
										<ul class="dropdown-menu">
											<li><a href="{base_url}pemberdayaanpmipurna">Pemberdayaan PMI Purna &<br> Labolatorium Konsultasi</a></li>
											<li><a href="{base_url}crisiscenter">Crisis Center</a></li>
										</ul>
									</li>
									<li class="dropdown magz-dropdown"><a href="{base_url}">Kelembagaan <br>& Pemasyarakatan Program <i class="ion-ios-arrow-right"></i></a>
										<ul class="dropdown-menu">
											<li><a href="{base_url}jobsinfo">Pelayanan Jobs Info</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li class="dropdown magz-dropdown">
								<a href="{base_url}">INFORMASI DAN PUBLIKASI<i class="ion-ios-arrow-right"></i></a>
								<ul class="dropdown-menu">
									<li><a href={base_url}infografik>Infografik Statistik</a></li>
									<li><a href={base_url}katalogpdf>Katalog PDF BP3TKI</a></li>
									<li><a href="{base_url}arsipberita">Arsip Berita</a></li>
									<li><a href="{base_url}galerifoto">Galeri Foto</a></li>
									<li><a href="{base_url}galerivideo">Galeri Video</a></li>
								</ul>
							</li>
							<li class="dropdown magz-dropdown">
								<a href="{base_url}">PRODUK HUKUM<i class="ion-ios-arrow-right"></i></a>
								<ul class="dropdown-menu">
									<li><a href="{base_url}undangundang">Undang-Undang</a></li>
									<li><a href="{base_url}peraturankepala">Peraturan Kepala</a></li>
									<li><a href="{base_url}suratedaran">Surat Edaran</a></li>
								</ul>
							</li>
							<li><a href="{base_url}kontakkami">KONTAK KAMI</a></li>
					</div>
				</div>
			</nav>
			<!-- End nav -->
		</header>

		{body}

		<!-- Start footer -->
		<footer class="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="block">
							<h1 class="block-title">BP3TKI JAKARTA</h1>
							<div class="block-body">
								<p class="brand-description">
									Balai Pelayanan Penempatan dan Perlindungan Tenaga Kerja Indonesia (BP3TKI) Jakarta sebagai Unit Pelaksana Teknis di lingkungan Badan Nasional Penempatan dan Perlindungan Tenaga Kerja Indonesia (BNP2TKI) berada di bawah dan bertanggung jawab kepada Kepala BNP2TKI melalui Sekretaris Utama secara administrasi dan melalui Deputi secara teknis sesuai dengan bidang tugas masing-masing.
								</p>
								<a href="page.php" class="btn btn-magz white">Tentang Kami<i class="ion-ios-arrow-thin-right"></i></a>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="block">
							<h1 class="block-title">Pencarian Populer<div class="right"><a href="#">Lihat Semua<i class="ion-ios-arrow-thin-right"></i></a></div></h1>
							<div class="block-body">
								<ul class="tags">
									<li><a href="#">BP3TKI</a></li>
									<li><a href="#">BNP2TKI</a></li>
								</ul>
							</div>
						</div>
						<div class="line"></div>
						<div class="block">
							<h1 class="block-title">Berlangganan</h1>
							<div class="block-body">
								<p>Dengan Berlangganan anda akan selalu menerima Info Terbaru dari kami melalui Email.</p>
								<form class="newsletter">
									<div class="input-group">
										<div class="input-group-addon">
											<i class="ion-ios-email-outline"></i>
										</div>
										<input type="email" class="form-control email" placeholder="Masukan Email ...">
									</div>
									<button class="btn btn-primary btn-block white">Berlangganan</button>
								</form>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="block">
							<h1 class="block-title">Aplikasi Publik</h1>
							<div class="block-body">
								<article class="article-mini">
									<div class="inner">
										<figure>
											<a href="single.php">
												<img src="{base_url}assets/images/graph.png" alt="Sample Article">
											</a>
										</figure>
										<div class="padding">
											<h1><a href="single.php">Infografik Statistik</a></h1>
										</div>
									</div>
								</article>
								<article class="article-mini">
									<div class="inner">
										<figure>
											<a href="{base_url}infografik">
												<img src="{base_url}assets/images/pdf.png" alt="Sample Article">
											</a>
										</figure>
										<div class="padding">
											<h1><a href="single.php">Katalog PDF BP3TKI Jakarta </a></h1>
										</div>
									</div>
								</article>
								<article class="article-mini">
									<div class="inner">
										<figure>
											<a href="{base_url}katalogpdf">
												<img src="{base_url}assets/images/siskotlin.png" alt="Sample Article">
											</a>
										</figure>
										<div class="padding">
											<h1><a href="http://siskotkln.bnp2tki.go.id/">Sistem Komputerisasi Tenaga Kerja Luar Negeri (SISKOTKLN) </a></h1>
										</div>
									</div>
								</article>
								<a href="#" class="btn btn-magz white btn-block">Lihat Semua <i class="ion-ios-arrow-thin-right"></i></a>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-xs-12 col-sm-6">
						<div class="block">
							<h1 class="block-title">Kunjungi Sosial Media Kami</h1>
							<div class="block-body">
								<ul class="social trp">
									<li>
										<a href="https://m.facebook.com/pelayanan.tki.54" class="facebook">
											<svg><rect width="0" height="0"/></svg>
											<i class="ion-social-facebook"></i>
										</a>
									</li>
									<li>
										<a href="https://www.youtube.com/channel/UCYR3MSAeuPhjL24fepBm70A" class="youtube">
											<svg><rect width="0" height="0"/></svg>
											<i class="ion-social-youtube-outline"></i>
										</a>
									</li>
									<li>
										<a href="https://www.instagram.com/kantorBP3TKIjkt/" class="instagram">
											<svg><rect width="0" height="0"/></svg>
											<i class="ion-social-instagram-outline"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="line"></div>
						<div class="block">
							<div class="block-body no-margin">
								<ul class="footer-nav-horizontal">
									<li><a href="{base_url}">Beranda</a></li>
									<li><a href="contact.php">Kontak Kami</a></li>
									<li><a href="page.php">Tentang Kami</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="copyright">
							© 2018 - Balai Pelayanan Penempatan dan Perlindungan Tenaga Kerja Indonesia - Jakarta						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- End Footer -->

		<!-- JS -->
		<script src="{base_url}assets/js/jquery.js"></script>
		<script src="{base_url}assets/js/jquery.migrate.js"></script>
		<script src="{base_url}assets/scripts/bootstrap/bootstrap.min.js"></script>
		<script>var $target_end=$(".best-of-the-week");</script>
		<script src="{base_url}assets/scripts/jquery-number/jquery.number.min.js"></script>
		<script src="{base_url}assets/scripts/owlcarousel/dist/owl.carousel.min.js"></script>
		<script src="{base_url}assets/scripts/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
		<script src="{base_url}assets/scripts/easescroll/jquery.easeScroll.js"></script>
		<script src="{base_url}assets/scripts/sweetalert/dist/sweetalert.min.js"></script>
		<script src="{base_url}assets/scripts/toast/jquery.toast.min.js"></script>
		<script src="{base_url}assets/js/demo.js"></script>
		<script src="{base_url}assets/js/e-magz.js"></script>
		<script src="{base_url}assets/js/autoslide.js"></script>
		<script src="{base_url}assets/js/Chart.min.js"></script>
		<script src="{base_url}assets/js/fusioncharts.theme.candy.js"></script>
		<script src="{base_url}assets/js/fusioncharts.js"></script>
		
		<script type="text/javascript">
			var ctx = document.getElementById("rekapitulasi2018").getContext('2d');
			new Chart(ctx, {
			type: 'doughnut',
			data: {
				labels: ["Brunei Darussalam", "Hongkong", "Jepang", "Kuwait", "Malaysia", "Maldives", "Papua New Guinea", "Polandia", "Qatar", "Saudi Arabia", "Singapura", "Taiwan", "UAE", "Spanyol", "Mesir", "Seychelles", "India", "Sudan", "Somalia", "Netherland", "China", "Germany", "Perancis", "Turki", "Oman", "Bahrain", "Romania", "Macau", "Bermuda", "Solomon Island", "Zambia"],
				datasets: [{
						label: '# of Votes',
						data: [3413, 2163, 7, 136, 6259, 57, 24, 29, 164, 2942, 125, 14268, 188, 1, 1, 3, 2, 1, 28, 1, 1, 10, 1, 11, 91, 5, 1, 1, 2, 4, 90],
						backgroundColor: [
								'rgb(207, 151, 66)',
								'rgb(63, 191, 63)',
								'rgb(241, 231, 95)',
								'rgb(148, 207, 46)',
								'rgb(75, 154, 207)',
								'rgb(81, 93, 207)',
								'rgb(165, 81, 207)',
								'rgb(207, 124, 204)',
								'rgb(201, 207, 180)',
								'rgb(207, 142, 118)',
								'rgb(166, 207, 139)',
								'rgb(207, 17, 74)',
								'rgb(82, 43, 57)',
								'rgb(23, 82, 43)',
								'rgb(82, 81, 65)',
								'rgb(10, 82, 77)',
								'rgb(11, 44, 82)',
								'rgb(82, 11, 73)',
								'rgb(82, 2, 4)',
								'rgb(62, 181, 97)',
								'rgb(51, 181, 172)',
								'rgb(166, 181, 107)',
								'rgb(89, 212, 80)',
								'rgb(212, 207, 74)',
								'rgb(162, 47, 212)',
								'rgb(212, 19, 109)',
								'rgb(102, 157, 212)',
								'rgb(167, 212, 193)',
								'rgb(206, 210, 212)',
								'rgb(66, 27, 171)',
								'rgb(168, 96, 171)',
						]
				}]
			}
			});
			var ctx = document.getElementById("gender2018").getContext('2d');
			new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["Laki-Laki", "Perempuan", "Grand Total"],
				datasets: [{
						label: '# of Votes',
						data: [12590, 18539, 31129],
						backgroundColor: [
								'rgb(0, 68, 204)',
								'rgb(255, 0, 0)',
								'rgb(255, 128, 0)',	
						]
				}]
			}
			});
			var ctx = document.getElementById("pp1").getContext('2d');
			new Chart(ctx, {
			type: 'doughnut',
			data: {
				labels: ["Aljazair", "Benua Afrika", "Brunei Darussalam", "Hongkong", "Korea Selatan", "Kuwait", "Malaysia", "Oman", "Qatar", "Saudi Arabia", "Singapore", "Suriah", "Taiwan", "UAE/PEA"],
				datasets: [{
						label: '# of Votes',
						data: [5, 3, 16, 21, 3, 2, 39, 5, 4, 70, 12, 1, 57, 9],
						backgroundColor: [
								'rgb(0, 68, 204)',
								'rgb(255, 0, 0)',
								'rgb(255, 128, 0)',
								'rgb(68, 204, 0)',
								'rgb(184, 0, 230)',
								'rgb(26, 198, 255)',
								'rgb(255, 153, 204)',
								'rgb(51, 153, 51)',
								'rgb(102, 0, 0)',
								'rgb(136, 162, 42)',
								'rgb(164, 238, 251)',
								'rgb(204, 0, 82)',
								'rgb(71, 71, 107)',
								'rgb(128, 128, 255)',
							
						]
				}]
			}
			});
			var ctx = document.getElementById("pp2").getContext('2d');
			new Chart(ctx, {
			type: 'doughnut',
			data: {
				labels: ["Bermasalah Lainnya", "Gagal Berangkat", "Gaji Belum Lunas", "Meninggal Dunia", "Pekerjaan Tidak Sesuai PK", "Pelecehan Seksual", "Penempatan Unprosedural","PHK Sepihak","Putus Komunikasi","Sakit/Kecelakaan Kerja"],
				datasets: [{
						label: '# of Votes',
						data: [11, 12, 42, 22, 32, 1, 12, 123, 4, 37],
						backgroundColor: [
								'rgb(0, 68, 204)',
								'rgb(255, 0, 0)',
								'rgb(255, 128, 0)',
								'rgb(68, 204, 0)',
								'rgb(184, 0, 230)',
								'rgb(26, 198, 255)',
								'rgb(255, 153, 204)',
								'rgb(51, 153, 51)',
								'rgb(102, 0, 0)',
								'rgb(128, 128, 255)',
							
						]
				}]
			}
			});
			var ctx = document.getElementById("data2018_1").getContext('2d');
			new Chart(ctx, {
			type: 'pie',
			data: {
				labels: ["L/Formal", "P/Formal", "L/Informal", "P/Informal", "Laki-Laki", "Perempuan"],
				datasets: [{
						label: '# of Votes',
						data: [10714, 1220, 0, 0, 10710, 1220],
						backgroundColor: [
								'rgb(0, 68, 204)',
								'rgb(255, 0, 0)',
								'rgb(255, 128, 0)',
								'rgb(68, 204, 0)',
								'rgb(184, 0, 230)',
								'rgb(26, 198, 255)',
								],
						borderColor: 
								[
								'rgb(255, 255, 255)',
								'rgb(255, 255, 255)',
								'rgb(255, 255, 255)',
								'rgb(255, 255, 255)',
								'rgb(255, 255, 255)',
								'rgb(255, 255, 255)',
								],
								borderWidth: 2
				}]
			}
			});
			var ctx = document.getElementById("data2018_2").getContext('2d');
			new Chart(ctx, {
			type: 'pie',
			data: {
				labels: ["Saudi Arabia", "Malaysia", "Taiwan", "Bruinei Darussalam", "Maldives", "Qatar", "Kuwait", "UAE"],
				datasets: [{
						label: '# of Votes',
						data: [583, 393, 1864, 766, 9, 22, 39, 16],
						backgroundColor: [
								'rgb(0, 68, 204)',
								'rgb(255, 0, 0)',
								'rgb(255, 128, 0)',
								'rgb(68, 204, 0)',
								'rgb(146, 104, 104)',
								'rgb(26, 198, 255)',
								'rgb(138, 151, 53)',
								'rgb(255, 102, 255)',
						]
				}]
			}
			});
		</script>
		<script>
			jQuery(document).ready(function($) {
 
			$('#myCarousel').carousel({
					interval: 5000
			});

			//Handles the carousel thumbnails
			$('[id^=carousel-selector-]').click(function () {
			var id_selector = $(this).attr("id");
			try {
				var id = /-(\d+)$/.exec(id_selector)[1];
				console.log(id_selector, id);
				jQuery('#myCarousel').carousel(parseInt(id));
			} catch (e) {
				console.log('Regex failed!', e);
			}
			});
			// When the carousel slides, auto update the text
			$('#myCarousel').on('slid.bs.carousel', function (e) {
					var id = $('.item.active').data('slide-number');
					$('#carousel-text').html($('#slide-content-'+id).html());
			});
			});
		</script>
		<script>
			    $(".video-play").on('click', function(e) {
        e.preventDefault(); 
        var vidWrap = $(this).parent(),
            iframe = vidWrap.find('.video iframe'),
            iframeSrc = iframe.attr('src'),
            iframePlay = iframeSrc += "?autoplay=1";
        vidWrap.children('.video-thumbnail').fadeOut();
        vidWrap.children('.video-play').fadeOut();
        vidWrap.find('.video iframe').attr('src', iframePlay);


    });
		</script>
	</body>
</html>