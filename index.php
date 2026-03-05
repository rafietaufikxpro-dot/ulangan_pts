<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - OnePage Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: OnePage
  * Template URL: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">Zakat Masjid Riydho Solihin</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
         
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

     

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <img src="assets/img/hero-bg-abstract.jpg" alt="" data-aos="fade-in" class="">

      <div class="container">
        <div class="row justify-content-center" data-aos="zoom-out">
          <div class="col-xl-7 col-lg-9 text-center">
            <h1>zakat masjid riydho solihin</h1>
            <p>Wadah pencatatan dan pengelolaan zakat jamaah Masjid Riydho Solihin</p>
          </div>
        </div>
       
        <div class="row gy-4 mt-5">
          <div class="col-md-6 col-lg-3" data-aos="zoom-out" data-aos-delay="100">
            <div class="icon-box">
        <i class="icon fa-regular fa-clipboard fa-3x"></i>
              <h4 class="title"><a href="">Zakat Tercatat, Kebaikan Berlipat</a></h4>
              <p class="description">Catat zakat dengan mudah dan pastikan kebaikan tersalurkan dengan baik</p>
            </div>
          </div><!--End Icon Box -->

          <div class="col-md-6 col-lg-3" data-aos="zoom-out" data-aos-delay="200">
            <div class="icon-box">
<i class="icon fa-solid fa-people-line fa-3x"></i>
              <h4 class="title"><a href="">Zakat Tertib, Berkah Mengalir</a></h4>
              <p class="description">Pencatatan rapi untuk zakat yang lebih teratur dan penuh berkah</p>
            </div>
          </div><!--End Icon Box -->

          <div class="col-md-6 col-lg-3" data-aos="zoom-out" data-aos-delay="300">
            <div class="icon-box">
             <i class=" icon fa-solid fa-bullhorn fa-3x"></i>
              <h4 class="title"><a href="">Catat Zakatmu, Sebarkan Manfaatnya</a></h4>
              <p class="description">Kelola dan pantau zakat agar manfaatnya semakin luas</p>
            </div>
          </div><!--End Icon Box -->

          <div class="col-md-6 col-lg-3" data-aos="zoom-out" data-aos-delay="400">
            <div class="icon-box">
             <i class="icon fa-solid fa-book fa-3x"></i>
              <h4 class="title"><a href="">Kelola Zakat dengan Mudah</a></h4>
              <p class="description">Solusi sederhana untuk mencatat dan mengelola zakat Anda</p>
            </div>
          </div><!--End Icon Box -->

        </div>
      </div>

    </section><!-- /Hero Section -->

   

  <!-- Stats Section -->
    <section id="stats" class="stats section light-background">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span>
                  <?php
                          $query = mysqli_query($koneksi, "SELECT sum(jumlah_uang) AS total FROM tbl_zakat");
                          $row = mysqli_fetch_assoc($query);
                          echo $row['total'];
                          ?> RP
              </span> 
              <p>total uang yang terkumpul</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span>
                  <?php
                          $query = mysqli_query($koneksi, "SELECT sum(jumlah_beras) AS total FROM tbl_zakat");
                          $row = mysqli_fetch_assoc($query);
                          echo $row['total']; 
                          ?> KG
              </span>
              <p>total beras yang terkumpul</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span><?php
                          $query = mysqli_query($koneksi, "SELECT sum(keterangan) AS total FROM tbl_zakat");
                          $row = mysqli_fetch_assoc($query);
                          echo $row['total'];
                          ?></span>
              <p>total orang yeng telah zakat</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span>60</span>
              <p>mustahik yang tercatat di daerah</p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>

    </section><!-- /Stats Section -->

 <!-- About Alt Section -->
    <section id="about-alt" class="about-alt section">

      <div class="container">

        <div class="row gy-4">
          <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
            <img src="assets/img/deski-jayantoro-V5GKXjvXFVw-unsplash.jpg" class="img-fluid" alt="">
            <a href="https://youtu.be/xlJyeuOmmYQ" class="glightbox pulsating-play-btn"></a>
          </div>
          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="200">
            <h3>Tahukah Kamu Tentang Zakat?</h3>
            <p class="fst-italic">
              Zakat adalah kewajiban yang menyucikan harta dan membantu mereka yang membutuhkan.
            </p>
            <ul>
              <li><i class="bi bi-check2-all"></i> <span>“Ambillah zakat dari sebagian harta mereka, dengan zakat itu kamu membersihkan dan menyucikan mereka.”
— (QS. At-Taubah: 103)</span></li>
              <li><i class="bi bi-check2-all"></i> <span>“Islam dibangun atas lima perkara… salah satunya menunaikan zakat.”
