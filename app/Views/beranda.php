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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<link rel="stylesheet" href="css/home.css"/>
	<link rel="stylesheet" href="css/structure.css"/>
	<link rel="stylesheet" href="css/gallery.css"/>
	<link rel="stylesheet" href="css/about.css"/>
	<link rel="stylesheet" href="css/footer.css"/>
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
                            <h2>SMK PASUNDAN 2 BANJARAN</h2>			
                        </div>
                    </div>
                </section>
            </div>
        </main>
    <!-- Home Page End -->
    
    <!-- Structure Page -->
        <main id="structure">
            <div class="background-image">
            <section class="hero-section">
                <div class="container" id="container">
                    <div id="clock" >
                        <h1 id="time"></h1>
                        <h2 id="date"></h2>
                    </div>
                    <nav class="slider">
                        <ul class="nav justify-content-center">
                            <div class="title">
                                <a onclick="schedule()" href="#structure" class="nav sh">Mata Pelajaran</a>
                                <a onclick="structure()" href="#structure" class="nav sc">Struktur Kelas</a>
                                <a onclick="piket()" href="#structure" class="nav se">Piket Kelas</a>
                            </div>
    <!-- slider structure-->                    
                            <li class="structure">
                                <div class="structureImage">
                                    <img src="img/structure-organization.png" alt="" srcset="">
                                </div>
                            </li>
    <!-- slider schedule  -->
                            <li class="schedule" >
                                <!-- <div class="title">
                                    <a onclick="schedule()" class="nav sh">Mata Pelajaran</a>
                                    <a onclick="structure()" class="nav sc">Struktur Kelas</a>
                                    <a onclick="piket()" class="nav se">Piket Kelas</a>
                                </div> -->
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
                            <li class="piket" >
                                <!-- <div class="title">
                                    <a onclick="schedule()" class="nav sh">Mata Pelajaran</a>
                                    <a onclick="structure()" class="nav sc">Struktur Kelas</a>
                                    <a onclick="piket()" class="nav se">Piket Kelas</a>
                                </div> -->
                                <div class="subject">
                                    <div id="Mondays">
                                        <p>- Anisa Safitry</p>
                                        <p>- Dedi Rialdi</p>
                                        <p>- M. Alif Rifaldi</p>
                                        <p>- M. Aril Nassrullah</p>
                                        <p>- N. Pasha Malik</p>
                                        <p>- Rizki Nurahman</p>
                                        <p>- Ridho Bachrudin</p>
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
            </div>
        </main>
    <!-- Structure Page End -->

    <!-- GarellyPage -->
        <main id="gallery">
            <section class="hero-section">
                <div class="container text-center"> 
                    <div class="row mx-auto my-auto justify-content-center">
                        <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner text-white border border-2 rounded-5  bg-white " role="listbox">
                                <div class="carousel-indicators m-1">
                                    <button type="button" data-bs-target="#recipeCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#recipeCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#recipeCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                    <button type="button" data-bs-target="#recipeCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                    <button type="button" data-bs-target="#recipeCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
                                    <button type="button" data-bs-target="#recipeCarousel" data-bs-slide-to="5" aria-label="Slide 6"></button>
                                </div>    
                                <div class="carousel-item active">
                                    <div class="col-md-3">
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="https://i.ibb.co/MhPYMc8/IMG-20230306-WA0006.jpg" class="img-fluid">
                                            </div>
                                            <div class="card-img-overlay">1</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-md-3">
                                        <div class="card">
                                            <div class="card-img  bg-dark">
                                                <img src="https://i.ibb.co/q951jDz/IMG-20231012-WA0051.jpg" class="img-fluid">
                                                <img src="https://i.ibb.co/s5x6kmf/IMG-20230810-WA0086.jpg" class="mt-2 img-fluid">
                                            </div>
                                            <div class="card-img-overlay">2</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-md-3">
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="https://i.ibb.co/61kmxMf/IMG-20230307-WA0028.jpg" class="img-fluid">
                                            </div>
                                            <div class="card-img-overlay">3</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-md-3">
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="https://i.ibb.co/ySSY1sY/IMG-20231012-WA0052.jpg" class="img-fluid">
                                            </div>
                                            <div class="card-img-overlay">4</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-md-3">
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="https://i.ibb.co/DWCZ8fF/IMG-20230308-WA0004.jpg" class="img-fluid">
                                            </div>
                                            <div class="card-img-overlay">5</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-md-3">
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="https://i.ibb.co/zXqkYkb/IMG-20230308-WA0005.jpg" class="img-fluid">
                                            </div>
                                            <div class="card-img-overlay">6</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev galleryButton bg-primary" href="#recipeCarousel" role="button" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            </a>
                            <div class="d-flex gap-5 justify-content-center m-5">
                                <a class="text-warning text-decoration-none" href="#download">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                        <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5"/>
                                        <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708z"/>
                                    </svg>
                                    <h5 class="m-2">Download</h5>
                                </a>
                                <a class="text-info " href="#view">
                                    <h5>View All</h5>
                                </a>
                                <a class="text-warning text-decoration-none"  href="#upload">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" viewBox="0 0 16 16">
                                        <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5"/>
                                        <path d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708z"/>
                                    </svg>
                                    <h5 class="m-2">Upload</h5>
                                </a>
                            </div>
                            <a class="carousel-control-next galleryButton bg-primary" href="#recipeCarousel" role="button" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    <!-- Gallery Page End -->

    <!-- AboutPage --> 
        <main id="about">
            <section class="hero-section" >
                <div class="container-fluid py-2">
                    <div class="d-flex flex-row flex-wrap">
                        <div class="card card-body m-2">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/76301/02.png" height="150px"  class="card-img-top" alt="...">
                            <h6 style="height: 40px;">Syinsyin Solihah, S.Pd</h6>
                            <a href="#" class="text-decoration-none d-flex align-items-center fs-6"><span class="fa fa-instagram me-2 fs-2"></span>Syinsyin</a>
                        </div>
                        <div class="card card-body m-2">
                            <img src="https://i.ibb.co/hff4Hhx/IMG-20230522-WA0028.jpg" height="150px"  class="card-img-top" alt="...">
                            <h6 style="height: 40px;">Aghi Pasha Ramadhan</h6>
                            <a href="#" class="text-decoration-none d-flex align-items-center fs-6"><span class="fa fa-instagram me-2 fs-2"></span></a>
                        </div>
                        <div class="card card-body m-2">
                            <img src="https://i.ibb.co/LYZSpqr/IMG-20230523-WA0020.jpg" height="150px"  class="card-img-top" alt="...">
                            <h6 style="height: 40px;">Aip Fajri</h6>
                            <a href="#" class="text-decoration-none d-flex align-items-center fs-6"><span class="fa fa-instagram me-2 fs-2"></span></a>
                        </div>
                        <div class="card card-body m-2">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/76301/02.png" height="150px"  class="card-img-top" alt="...">
                            <h6 style="height: 40px;">Akbar Faturohman</h6>
                            <a href="#" class="text-decoration-none d-flex align-items-center fs-6"><span class="fa fa-instagram me-2 fs-2"></span></a>
                        </div>
                        <div class="card card-body m-2">
                            <img src="https://i.ibb.co/j3XYHj9/IMG-20230810-WA0061.jpg" height="150px"  class="card-img-top" alt="...">
                            <h6 style="height: 40px;">Alfath Musyaffa</h6>
                            <a href="#" class="text-decoration-none d-flex align-items-center fs-6"><span class="fa fa-instagram me-2 fs-2"></span></a>
                        </div>
                        <div class="card card-body m-2">
                            <img src="https://i.ibb.co/pj9VRMd/IMG-20230522-WA0092.jpg" height="150px"  class="card-img-top" alt="...">
                            <h6 style="height: 40px;">Andhika Kurniawan</h6>
                            <a href="#" class="text-decoration-none d-flex align-items-center fs-6"><span class="fa fa-instagram me-2 fs-2"></span></a>
                        </div>
                        <div class="card card-body m-2">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/76301/02.png" height="150px"  class="card-img-top" alt="...">
                            <h6 style="height: 40px;">Anisa Safitry Julianti</h6>
                            <a href="#" class="text-decoration-none d-flex align-items-center fs-6"><span class="fa fa-instagram me-2 fs-2"></span></a>
                        </div>
                        <div class="card card-body m-2">
                            <img src="https://i.ibb.co/nb34BGt/IMG-20230522-WA0071.jpg" height="150px"  class="card-img-top" alt="...">
                            <h6 style="height: 40px;">Ardiansyah</h6>
                            <a href="#" class="text-decoration-none d-flex align-items-center fs-6"><span class="fa fa-instagram me-2 fs-2"></span></a>
                        </div>
                        <div class="card card-body m-2">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/76301/02.png" height="150px"  class="card-img-top" alt="...">
                            <h6 style="height: 40px;">Arifin Nurdiansyah</h6>
                            <a href="#" class="text-decoration-none d-flex align-items-center fs-6"><span class="fa fa-instagram me-2 fs-2"></span></a>
                        </div>
                        <div class="card card-body m-2">
                            <img src="https://i.ibb.co/Ycv0hsK/IMG-20230512-WA0004.jpg"  height="150px"  class="card-img-top" alt="...">
                            <h6 style="height: 40px;">Ceptian Anugrah</h6>
                            <a href="#" class="text-decoration-none d-flex align-items-center fs-6"><span class="fa fa-instagram me-2 fs-2"></span></a>
                        </div>
                        <div class="card card-body m-2">
                            <img src="https://i.ibb.co/GWD8NXr/IMG-20230509-WA0008.jpg" height="150px"  class="card-img-top" alt="...">
                            <h6 style="height: 40px;">Dede Ari Nugraha</h6>
                            <a href="#" class="text-decoration-none d-flex align-items-center fs-6"><span class="fa fa-instagram me-2 fs-2"></span></a>
                        </div>
                        <div class="card card-body m-2">
                            <img src="https://i.ibb.co/5sfGLng/IMG-20230906-WA0011.jpg" height="150px"  class="card-img-top" alt="...">
                            <h6 style="height: 40px;">Dedi Rialdi</h6>
                            <a href="#" class="text-decoration-none d-flex align-items-center fs-6"><span class="fa fa-instagram me-2 fs-2"></span></a>
                        </div>
                        <div class="card card-body m-2">
                            <img src="https://i.ibb.co/YQTh0LY/IMG-20230802-WA0004.jpg" height="150px"  class="card-img-top" alt="...">
                            <h6 style="height: 40px;">Erfian Muhammad Pasha</h6>
                            <a href="#" class="text-decoration-none d-flex align-items-center fs-6"><span class="fa fa-instagram me-2 fs-2"></span></a>
                        </div>
                        <div class="card card-body m-2">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/76301/02.png" height="150px"  class="card-img-top" alt="...">
                            <h6 style="height: 40px;">Gilangga Yusuf Maulana</h6>
                            <a href="#" class="text-decoration-none d-flex align-items-center fs-6"><span class="fa fa-instagram me-2 fs-2"></span></a>
                        </div>
                        <div class="card card-body m-2">
                            <img src="https://i.ibb.co/b3m0XWT/IMG-20230529-WA0011.jpg" height="150px"  class="card-img-top" alt="...">
                            <h6 style="height: 40px;">Ilham Abisalam</h6>
                            <a href="#" class="text-decoration-none d-flex align-items-center fs-6"><span class="fa fa-instagram me-2 fs-2"></span></a>
                        </div>
                        <div class="card card-body m-2">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/76301/02.png" height="150px"  class="card-img-top" alt="...">
                            <h6 style="height: 40px;">Ilham Nur Hidayat </h6>
                            <a href="#" class="text-decoration-none d-flex align-items-center fs-6"><span class="fa fa-instagram me-2 fs-2"></span></a>
                        </div>
                        <div class="card card-body m-2">
                            <img src="https://i.ibb.co/vZm6ZJt/IMG-20230522-WA0046.jpg" height="150px"  class="card-img-top" alt="...">
                            <h6 style="height: 40px;">Kelvin Ramadhan</h6>
                            <a href="#" class="text-decoration-none d-flex align-items-center fs-6"><span class="fa fa-instagram me-2 fs-2"></span></a>
                        </div>
                        <div class="card card-body m-2">
                            <img src="https://i.ibb.co/n64PCzc/IMG-20230516-WA0007.jpg" height="150px"  class="card-img-top" alt="...">
                            <h6 style="height: 40px;">Muhammad Lutfi Ardiansyah</h6>
                            <a href="#" class="text-decoration-none d-flex align-items-center fs-6"><span class="fa fa-instagram me-2 fs-2"></span></a>
                        </div>
                        <div class="card card-body m-2">
                            <img src="https://i.ibb.co/6mqrG4L/IMG-20230724-WA0024.jpg" height="150px"  class="card-img-top" alt="...">
                            <h6 style="height: 40px;">Muhammad Aril Nasruloh</h6>
                            <a href="#" class="text-decoration-none d-flex align-items-center fs-6"><span class="fa fa-instagram me-2 fs-2"></span></a>
                        </div>
                        <div class="card card-body m-2">
                            <img src="https://i.ibb.co/G5tFmw9/IMG-20230905-WA0014.jpg" height="150px"  class="card-img-top" alt="...">
                            <h6 style="height: 40px;">Muhammad Irwan Nugraha</h6>
                            <a href="#" class="text-decoration-none d-flex align-items-center fs-6"><span class="fa fa-instagram me-2 fs-2"></span></a>
                        </div>
                        <div class="card card-body m-2">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/76301/02.png" height="150px"  class="card-img-top" alt="...">
                            <h6 style="height: 40px;">Muhammad Rakha Fauzan</h6>
                            <a href="#" class="text-decoration-none d-flex align-items-center fs-6"><span class="fa fa-instagram me-2 fs-2"></span></a>
                        </div>
                        <div class="card card-body m-2">
                            <img src="https://i.ibb.co/Gx9Xdk8/IMG-20230823-WA0029.jpg" height="150px"  class="card-img-top" alt="...">
                            <h6 style="height: 40px;">Muhammad Alif Rifaldi</h6>
                            <a href="#" class="text-decoration-none d-flex align-items-center fs-6"><span class="fa fa-instagram me-2 fs-2"></span></a>
                        </div>
                        <div class="card card-body m-2">
                            <img src="https://i.ibb.co/3Nvn5pM/IMG-20230815-WA0049.jpg" height="150px"  class="card-img-top" alt="...">
                            <h6 style="height: 40px;">Muhammad Ardhitya Zein Amanullah</h6>
                            <a href="#" class="text-decoration-none d-flex align-items-center fs-6"><span class="fa fa-instagram me-2 fs-2"></span></a>
                        </div>
                        <div class="card card-body m-2">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/76301/02.png" height="150px"  class="card-img-top" alt="...">
                            <h6 style="height: 40px;">Nun Pasha Malik Alma</h6>
                            <a href="#" class="text-decoration-none d-flex align-items-center fs-6"><span class="fa fa-instagram me-2 fs-2"></span></a>
                        </div>
                        <div class="card card-body m-2">
                            <img src="https://i.ibb.co/YdWG92Q/IMG-20230815-WA0039.jpg" height="150px"  class="card-img-top" alt="...">
                            <h6 style="height: 40px;">Naufal Alfarisi Maulana </h6>
                            <a href="#" class="text-decoration-none d-flex align-items-center fs-6"><span class="fa fa-instagram me-2 fs-2"></span></a>
                        </div>
                        <div class="card card-body m-2">
                            <img src="https://i.ibb.co/Fhb2qdD/IMG-20230815-WA0032.jpg" height="150px"  class="card-img-top" alt="...">
                            <h6 style="height: 40px;">Nirwana Alexa Sandria</h6>
                            <a href="#" class="text-decoration-none d-flex align-items-center fs-6"><span class="fa fa-instagram me-2 fs-2"></span></a>
                        </div>
                        <div class="card card-body m-2">
                            <img src="https://i.ibb.co/7QsSJJT/IMG-20230815-WA0046.jpg" height="150px"  class="card-img-top" alt="...">
                            <h6 style="height: 40px;">Noval Restu Radhityawan</h6>
                            <a href="#" class="text-decoration-none d-flex align-items-center fs-6"><span class="fa fa-instagram me-2 fs-2"></span></a>
                        </div>
                        <div class="card card-body m-2">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/76301/02.png" height="150px"  class="card-img-top" alt="...">
                            <h6 style="height: 40px;">Nurunnisa</h6>
                            <a href="#" class="text-decoration-none d-flex align-items-center fs-6"><span class="fa fa-instagram me-2 fs-2"></span></a>
                        </div>
                        <div class="card card-body m-2">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/76301/02.png" height="150px"  class="card-img-top" alt="...">
                            <h6 style="height: 40px;">Puput Nur Handayani</h6>
                            <a href="#" class="text-decoration-none d-flex align-items-center fs-6"><span class="fa fa-instagram me-2 fs-2"></span></a>
                        </div>
                        <div class="card card-body m-2">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/76301/02.png" height="150px"  class="card-img-top" alt="...">
                            <h6 style="height: 40px;">Rahma Irawan</h6>
                            <a href="#" class="text-decoration-none d-flex align-items-center fs-6"><span class="fa fa-instagram me-2 fs-2"></span></a>
                        </div>
                        <div class="card card-body m-2">
                            <img src="https://i.ibb.co/gvJ2N4C/IMG-20230724-WA0022.jpg" height="150px"  class="card-img-top" alt="...">
                            <h6 style="height: 40px;">Ridho Bacharudin Malik</h6>
                            <a href="#" class="text-decoration-none d-flex align-items-center fs-6"><span class="fa fa-instagram me-2 fs-2"></span></a>
                        </div>
                        <div class="card card-body m-2">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/76301/02.png" height="150px"  class="card-img-top" alt="...">
                            <h6 style="height: 40px;">Risana Syabila</h6>
                            <a href="#" class="text-decoration-none d-flex align-items-center fs-6"><span class="fa fa-instagram me-2 fs-2"></span></a>
                        </div>
                        <div class="card card-body m-2">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/76301/02.png" height="150px"  class="card-img-top" alt="...">
                            <h6 style="height: 40px;">Rizki Nur Rahman</h6>
                            <a href="#" class="text-decoration-none d-flex align-items-center fs-6"><span class="fa fa-instagram me-2 fs-2"></span></a>
                        </div>
                        <div class="card card-body m-2">
                            <img src="https://i.ibb.co/NKtCpVT/IMG-20230914-WA0055.jpg" height="150px"  class="card-img-top" alt="...">
                            <h6 style="height: 40px;">Septian Nur Fadilah</h6>
                            <a href="#" class="text-decoration-none d-flex align-items-center fs-6"><span class="fa fa-instagram me-2 fs-2"></span></a>
                        </div>
                        <div class="card card-body m-2">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/76301/02.png" height="150px"  class="card-img-top" alt="...">
                            <h6 style="height: 40px;">Tendi Ikhsan</h6>
                            <a href="#" class="text-decoration-none d-flex align-items-center fs-6"><span class="fa fa-instagram me-2 fs-2"></span></a>
                        </div>
                        <div class="card card-body m-2">
                            <img src="https://i.ibb.co/x2qHNZ5/IMG-20230912-WA0011.jpg" height="150px"  class="card-img-top" alt="...">
                            <h6 style="height: 40px;">Wildan Ahmad Fauzan</h6>
                            <a href="#" class="text-decoration-none d-flex align-items-center fs-6"><span class="fa fa-instagram me-2 fs-2"></span></a>
                        </div>
                        
                    </div>
                </div>
            </section>  
        </main>


    <!-- Footer -->
        <footer class="footer">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-12 text-center">
						<h5 class="footer-heading">
                            <a href="/" class="logo">Geneitthpasban</a>
                        </h5>
                        <ul class="ftco-footer-social p-0">
                            <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><span class="fa fa-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><span class="fa fa-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="https://www.instagram.com/geneitthpasban" data-toggle="tooltip" data-placement="top" title="Instagram"><span class="fa fa-instagram"></span></a></li>
                        </ul>
                        <div class="environment">
                            <p>Page rendered {elapsed_time} seconds</p>
                            <p>Status: <?= ENVIRONMENT ?></p>
                        </div>
                    </div>
				</div>
				<div class="row">
					<div class="col-md-12 text-center">
						<p class="copyright">
                        &copy; Copyright <script>document.write(new Date().getFullYear());</script> All rights reserved | This website was created by <a href="" target="_blank">NPMA7</a>
                        </p>
					</div>
				</div>
			</div>
		</footer>
		



</body>
	<!--====== Javascripts ======-->
	<script src="js/clock.js"></script>
	<script src="js/slider.js"></script>
    <script src="js/gallery.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</html>