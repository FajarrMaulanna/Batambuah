<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kadwa&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="aos/aos.css">
    <link rel="stylesheet" href="css/new.css">
    <title>Batambuah</title>
    <link rel="shortcut icon" href="icon.png">
</head>
<body>
    <div class="preloader">
      <div class="loading">
        <div class="spinner-border text-danger" role="status">
            <span class="sr-only">Loading...</span>
        </div>
      </div>
    </div>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="navbar">
        <div class="container">
            <a class="navbar-brand" href="#" id="navbar-brand" data-aos="fade-right" data-aos-delay="1500" data-aos-duration="1000">
                <img src="icon.png" alt="" id="icon_utama" class="d-inline-block align-text-top icon_utama">
                Batambuah
            </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
              <li class="nav-item" data-aos="fade-up" data-aos-delay="1700" data-aos-duration="1000">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item" data-aos="fade-up" data-aos-delay="1900" data-aos-duration="1000">
                <a class="nav-link" href="kategori.php">Kategori</a>
              </li>
              <li class="nav-item" data-aos="fade-up" data-aos-delay="2100" data-aos-duration="1000">
                <a class="nav-link" href="about.php">About</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
    <!-- END NAVBAR -->

    <!-- HIGHLIGHT -->
    <div id="highlight">
        <img src="latar.png" id="img_utama" alt="">
        <p id="text_salam" data-aos="fade-up" data-aos-delay="1500" data-aos-duration="1000">-SELAMAT DATANG-</p>
        <form class="form-inline" id="searching" data-aos="fade-up" data-aos-delay="2000" data-aos-duration="1000">
            <input class="form-control mr-sm-2" id="input_search" type="search" placeholder="Apo salero kini uda/uni..." aria-label="Search">
            <button class="btn btn-danger" type="submit"><i class="fas fa-search-dollar"></i></button>
        </form>

        <p id="desc_salam" data-aos="fade-up" data-aos-delay="2500" data-aos-duration="1000">Makan sakali ndak taraso makan batambuah mangko badaso</p>
        <div id="scroll_btn" data-aos="fade-up" data-aos-delay="3000" data-aos-duration="1000">
            <i class="fas fa-chevron-down"></i>
        </div>
    </div>
    <!-- END HIGHLIGHT -->

    <!-- PROMO -->
    <div class="container mt-5 mb-3" id="area_icon">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-6 mt-3">
              <a class="link_kat" href="kategori.php">
                <div class="card" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                  <div class="card-body">
                    <img class="icon_kat" src="icon1/1.png" alt="">
                    <p class="text_kat">Karupuak</p>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-3 col-sm-6 col-6 mt-3">
              <a class="link_kat" href="kategori.php">
                <div class="card" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                  <div class="card-body">
                    <img class="icon_kat" src="icon1/2.png" alt="">
                    <p class="text_kat">Jajanan</p>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-3 col-sm-6 col-6 mt-3">
              <a class="link_kat" href="kategori.php">
                <div class="card" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
                  <div class="card-body">
                    <img class="icon_kat" src="icon1/3.png" alt="">
                    <p class="text_kat">Samba</p>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-3 col-sm-6 col-6 mt-3">
              <a class="link_kat" href="kategori.php">
                <div class="card" data-aos="fade-up" data-aos-delay="800" data-aos-duration="1000">
                  <div class="card-body">
                    <img class="icon_kat" src="icon1/4.png" alt="">
                    <p class="text_kat">Minuman</p>
                  </div>
                </div>
              </a>
            </div>
        </div>
    </div>
    <!-- END PROMO -->

    <!-- VIDEO -->
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-8" data-aos="fade-right" data-aos-delay="500" data-aos-duration="1000">
                <iframe width="100%" height="400" src="https://www.youtube.com/embed/fSF6v-v4Ilc"></iframe> 
            </div>
            <div class="col-md-4" data-aos="fade-left" data-aos-delay="500" data-aos-duration="1000">
                <iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;ctz=Asia%2FJakarta&amp;src=aWQuaW5kb25lc2lhbiNob2xpZGF5QGdyb3VwLnYuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;color=%230B8043&amp;showNav=1" width="100%" height="400" frameborder="0" scrolling="no"></iframe>
            </div>
        </div>
    </div>
    <!-- END VIDEO -->

    <!-- FOOTER -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#4A0404" fill-opacity="1" d="M0,224L30,202.7C60,181,120,139,180,154.7C240,171,300,245,360,245.3C420,245,480,171,540,144C600,117,660,139,720,160C780,181,840,203,900,229.3C960,256,1020,288,1080,261.3C1140,235,1200,149,1260,138.7C1320,128,1380,192,1410,224L1440,256L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path></svg>
    <div class="container-fluid" id="footer">
        <div class="row" style="background-color: #4A0404;">
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12">
                        <p class="mt-4 ml-5" id="judul_foot" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="1000">batambuah</p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-12">
                        <ul class="list ml-5">
                            <li class="sub_foot" data-aos="fade-right" data-aos-delay="400" data-aos-duration="1000">Contact Us</li>
                            <li class="mt-3" data-aos="fade-right" data-aos-delay="600" data-aos-duration="1000"><img src="icon1/wa.png" alt=""> +6281234567890</li>
                            <li class="mt-3" data-aos="fade-right" data-aos-delay="800" data-aos-duration="1000"><img src="icon1/ig.png" alt=""> @batambuah.id</li>
                            <li class="mt-3" data-aos="fade-right" data-aos-delay="1000" data-aos-duration="1000"><img src="icon1/gmail.png" alt=""> batambuah.id@gmail.com</li>
                            <li class="mt-3" data-aos="fade-right" data-aos-delay="1200" data-aos-duration="1000"><img src="icon1/tiktok.png" alt=""> @batambuah.id</li>
                            <li class="mt-3">
                            <audio controls autoplay loop data-aos="fade-right" data-aos-delay="1400" data-aos-duration="1000" style="width: 15%;">
                                <source src="backsound.MP3" type="audio/mpeg">
                                </audio>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-5">
                <p class="sub_foot mt-5" data-aos="fade-left" data-aos-delay="400" data-aos-duration="1000">Our Office Location</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d249.331813974487!2d100.46078950166701!3d-0.9154848105494368!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b7963ede35cf%3A0x10ce49f24233a8ae!2sSekretariat%20Himpunan%20Mahasiswa%20Sistem%20Komputer%20Universitas%20Andalas!5e0!3m2!1sid!2sid!4v1620946394542!5m2!1sid!2sid" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" data-aos="fade-right" data-aos-delay="600" data-aos-duration="1000"></iframe>
            </div>
        </div>
        <div class="row" style="background-color: #250303;">
            <div class="col-md-12">
                <p id="copyright">Copyright &copy; 2021 Batambuah</p>
            </div>
        </div>
    </div>
    <!-- END FOOTER -->
    
    <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="jquery2.js"></script>
    <script src="aos/aos.js"></script>
    <script src="main.js"></script>
</body>
</html>