— (HR. Bukhari dan Muslim)</span></li>
            
            </ul>
            <p>
             Zakat bukan sekadar kewajiban, tetapi juga bentuk kasih sayang dan solidaritas dalam Islam. Dengan menunaikan zakat, kita membersihkan harta sekaligus menghadirkan harapan bagi mereka yang membutuhkan.
            </p>
          </div>
        </div>

      </div>

    </section><!-- /About Alt Section -->
     <!-- About Section -->
    <section id="about" class="about section">
       <div class="container justify-content-center" data-aos="fade-up">
        <h1 class="text-center">Daftar Zakat</h1>
 <table class="table table-striped table-hover">
    <thead class="table tablezakat">
        <tr>
            <th scope="col">no</th>
            <th scope="col">nama</th>
            <th scope="col">jenis</th>
            <th scope="col">jumlah uang</th>
            <th scope="col">jumlah beras</th>
            <th scope="col">metode</th>
            <th scope="col">tanggal</th>
            <th scope="col">keterangan</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $query = mysqli_query($koneksi, "SELECT * FROM tbl_zakat");
        $no=1;
        foreach ($query as $data) :
        ?>
        <tr>
          <td><?php echo $no++; ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['jenis']; ?></td>
            <td><?php echo $data['jumlah_uang']; ?></td>
            <td><?php echo $data['jumlah_beras']; ?></td>
            <td><?php echo $data['metode']; ?></td>
            <td><?php echo $data['tanggal']; ?></td>
            <td><?php echo $data['keterangan']; ?></td>
        </tr>
      <?php endforeach;
        ?>
    </tbody>
</table>
      </div>

    </section><!-- /About Section -->

    <!-- Clients Section -->
   
    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">

      <!-- Section Title -->
      

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper" data-speed="600" data-delay="5000" data-breakpoints="{ &quot;320&quot;: { &quot;slidesPerView&quot;: 1, &quot;spaceBetween&quot;: 40 }, &quot;1200&quot;: { &quot;slidesPerView&quot;: 3, &quot;spaceBetween&quot;: 40 } }">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 20
                }
              }
            }
          </script>
        
          
            

    <!-- Services Section -->
   
    <!-- Call To Action Section -->
   

    <!-- Portfolio Section -->
   
    <!-- Team Section -->
    
    <!-- Pricing Section -->
   

    <!-- Faq Section -->
    <section id="faq" class="faq section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Frequently Asked Questions</h2>
        <p>masih bingung dengan zakat? ini beberapa pertanyaan yang biasa ditanykan tentang zakat</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row justify-content-center">

          <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">

            <div class="faq-container">

              <div class="faq-item faq-active">
                <h3>Apa itu zakat?</h3>
                <div class="faq-content">
                  <p>Zakat adalah kewajiban bagi setiap Muslim yang mampu untuk mengeluarkan sebagian hartanya kepada orang yang berhak menerimanya sebagai bentuk ibadah dan kepedulian sosial.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>Siapa saja yang wajib membayar zakat?</h3>
                <div class="faq-content">
                  <p>Zakat wajib bagi Muslim yang memiliki harta mencapai nisab (batas minimum) dan telah dimiliki selama 1 tahun (haul) untuk jenis zakat tertentu.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>Apa saja jenis zakat?</h3>
                <div class="faq-content">
                  <p>Zakat Fitrah – dikeluarkan setiap bulan Ramadan sebelum Idul Fitri.</p>
                  <p>Zakat Maal – dikeluarkan pada harta yang mencapai nisab dan telah dimiliki selama 1 tahun.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>Berapa besar zakat yang harus dibayarkan?</h3>
                <div class="faq-content">
                  <p>Zakat Fitrah: 2.5% dari nilai harta yang mencapai nisab.</p>
                  <p>Zakat Maal: 2.5% dari harta yang mencapai nisab dan telah dimiliki selama 1 tahun.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>Mengapa zakat penting?</h3>
                <div class="faq-content">
                  <p>Zakat membantu membersihkan harta, menumbuhkan kepedulian sosial, dan membantu mengurangi kesenjangan ekonomi dalam masyarakat.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>Apakah zakat bisa dicatat secara digital?</h3>
                <div class="faq-content">
                  <p>Ya. Dengan sistem pencatatan zakat digital, Anda dapat mencatat, memantau, dan mengelola zakat dengan lebih mudah, rapi, dan transparan.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

            </div>

          </div><!-- End Faq Column-->

        </div>

      </div>

    </section><!-- /Faq Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>kalkulator zakat</h2>
        <p>hitung zakatmu dengan mudah menggunakan kalkulator zakat online kami. masukan jumlah harta yang kamu miliki, dan dapatkan perhitungan zakat yang akurat sesuai dengan ketentuan syariah.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

      
      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer light-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">zakat masjid riydho solihin</span>
          </a>
          <p>Website ini membantu umat Muslim mencatat dan mengelola zakat dengan lebih mudah agar kewajiban ibadah dapat dilakukan dengan tertib dan tepat.</p>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Terms of service</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Web Development</a></li>
            <li><a href="#">Product Management</a></li>
            <li><a href="#">Marketing</a></li>
            <li><a href="#">Graphic Design</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>A108 Adam Street</p>
          <p>New York, NY 535022</p>
          <p>United States</p>
          <p class="mt-4"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
          <p><strong>Email:</strong> <span>info@example.com</span></p>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">zakat masjid riydho solihin</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">muhamad rafie taufik</a> | <a href="https://bootstrapmade.com/tools/">DevTools</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Font Awesome -->
  <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>