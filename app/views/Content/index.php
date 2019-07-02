<section class="home">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-sm-12 col-xs-12">
						<div class="headline">
							<div class="nav" id="headline-nav">
								<a class="left carousel-control" role="button" data-slide="prev">
									<span class="ion-ios-arrow-left" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="right carousel-control" role="button" data-slide="next">
									<span class="ion-ios-arrow-right" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								</a>
							</div>
							<div class="owl-carousel owl-theme" id="headline">
									{slide}
									<div class="item">
										<marquee behavior="scroll" direction="left"><a href="<?=$base_url?>berita/r/{slug_berita}"><div class="badge">BERITA TERKINI!</div><b>{nama_berita}</b></a></marquee>
									</div>
										{/slide}
								<!-- <div class="item">
									<marquee behavior="scroll" direction="left"><a href="#"><div class="badge">BERITA TERKINI!</div><b>SELAMAT HARI PAHLAWAN NASIONAL 2018</b></a></marquee>
								</div>
								<div class="item">
									<marquee behavior="scroll" direction="left"><a href="#"><div class="badge">BERITA TERKINI!</div><b>INFORMASI KENAIKAN HARGA VISA PEKERJA MIGRAN INDONESIA TAIWAN</b></a></marquee>
								</div>
								<div class="item">
									<marquee behavior="scroll" direction="left"><a href="#"><div class="badge">BERITA TERKINI!</div><b>PENYUSUNAN LAKIP TAHUN ANGGARAN 2017 DAN MENYUSUN TARGET KINERJA TAHUN 2018 BP3TKI JAKARTA</b></a></marquee>
								</div>
								<div class="item">
									<marquee behavior="scroll" direction="left"><a href="#"><div class="badge">BERITA TERKINI!</div><b>TINGKATKAN KEHADIRAN, BP3TKI SELENGGARAKAN SOSIALISASI PELUANG KERJA<b></a></marquee>
								</div> -->
							</div>
						</div>
						<div class="owl-carousel owl-theme slide" id="featured">
							{slide}
							<div class="item">
								<article class="featured">
									<div class="overlay"></div>
									<figure>
										<img src="<?=base_url()?>assets/upload/image/{gambar}">
									</figure>
									<div class="details">
										<div class="category"><a href="category.php">{nama_kategori_berita}</a></div>
										<h1><a href="<?=$base_url?>berita/r/{slug_berita}">{nama_berita}</a></h1>
										<div class="time">{tanggal_post}</div>
									</div>
								</article>
							</div>
							{/slide}
						</div>
						<div class="line">
							<div>Berita BP3TKI Jakarta</div>
						</div>
						<div class="row">
						<?php foreach($list as $key => $value) {?>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<?php foreach($value as $k => $v) {?>
								<div class="row">
									<article class="article col-md-12">
										<div class="inner">
											<figure style="height:150px">
												<a href="<?=$base_url?>berita/r/<?=$v->slug_berita?>">
													<img src="<?=base_url()?>assets/upload/image/<?=$v->gambar?>">
												</a>
											</figure>
											<div class="padding">
												<div class="detail">
													<div class="time"><?=$v->tanggal_post?></div>
													<div class="category"><a href="category.php"><?=$v->nama_kategori_berita?></a></div>
												</div>
												<h2><a href="<?=$base_url?>berita/r/<?=$v->slug_berita?>"><?=$v->nama_berita?></a></h2>
												<?=$v->isi_berita?>
												<footer>
													<a class="btn btn-primary more" href="<?=$base_url?>berita/r/<?=$v->slug_berita?>">
														<div>More</div>
														<div><i class="ion-ios-arrow-thin-right"></i></div>
													</a>
												</footer>
											</div>
										</div>
									</article>
								</div>
								<?php } ?>
							</div>
							<?php }?>

						</div>
						<div class="banner">
							<a href="index.php">
								<img src="{base_url}assets/images/logo.png" alt="Logo" height="150px" width="550px"><br>
							</a>
						</div>

						<!--- GRAFIK CHART --->
						<div class="row">
							<div class="col-md-6">
								<center><h6>Penempatan Tahun 2018</h6></center>
							    <canvas id="rekapitulasi2018" height="350"></canvas>
							  </div>
							  <div class="col-md-6">
							  	<center><h6>Berdasarkan Gender Tahun 2018</h6></center>
							    <canvas id="gender2018" height="250"></canvas>
						 </div>
						</div>
						<!--- GRAFIK CHART END --->

						<div class="line top">
							<div>Berita BNP2TKI</div>
						</div>
						<div class="row">
							<article class="col-md-12 article-list">
								<div class="inner">
									<figure>
										<a href="single.php">
											<img src="{base_url}assets/images/korsel.jpg" alt="Sample Article" height="195px">
										</a>
									</figure>
									<div class="details">
										<div class="detail">
											<div class="category">
												<a href="index.php">BNP2TKI</a>
											</div>
											<div class="time">November 18, 2018</div>
										</div>
										<h1><a href="single.php">PMI Korsel Tolak Narkoba dan Radikalisme</a></h1>
										<p>
										Gimhae, BNP2TKI (17/11/2018) -- Badan Nasional Penempatan dan Perlindungan Tenaga Kerja Indonesia (BNP2TKI) bersama Perwakilan Republik Indonesia untuk Korea Selatan di Seoul menyelenggarakan Forum Group Discussion (FGD).
										</p>
										<footer>
											<a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div>273</div></a>
											<a class="btn btn-primary more" href="single.php">
												<div>More</div>
												<div><i class="ion-ios-arrow-thin-right"></i></div>
											</a>
										</footer>
									</div>
								</div>
							</article>
							<article class="col-md-12 article-list">
								<div class="inner">
									<figure>
										<a href="single.php">
											<img src="{base_url}assets/images/pembinaan.jpg" alt="Sample Article">
										</a>
									</figure>
									<div class="details">
										<div class="detail">
											<div class="category">
												<a href="#">BNP2TKI</a>
											</div>
											<div class="time">November 22, 2018</div>
										</div>
										<h1><a href="single.php">BNP2TKI Lakukan Pembinaan P3MI se-Indonesia (I)</a></h1>
										<p>
										Surabaya, BNP2TKI (22/11/18) – BNP2TKI melalui Kedeputian Penempatan mengundang seluruh Perusahaan Penempatan Pekerja Migran Indonesia (P3MI).
										</p>
										<footer>
											<a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div>4209</div></a>
											<a class="btn btn-primary more" href="single.php">
												<div>More</div>
												<div><i class="ion-ios-arrow-thin-right"></i></div>
											</a>
										</footer>
									</div>
								</div>
							</article>
							<article class="col-md-12 article-list">
								<div class="inner">
									<figure>
										<a href="single.php">
											<img src="{base_url}assets/images/lantik.jpg" alt="Sample Article">
										</a>
									</figure>
									<div class="details">
										<div class="detail">
											<div class="category">
											<a href="#">BNP2TKI</a>
											</div>
											<div class="time">November 16, 2018</div>
										</div>
										<h1><a href="single.php">Pelantikan dan Pengambilan Sumpah Pejabat Tinggi BNP2TKI Tahun 2018</a></h1>
										<p>
										Jakarta, BNP2TKI, Jumat (16/11/2018) Sekretaris Utama Badan Nasional Penempatan dan Perlindungan Tenaga Kerja Indonesia (BNP2TKI).
										</p>
										<footer>
											<a href="#" class="love active"><i class="ion-android-favorite"></i> <div>302</div></a>
											<a class="btn btn-primary more" href="single.php">
												<div>More</div>
												<div><i class="ion-ios-arrow-thin-right"></i></div>
											</a>
										</footer>
									</div>
								</div>
							</article>
							<article class="col-md-12 article-list">
								<div class="inner">
									<figure>
										<a href="single.php">
											<img src="{base_url}assets/images/bali.jpg" alt="Sample Article">
										</a>
									</figure>
									<div class="details">
										<div class="detail">
											<div class="category">
												<a href="#">BNP2TKI</a>
											</div>
											<div class="time">November 14, 2016</div>
										</div>
										<h1><a href="single.php">Bersama PMI Membangun Bali</a></h1>
										<p>
										Gianyar, BNP2TKI (14/11) Kepala Dinas Tenaga Kerja Kabupaten Gianyar, Anak Agung Dalem Dajagitha  menyambut baik gagasan memberikan percepatan pelayanan dan  fasilitas kepada Pekerja Migran Indonesia.
										</p>
										<footer>
											<a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div>783</div></a>
											<a class="btn btn-primary more" href="single.php">
												<div>More</div>
												<div><i class="ion-ios-arrow-thin-right"></i></div>
											</a>
										</footer>
									</div>
								</div>
							</article>
						</div>
					</div>
					<div class="col-xs-6 col-md-4 sidebar" id="sidebar">
						<div class="sidebar-title for-tablet">Sidebar</div>
						<aside>
							<h1 class="aside-title">Profile Pejabat BP3TKI Jakarta
								<div class="carousel-nav" id="video-list-nav">
									<div class="prev"><i class="ion-ios-arrow-left"></i></div>
									<div class="next"><i class="ion-ios-arrow-right"></i></div>
								</div>
							</h1>
							<div class="aside-body">
								<ul class="video-list" data-youtube='"carousel":true, "nav": "#video-list-nav"'>
									<li><div class="row">
											<div class="column">
											  <div class="card">
												<img src="{base_url}assets/images/4.jpg" alt="Jane" style="width:50%">
												<div class="container">
												  <h5>Mucharom Ashadi S.Ag</h5>
												  <p class="title"><b>Kepala BP3TKI Jakarta</b></p>
												</div>
											 </div>
										</div>
									</li>
									<li><div class="row">
											<div class="column">
											  <div class="card">
												<img src="{base_url}assets/images/2.jpg" alt="Jane" style="width:50%">
												<div class="container">
												  <h5>Adhitya Himawan S.Sos</h5>
												  <p class="title"><b>Kepala Kelembagaan Dan Pemasyarakatan Program</b></p>
												</div>
											 </div>
										</div>
									</li>
									<li><div class="row">
											<div class="column">
											  <div class="card">
												<img src="{base_url}assets/images/1.jpg" alt="Jane" style="width:50%">
												<div class="container">
												  <h5>Togu Parulian Samarangkir ST</h5>
												  <p class="title"><b>Kepala Sub Bagian Tata Usaha</b></p>
												</div>
											 </div>
										</div>
									</li>
									<li><div class="row">
											<div class="column">
											  <div class="card">
												<img src="{base_url}assets/images/3.jpg" alt="Jane" style="width:50%">
												<div class="container">
												  <h5>Zuni Ariffianto SH</h5>
												  <p class="title"><b>Kepala Seksi Perlindungan dan Pemberdayaan</b></p>
												</div>
											 </div>
										</div>
									</li>
									<li><div class="row">
											<div class="column">
											  <div class="card">
												<img src="{base_url}assets/images/5.jpg" alt="Jane" style="width:50%">
												<div class="container">
												  <h5>Mahda Syaikhoni Suprapto SE</h5>
												  <p class="title"><b>Kepala Seksi Penyiapan Penempatan</b></p>
												</div>
											 </div>
										</div>
									</li>
								</ul>
							</div>
						</aside>
						<aside>
							<h1 class="aside-title">APLIKASI PUBLIK <a href="#" class="all">Lihat Semua <i class="ion-ios-arrow-right"></i></a></h1>
							<div class="aside-body">
							<article class="article-mini">
									<div class="inner">
										<figure>
											<a href="{base_url}infografik">
												<img src="{base_url}assets/images/graph.png" alt="Sample Article" height="60">
											</a>
										</figure>
										<div class="padding">
											<h1><a href="{base_url}infografik">Infografik Statistik BP3TKI Jakarta</a></h1>
										</div>
									</div>
								</article>
								<article class="article-mini">
									<div class="inner">
										<figure>
											<a href="{base_url}katalogpdf">
												<img src="{base_url}assets/images/pdf.png" alt="Sample Article" height="60">
											</a>
										</figure>
										<div class="padding">
											<h1><a href="{base_url}katalogpdf">Katalog PDF BP3TKI Jakarta</a></h1>
										</div>
									</div>
								</article>
								<article class="article-mini">
									<div class="inner">
										<figure>
											<a href="http://siskotkln.bnp2tki.go.id/">
												<img src="{base_url}assets/images/siskotlin.png" alt="Sample Article" height="60">
											</a>
										</figure>
										<div class="padding">
											<h1><a href="http://siskotkln.bnp2tki.go.id/">Sistem Komputerisasi Tenaga Kerja Luar Negeri (SISKOTKLN)</a></h1>
										</div>
									</div>
								</article>
								<article class="article-mini">
									<div class="inner">
										<figure>
											<a href="{base_url}">
												<img src="{base_url}assets/images/jobs.png" alt="Sample Article" height="60">
											</a>
										</figure>
										<div class="padding">
											<h1><a href="single.php">Pelayanan Jobs Info</a></h1>
										</div>
									</div>
								</article>
								<article class="article-mini">
									<div class="inner">
										<figure>
											<a href="http://www.bp3tkijakarta.com/cat/pemberdayaan/">
												<img src="{base_url}assets/images/pemb.jpeg" alt="Sample Article" height="60">
											</a>
										</figure>
										<div class="padding">
											<h1><a href="http://www.bp3tkijakarta.com/cat/pemberdayaan/">Pemberdayaan</a></h1>
										</div>
									</div>
								</article>
								<article class="article-mini">
									<div class="inner">
										<figure>
											<a href="single.php">
												<img src="{base_url}assets/images/oci.png" alt="Sample Article" height="60">
											</a>
										</figure>
										<div class="padding">
											<h1><a href="single.php">One Click Oke</a></h1>
										</div>
									</div>
								</article>
								<article class="article-mini">
									<div class="inner">
										<figure>
											<a href="http://webmail.bp3tkijakarta.com">
												<img src="{base_url}assets/images/webmail.png" alt="Sample Article" height="60">
											</a>
										</figure>
										<div class="padding">
											<h1><a href="http://webmail.bp3tkijakarta.com">Webmail BP3TKI Jakarta</a></h1>
										</div>
									</div>
								</article>
							</div>
						</aside>
						<aside>
							<div class="aside-body">
								<form class="newsletter">
									<div class="icon">
										<i class="ion-ios-email-outline"></i>
										<h1>Newsletter</h1>
									</div>
									<div class="input-group">
										<input type="email" class="form-control email" placeholder="Your mail">
										<div class="input-group-btn">
											<button class="btn btn-primary"><i class="ion-paper-airplane"></i></button>
										</div>
									</div>
									<p>By subscribing you will receive new articles in your email.</p>
								</form>
							</div>
						</aside>

						<!-- <aside>
								<h1 class="aside-title">Media Foto
									<div class="carousel-nav" id="picture-list-nav">
										<div class="prev"><i class="ion-ios-arrow-left"></i></div>
										<div class="next"><i class="ion-ios-arrow-right"></i></div>
									</div>
								</h1>
								<div class="aside-body">
									<ul class="picture-list" data-youtube='"carousel":true, "nav": "#picture-list-nav"'>
										<li><img class="mySlides" src="{base_url}assets/images/news/img01.jpg" width="100px" height="150px"></li>
										<li><img class="mySlides" src="{base_url}assets/images/news/img02.jpg" width="100px" height="150px"></li>
										<li><img class="mySlides" src="{base_url}assets/images/news/img03.jpg" width="100px" height="150px"></li>
										<li><img class="mySlides" src="{base_url}assets/images/news/img04.jpg" width="100px" height="150px"></li>
									</ul>
								</div>
							</aside> -->
							<aside>
								<h1 class="aside-title">Media Video
									<div class="carousel-nav" id="video-list-nav">
										<div class="prev"><i class="ion-ios-arrow-left"></i></div>
										<div class="next"><i class="ion-ios-arrow-right"></i></div>
									</div>
								</h1>
								<div class="aside-body">
									<ul class="video-list" data-youtube='"carousel":true, "nav": "#video-list-nav"'>
										<li><div class="text-block"><h6>Langkah Menjadi TKI prosedural</h6></div><iframe src="https://www.youtube.com/embed/-wBENWrG6BI"></iframe></li>
										<li><div class="text-block"><h6>Kepulangan TKI Secara Mandiri</h6></div><iframe src="https://www.youtube.com/embed/xg0EPpcG_jQ"></iframe></li>
										<li><div class="text-block"><h6>Penempatan TKI Program G to G Jepang</h6></div><iframe src="https://www.youtube.com/embed/CwBEGN1pEPo"></iframe></li>
										<li><div class="text-block"><h6>TKI SUKSES - Bimtek TKI Purna Angkatan I 2017- BP3TKI Jakarta. Ayo bersama jadi TKI Purna Sukses</h6></div><iframe src="https://www.youtube.com/embed/A-MjcpaoCmQ"></iframe></li>
										<li><div class="text-block"><h6>Pelayanan Pengaduan TKI Crisis Center BNP2TKI</h6></div><iframe src="https://www.youtube.com/embed/3KZaT0f_HF4"></iframe></li>
									</ul>
								</div>
							</aside>
						<aside id="sponsored">
							<h1 class="aside-title">Tautan Lainnya</h1>
							<div class="aside-body">
								<figure>
										<a href="http://siskotkln.bnp2tki.go.id/">
											<img src="{base_url}assets/images/siskotlin.png" alt="Sponsored" height="130ox" width="200px">
										</a>
								</figure>
									<br>
								<figure>
										<a href="http://jobsinfo.bp3tkijakarta.com/">
											<img src="{base_url}assets/images/jobs.png" alt="Sponsored" height="130" width="200">
										</a>
								</figure>
									<br>
								<figure>
										<a href="http://bp3tkijakarta.com/cat/pemberdayaan/">
											<img src="{base_url}assets/images/pemb.jpeg" alt="Sponsored" height="130" width="200">
										</a>
								</figure>
									<br>
								<figure>
										<a href="http://bp3tkijakarta.com/one-click/">
											<img src="{base_url}assets/images/oci.png" alt="Sponsored" height="130" width="200">
										</a>
								</figure>
							</div>
						</aside>
					</div>
				</div>
			</div>
		</section>

