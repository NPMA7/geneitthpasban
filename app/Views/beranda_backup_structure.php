<!DOCTYPE html>
<html lang="en">
<head>
	<title>Web - Geneitthpasban</title>
	<meta charset="UTF-8">
	<meta name="description" content="WebUni Education Template">
	<meta name="keywords" content="webuni, education, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Icon -->   
	<link href="https://i.ibb.co/4JP59hp/Remove-bg-ai-1703506617405.png" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Lemon&family=Poppins&display=swap" rel="stylesheet">

	<!-- Stylesheets -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<link rel="stylesheet" href="css/home.css"/>
	<link rel="stylesheet" href="css/structure_backup.css"/>
	<link rel="stylesheet" href="css/gallery.css"/>
	<link rel="stylesheet" href="css/about.css"/>
	<link rel="stylesheet" href="css/contact.css"/>
</head>
<body>
<!-- Header Section -->
	<header class="header-section">
		<div>
			<div>
				<div>
                    <a href="https://www.instagram.com/geneitthpasban/" class="site-btn header-btn">Follow Us</a></li>
					<img class="site-logo" src="https://i.ibb.co/4JP59hp/Remove-bg-ai-1703506617405.png" alt=""></li>
					<nav class="main-menu">
                        <ul class="nav justify-content-center">
                            <li class="nav-item">
                                <a class="nav home" href="#home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav struktur" href="#structure" onclick="scrollAnimasi1()">Structure</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav gallery" href="#gallery">Gallery</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav about" href="#about">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav contact" href="#contact">Contact</a>
                            </li>
                        </ul>
					</nav>
				</div>
			</div>
		</div>
	</header>
<!-- Header Section End -->

