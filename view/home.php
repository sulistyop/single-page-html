<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM post WHERE tampilkan != 0 ORDER BY id DESC ");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Fahry Fara Alumunium</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

  <!-- Vendor CSS Files -->

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/caorusel.css" rel="stylesheet">
  <link href="assets/css/card.css" rel="stylesheet">
  <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/dcdf6a3dc0.js" crossorigin="anonymous"></script>

</head>

<body>

  <video autoplay muted loop id="myVideo">
    <source height="auto" width="100%" id="videoBG" src="clip/Aluminium-gedung.mp4" type="video/mp4">
    Your browser does not support HTML5 video.
  </video>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center">
      <nav class="nav-menu d-none d-lg-block">
        <span class="show-title">
          <p>Menu Bar</p>
        </span>
        <ul>
          <li class="active"><a href="/">Home</a></li>
          <li><a href="#product">Product</a></li>
          <li><a href="#lokasi">Lokasi</a></li>
          <li><a href="#doa">Review</a></li>
          <li><a href="#kontak">Kontak</a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->


  <!-- ======= Image Section ======= -->
  <section id="image" class="counts">
    <div class="container">
      <div class="count-box " data-aos="fade-up">
        <div style="z-index: 1000;background-color: black;color: white;border-radius: 25px;">
          <h1>Fahry Fara Alumunium</h1>
          <p>Kami Mengutamakan Kualitas ! </p>
        </div>
      </div>
    </div>
  </section><!-- End Counts Section -->

  <!-- =======  Section Pengumuman ======= -->
  <section id="product" class="ann">
    <div class="container">
      <div class="text-center p-3" data-aos="fade-up">
        <section class="section-products">
          <div class="container">
            <div class="row justify-content-center text-center">
              <div class="col-md-8 col-lg-6">
                <div class="header">
                  <h3>Featured Product</h3>
                  <h2>Popular Products</h2>
                </div>
              </div>
            </div>
            <div class="row">
            <?php  foreach($result as $data){ ?>
              <div class="col-md-6 col-lg-4 col-xl-3">
                <div id="product-1" class="single-product">
                  <div class="part-1">
                    <ul>
                      <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                      <li><a href="#"><i class="fas fa-heart"></i></a></li>
                      <li><a href="#"><i class="fas fa-plus"></i></a></li>
                      <li><a href="#"><i class="fas fa-expand"></i></a></li>
                    </ul>
                  </div>
                  <div class="part-2">
                    <h3 class="product-title"><?php echo $data['nama'] ?></h3>
                    <h4 class="product-old-price">Rp.<?php echo $data['harga_palsu'] ?></h4>
                    <h4 class="product-price">Rp.<?php echo $data['harga'] ?></h4>
                  </div>
                </div>
              </div>
            <?php } ?>
          </div>
        </section>
      </div>
    </div>
  </section>

  <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
    viewBox="0 24 150 28 " preserveAspectRatio="none">
    <defs>
      <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
    </defs>
    <g class="wave1">
      <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
    </g>
    <g class="wave2">
      <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
    </g>
    <g class="wave3">
      <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
    </g>
  </svg>
  <!-- End  Section -->

  <!-- =======  Section lokasi Alert ======= -->
  <section id="lokasi" class="covid">
    <div class="container">
      <div class="text-center" data-aos="fade-up">
        <h2>ALAMAT DAN LOKASI</h2>
        <p></p>
      </div>
      <div class="container text-center">
        <p>Toko almunium kaca Fahry fara <br>
      </div>
      <div class="container">
        <div class="row">
          <div class="col">
            <div data-aos="fade-left" data-aos-delay="200">
              <div class="map-responsive">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.4228974863163!2d110.4884232!3d-7.744888100000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5bee98bdfecb%3A0xee05617e65c75903!2sToko%20almunium%20kaca%20Fahry%20fara!5e0!3m2!1sen!2sid!4v1652190078219!5m2!1sen!2sid"
                  width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End  Section -->

  <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
    viewBox="0 24 150 28 " preserveAspectRatio="none">
    <defs>
      <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
    </defs>
    <g class="wave1">
      <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
    </g>
    <g class="wave2">
      <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
    </g>
    <g class="wave3">
      <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
    </g>
  </svg>
  <!-- End  Section -->

  <!-- =======  Section DOA ======= -->
  <section id="doa" class="covid">
    <div class="container">
      <div class="text-center" data-aos="fade-up">
        <span style="letter-spacing: 1.35rem;text-align:center;font-size:27px">REVIEW DAN ULASAN</span>
      </div>
      <div class="container pt-5">
        <div class="slideshow-container">

          <div class="mySlides" data-aos="fade-up">
            <q>I love you the more in that I believe you had liked me for my own sake and for nothing else</q>
            <p class="author">- John Keats</p>
            <q class="text-sm-center">10 January 2021</q>
          </div>

          <div class="mySlides">
            <q>But man is not made for defeat. A man can be destroyed but not defeated.</q>
            <p class="author">- Ernest Hemingway</p>
            <q class="text-sm-center">10 January 2021</q>
          </div>

          <div class="mySlides">
            <q>I have not failed. I've just found 10,000 ways that won't work.</q>
            <p class="author">- Thomas A. Edison</p>
            <q class="text-sm-center">10 January 2021</q>
          </div>

          <a class="prev" onclick="plusSlides(-1)">❮</a>
          <a class="next" onclick="plusSlides(1)">❯</a>

        </div>

        <div class="dot-container" hidden>
          <span class="dot" onclick="currentSlide(1)"></span>
          <span class="dot" onclick="currentSlide(2)"></span>
          <span class="dot" onclick="currentSlide(3)"></span>
        </div>
        <div class="center">
          <button class="addBton" type="button" data-toggle="modal" data-target="#exampleModal">
            Tulis Review
          </button>
        </div>
      </div>
    </div>

  </section>
  <!-- End Section -->


  <!-- Modal -->
  <div class="modal fade pt-5" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog " role="document">
      <form>
        <div class="modal-content">
          <div class="modal-header   cust-color">
            <h5 class="modal-title cust-font" id="exampleModalLabel">Masukan Pesan Anda</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Nama</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Enter Name">
            </div>
            <div class="form-group">
              <label for="text">Message</label>
              <textarea type="text" class="form-control" id="text" placeholder="Text"></textarea>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="addBton">Save changes</button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <!-- =======  Section DOA ======= -->
  <section id="kontak" class="ann">
    <div class="container">
      <hr>
      <div class="text-center" data-aos="fade-up">
        <span style="letter-spacing: 1.35rem;text-align:center;font-size:27px">KONTAK</span>
        <p class="mb-2">Ada pertanyaan? Kontak kami via whatsapp di:</p>
        <a class="text-warning text-underline--dashed"
          href="https://api.whatsapp.com/send?phone=6285282330303&amp;text=Hallo,%20Saya%20mau%20tanya%20tentang%20Aluminium."
          rel="nofollow">+6285282330303<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round" class="feather feather-arrow-right ml-2">
            <line x1="5" y1="12" x2="19" y2="12"></line>
            <polyline points="12 5 19 12 12 19"></polyline>
          </svg></a>
        </p>
      </div>

    </div>

  </section>
  <!-- End Section -->
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <video width="100%" height="auto" autoplay muted loop>
      <source src="clip/file2.mp4" type="video/mp4">
    </video>

    <div class="container">
      <div class="copyright">
        <p>FF Aluminium -CopyRight</p>
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <a href="#" class="back-to-top"><i class="fa-brands fa-whatsapp"></i></a>
  <!-- <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a> -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      if (n > slides.length) { slideIndex = 1 }
      if (n < 1) { slideIndex = slides.length }
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active-dot", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active-dot";
    }

    var slideIndex = 0;
    carousel();

    function carousel() {
      var i;
      var x = document.getElementsByClassName("mySlides");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > x.length) { slideIndex = 1 }
      x[slideIndex - 1].style.display = "block";
      setTimeout(carousel, 3000);
    }


  </script>
</body>

</html>