<section class="best-of-the-week">
			<div class="container">
				<h1><div class="text">TAUTAN</div>
					<div class="carousel-nav" id="best-of-the-week-nav">
						<div class="prev">
							<i class="ion-ios-arrow-left"></i>
						</div>
						<div class="next">
							<i class="ion-ios-arrow-right"></i>
						</div>
					</div>
				</h1>
				<div class="owl-carousel owl-theme carousel-1">
					<article class="article">
						<div class="inner">
								<a href="http://kemnaker.go.id/">
									<img src="{base_url}assets/images/logo/naker.png" alt="Sample Article" height="100px">
								</a>
						</div>
					</article>
					<article class="article">
						<div class="inner">
								<a href="https://www.kemlu.go.id">
									<img src="{base_url}assets/images/logo/kemlu.png" alt="Sample Article" height="100px">
								</a>
						</div>
					</article>
					<article class="article">
						<div class="inner">
								<a href="https://www.kemenkumham.go.id/">
									<img src="{base_url}assets/images/logo/kumham.png" alt="Sample Article" height="100px">
								</a>
						</div>
					</article>
					<article class="article">
						<div class="inner">
								<a href="https://www.kemendagri.go.id/">
									<img src="{base_url}assets/images/logo/dagri.png" alt="Sample Article" height="100px">
								</a>
						</div>
					</article>
					<article class="article">
						<div class="inner">
								<a href="http://www.kemkes.go.id/">
									<img src="{base_url}assets/images/logo/menkes.png" alt="Sample Article" height="100px">
								</a>
						</div>
					</article>
					<article class="article">
						<div class="inner">
								<a href="http://www.dephub.go.id/">
									<img src="{base_url}assets/images/logo/dephub.png" alt="Sample Article" height="100px">
								</a>
						</div>
					</article>
				</div>
			</div>
		</section>