<!-- Hero Section -->
    <!-- Home Page -->
        <main id="home">
            <div class="background-image"></div>
                <section class="hero-section">
                    <div class="container">
                        <div class="hero-text ">
                            <h2>TEKNIK KOMPUTER DAN JARINGAN 3</h2>
                            <h1	>SMK PASUNDAN 2 BANJARAN</h1>			
                        </div>
                    </div>
                </section>
            </div>
        </main>
    <!-- Home Page End -->
    
    <!-- Structure Page -->
        <main id="structure">
            <div class="background-image"></div>
            <section class="hero-section">
                <div class="container" id="container">
                    <div id="clock" >
                        <h1 id="time"></h1>
                        <h2 id="date"></h2>
                    </div>
                    <nav class="slider">
                        <ul class="nav justify-content-center">
    <!-- slider structure-->
                            <li class="nav-item structure">
                                <div id="BoxTree">
                                <div class="stringTree">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                    <div class="BorderTree">
                                        <span>Synsyn Solihah, S.Pd</span>
                                        <span>Gilangga Yusuf M</span>
                                        <span>N. Pasha Malik A</span>
                                        <span>Risana Syabila</span>
                                        <span>Rizki Nurahman</span>
                                        <span>Dedi Rialdi</span>
                                        <span>M. Aril Nasrullah</span>
                                        <span>Anisa Safity J</span>
                                        <span>Tendi Ikhsan</span>
                                        <span>Ardiansyah</span>
                                        <span>M. Alif Rifaldi</span>
                                        <span>All TKJ 3</span>
                                    </div>
                                    <div class="aboutTree">
                                        <span>Wali Kelas</span>
                                        <span>Ketua Kelas</span>
                                        <span>Wakil Ketua Kelas</span>
                                        <span>Absensi</span>
                                        <span>Sekertaris 2</span>
                                        <span>Bendahara</span>
                                        <span>Sekertaris 1</span>
                                        <span>Kebersihan</span>
                                        <span>Keamanan</span>
                                        <span>Keagamaan</span>
                                        <span>Peralatan</span>
                                        <span>Anggota</span>
                                    </div>
                                </div>
                                <div class="title">
                                    <a onclick="schedule()" href="#structure" class="nav sh">Mata Pelajaran</a>
                                    <a onclick="structure()" class="nav sc">Struktur Kelas</a>
                                    <a onclick="piket()" class="nav se">Piket Kelas</a>
                                </div>
                            </li>

    <!-- slider schedule  -->
                            <li class="nav-item schedule" >
                                <div class="title">
                                    <a onclick="schedule()" class="nav sh">Mata Pelajaran</a>
                                    <a onclick="structure()" class="nav sc">Struktur Kelas</a>
                                    <a onclick="piket()" class="nav se">Piket Kelas</a>
                                </div>
                                <div class="subject">
                                    <div id="Monday">               
                                        <p> - Kewirausahaan TKJ</p>				
                                        <p> - Pendidikan Agama Islam dan Budi Pekerti</p>		
                                        <p> - Teknologi Jaringan WAN</p>  
                                    </div>
                                    <div id="Tuesday">
                                        <p> - Administrasi Sistem Jaringan</p> 
                                        <p> - Teknologi Layanan Jaringan</p>
                                    </div>
                                    <div id="Wednesday">
                                        <p> - Teknologi Layanan Jaringan</p>
                                        <p> - Basa Sunda</p>
                                        <p> - Pedidikan Jasmani</p>
                                        <p> - Administrasi Insfrastruktur Jaringan</p>
                                    </div>
                                    <div id="Thursday">
                                        <p> - Produk Kreatif TKJ</p>
                                        <p> - Pendidikan Agama Islam dan Budi Pekerti</p>
                                        <p> - Bahasa Indonesia</p>
                                        <p> - Pendidikan Kewarganegaraan</p>
                                    </div>
                                    <div id="Friday">
                                        <p> - Administrasi Insfrastruktur Jaringan</p>
                                        <p> - Pendidikan Agama Islam dan Budi Pekerti</p>
                                        <p> - Bahasa Inggris</p>
                                    </div>
                                    <div id="Saturday">
                                        <p>There are no subjects today</p>
                                    </div>
                                    <div id="Sunday">
                                        <p>There are no subjects today</p>
                                    </div>  
                                </div>
                            </li>
    <!-- slider piket -->
                            <li class="nav-item piket" >
                                <div class="title">
                                    <a onclick="schedule()" class="nav sh">Mata Pelajaran</a>
                                    <a onclick="structure()" class="nav sc">Struktur Kelas</a>
                                    <a onclick="piket()" class="nav se">Piket Kelas</a>
                                </div>
                                <div class="subject">
                                    <div id="Mondays">
                                        <p>- Senin</p>
                                    </div>
                                    <div id="Tuesdays">
                                        <p>- Tuesday</p>
                                    </div>
                                    <div id="Wednesdays">
                                        <p>- Rabu</p>
                                    </div>
                                    <div id="Thursdays">
                                        <p>- Kamis</p>
                                    </div>
                                    <div id="Fridays">
                                        <p>- Jumat</p>
                                    </div>
                                    <div id="Saturdays">
                                        <p>- Saturday</p>
                                    </div>
                                    <div id="Sundays">
                                        <p>- Sunday</p>
                                    </div>
                                </div>
                            </li>
    <!-- Slider End -->
                        </ul>
                    </nav>
                </div>
            </section>
        </main>
    <!-- Structure Page End -->

    <!-- GarellyPage -->
        <main id="gallery">
            <div class="background-image"></div>
            <section class="hero-section">
                <div class="container">
                    <div class="hero-text ">
                        <h2>TEKNIK KOMPUTER DAN JARINGAN 3</h2>
                        <h1	>SMK PASUNDAN 2 BANJARAN</h1>			
                    </div>
                </div>
            </section>
        </main>
    <main id="about">
	<div class="background-image"></div>
		<section class="hero-section">
			<div class="container">
				<div class="hero-text ">
					<h2>TEKNIK KOMPUTER DAN JARINGAN 3</h2>
					<h1	>SMK PASUNDAN 2 BANJARAN</h1>			
				</div>
			</div>
		</section>
	</main>
    <main id="contact">
	<div class="background-image"></div>
		<section class="hero-section">
			<div class="container">
				<div class="hero-text ">
					<h2>TEKNIK KOMPUTER DAN JARINGAN 3</h2>
					<h1	>SMK PASUNDAN 2 BANJARAN</h1>			
				</div>
			</div>
		
		</section>
		
	</main>
	<!-- Hero section end -->
	<footer>
            <div class="environment">
                <p>Page rendered in {elapsed_time} seconds</p>
                <p>Status: <?= ENVIRONMENT ?></p>
            </div>
            <div class="copyrights">
                <p>&copy; <?= date('Y') ?> Geneitthpasban. All.</p>
            </div>
    </footer>
	

</body>
	<!--====== Javascripts ======-->
	<script src="js/clock.js"></script>
	<script src="js/slider.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</html>