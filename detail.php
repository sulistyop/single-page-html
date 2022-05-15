<?php
// Create database connection using config file
include_once("config.php");

$id = $_GET['id'];

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM post WHERE id != $id  ");
while($data = mysqli_fetch_array($result))
{
	$nama = $data['nama'];
	$harga = $data['harga'];
	$harga_palsu = $data['harga_palsu'];
	$foto = $data['foto'];
	$deskripsi = $data['deskripsi'];
	$tampil = $data['tampilkan'];
  $id = $data['id'];
}
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
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center">
      <nav class="nav-menu d-none d-lg-block">
        <span class="show-title">
          <p>Menu Bar</p>
        </span>
        <ul>
          <li class="active"><a href="/">Home</a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <!-- =======  Section Pengumuman ======= -->
  <section id="product" class="ann" style="margin-top:50px">
    <div class="container">
      <div class="card">
          <div class="row m-1">
              <div class="col-md-6">
               <img src="<?php echo 'foto/'.$foto ?>" class="card-img-top" alt="...">

              </div>
              <div class="col-md-6">
                <div class="m-2">
                  <h3><?php echo $nama ?></h3>
                </div>
              </div>
          </div>
      </div>
    </div>
  </section>



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