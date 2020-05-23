<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>iPortfolio Bootstrap Template - Index</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel='apple-touch-icon' href='./icons/happy-face.png' sizes='512x512'/>
  <link rel="manifest" href="./manifest.json">
</head>

<body>

  <script>
        if ('serviceWorker' in navigator) {
          console.log("Will service worker register?");
          navigator.serviceWorker.register("./service-worker.js")
          .then(function(reg) {
            console.log("Yes it did.");
          }).catch(function(err) {
            console.log("No it didn't", err)
        });
        }
    </script>
  <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <nav class="nav-menu">
        <ul>
          <li class="active"><a href="index.html"><i class="bx bx-home"></i> <span>主頁</span></a></li>
          <li><a href="#about"><i class="bx bx-user"></i> <span>文章分類</span></a></li>
          <li><a href="#about"><i class="bx bx-file-blank"></i> <span>在台進修資源</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
      <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    </div>
    
  </header><!-- End Header -->
  <main id="main">
    <section id="portfolio" class="portfolio section-bg">
      <div class="container">
        <div class="section-title">
          <font face="微軟正黑體">
          <h2><font size="5.8em">Training resources in Taiwan</font></h2>
          <h5>在台進修資源</h5>
          </font>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">1</li>
              <li data-filter=".filter-card">2</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="section-title">
                <font face="微軟正黑體">
                  <h2><font size="5em">Information Site Of Foreign Worker Rights Defence</font></h2>
                  <span style="font-size:20px;">跨國勞動力權益維護資訊網站</span>
                </font>
            </div>
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/logo-1.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="https://fw.wda.gov.tw/wda-employer/home/activity" title="跨國勞動力權益維護資訊網站"><i class="bx bx-link"></i></a>
              </div>
            </div>
            <div class="section-title">
                <font face="微軟正黑體">
                  <span style="font-size:20px;">※提供活動、最新消息、法令政策、訓練教材</span>
                </font>
            </div>
            <div>
                <audio controls="controls" height="100" width="50">
                         <source src="horse.AAC" type="audio/AAC">
                     </audio>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="section-title">
                <font face="微軟正黑體">
                    <h2><font size="5em">Workforce Development Agency</font></h2>
                    <span style="font-size:20px;">勞動部勞動力發展署</span>            
                </font>
            </div>
            <div class="portfolio-wrap">
                <img src="assets/img/portfolio/logo-2.png" class="img-fluid" alt="">
                <div class="portfolio-links">
                    <a href="https://www.wda.gov.tw/Default.aspx" title="勞動部勞動力發展署"><i class="bx bx-link"></i></a>
                </div>
            </div>
            <div class="section-title">
                <font face="微軟正黑體">
                    <span style="font-size:20px;">※外籍勞工事務專區，處理與工作相關的問題</span>
                </font>
            </div>
            <div>
                <audio controls="controls" height="100" width="50">
                    <source src="horse.AAC" type="audio/AAC">
                </audio>
            </div>
          </div>

          <!--<div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="section-title">
                <font face="微軟正黑體">
                    <h2><font size="5em">Direct Employment Joint Service Center</font></h2>
                    <span style="font-size:20px;">直接聘僱聯合服務中心</span>
                </font>
                <p></p>
            </div>
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/logo-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="https://dhsc.wda.gov.tw/?one=add&kind=ch" title="直接聘僱聯合服務中心"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
          -->
        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Services Section ======= -->
    <!-- ======= Testimonials Section ======= -->
    <!-- ======= Contact Section ======= -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
