<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Cinta Qur'an Foundation</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />
    <link href="{{ asset('assets/front/img/favicon.png') }}" rel="icon" />
    <link href="{{ asset('assets/front/img/apple-touch-icon.png') }}" rel="apple-touch-icon" />
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet"
    />
    <link href="{{ asset('assets/front/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/front/vendor/icofont/icofont.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/front/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/front/vendor/venobox/venobox.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/front/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/front/css/style.css') }}" rel="stylesheet" />
  </head>

  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
      <div class="container d-flex align-items-center">
        <div class="logo mr-auto">
          <a href="index.html"
            ><img src="http://127.0.0.1:8000/storage/{{ $company_information->logo }}"alt="" class="img-fluid"
          /></a>
        </div>

        <nav class="nav-menu d-none d-lg-block">
          <ul>
            <li><a href="#program">Program</a></li>
            <li><a href="#kajian">Kajian</a></li>
            <li><a href="#portfolio">Donasi</a></li>
            <li><a href="#mitra">Kemitraan</a></li>
            <li><a href="#contact">Update</a></li>
            <li><a href="#footer">Kontak</a></li>
            <li>
              <a href="#contact"><i class="bx bx-search-alt-2"></i></a>
            </li>
            <li>
              <a href="{{ Route('login.index') }}" target="_blank" class="btn btn-outline-info rounded-pill text-info px-4 text-masuk">Masuk</i></a>
            </li>
          </ul>
        </nav>
      </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section
      id="hero"
      class="d-flex flex-column justify-content-center align-items-center"
      style="background: url('http://127.0.0.1:8000/storage/{{ $banner->image_url }}') center center no-repeat; background-size: cover;"
    >
      <div class="container text-center text-md-left" data-aos="fade-up">
        <h1>Dukung Program <br> Dakwah Syiar Qur'an <br> Project.</h1>
        <h2>
          Menumbuhkan motivasi agar masyarakat mencintai Alquran <br> dengan program-program islami terbaik dan kreatif.
        </h2>
        <a href="#about" class="btn-get-started scrollto rounded-pill">
          Donasi Sekarang
          <i style="font-size: 15px;" class='bx bxs-right-arrow-circle' ></i>
        </a>

        <div class="row mini-info mt-5">
          <div class="col-6">
            <div class="row">
              <div class="col">
                <img src="assets/img/kajian.png" alt="">
                <p class="mt-2">Kajian Perkantoran</p>
                <p class="text-info" style="font-size: 20px; margin-top: -10px;"><strong>+124</strong></p>
              </div>
              <div class="col">
                <img src="assets/img/mosque.png" alt="">
                <p class="mt-2">Majelis Cinta Quran</p>
                <p class="text-info" style="font-size: 20px; margin-top: -10px;"><strong>+124</strong></p>
              </div>
              <div class="col">
                <img src="assets/img/online.png" alt="">
                <p class="mt-2">Kajian Online</p>
                <p class="text-info" style="font-size: 20px; margin-top: -10px;"><strong>+124</strong></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Hero -->

    <main id="main">
      <!-- ======= Donasi Section ======= -->
      <section id="portfolio" class="portfolio">
        <div class="container">
          <div class="section-title">
            <h2 style="font-size: 40px;"><strong>Donasi Pilihan</strong></h2>
            <p>
              Pilih dan salurkan donasi melalui program-program kami yang berarti bagi sahabat Cinta Quran.
            </p>
          </div>

          <div class="row">
            <div class="col-lg-12">
              <ul id="portfolio-flters">
                <li class="rounded-pill" data-filter="*" class="filter-active">
                  <i class='bx bx-category-alt'></i>
                  Semua Kategori
                </li>
                <li class="rounded-pill" data-filter=".filter-app">
                  <i class='bx bx-donate-heart' ></i>
                  Kemanusiaan
                </li>
                <li class="rounded-pill" data-filter=".filter-card">
                  <i class='bx bx-moon'></i>
                  IBBQ
                </li>
                <li class="rounded-pill" data-filter=".filter-web">
                  <i class='bx bx-moon'></i>
                  Wakaf
                </li>
                <li class="rounded-pill" data-filter=".filter-web">Lainnya</li>
              </ul>
            </div>
          </div>

          <div class="row portfolio-container">
            <div
              class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp"
            >
              <div class="portfolio-wrap">
                <figure>
                  <img
                    src="assets/img/portfolio/portfolio-1.jpg"
                    class="img-fluid"
                    alt=""
                  />
                </figure>

                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html">Sedekah beras untuk seluruh para keluarga di afrika selatan</a></h4>
                  <div class="row mt-5">
                    <div class="col">
                      <p>Dana Terkumpul</p>
                      <p class="text-info">Rp 0</p>
                    </div>
                    <div class="col text-right">
                      <p>Sisa Waktu</p>
                      <p class="text-info">Rp 2.000.000</p>
                    </div>
                  </div>
                  <div class="progress mt-3" style="height: 5px;">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 50%; height: 5px;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
            <div
            class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp"
          >
            <div class="portfolio-wrap">
              <figure>
                <img
                  src="assets/img/portfolio/portfolio-1.jpg"
                  class="img-fluid"
                  alt=""
                />
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Sedekah beras untuk seluruh para keluarga di afrika selatan</a></h4>
                <div class="row mt-5">
                  <div class="col">
                    <p>Dana Terkumpul</p>
                    <p class="text-info">Rp 0</p>
                  </div>
                  <div class="col text-right">
                    <p>Sisa Waktu</p>
                    <p class="text-info">Rp 2.000.000</p>
                  </div>
                </div>
                <div class="progress mt-3" style="height: 5px;">
                  <div class="progress-bar bg-success" role="progressbar" style="width: 50%; height: 5px;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
            </div>
            <div
            class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp"
          >
            <div class="portfolio-wrap">
              <figure>
                <img
                  src="assets/img/portfolio/portfolio-1.jpg"
                  class="img-fluid"
                  alt=""
                />
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Sedekah beras untuk seluruh para keluarga di afrika selatan</a></h4>
                <div class="row mt-5">
                  <div class="col">
                    <p>Dana Terkumpul</p>
                    <p class="text-info">Rp 0</p>
                  </div>
                  <div class="col text-right">
                    <p>Sisa Waktu</p>
                    <p class="text-info">Rp 2.000.000</p>
                  </div>
                </div>
                <div class="progress mt-3" style="height: 5px;">
                  <div class="progress-bar bg-success" role="progressbar" style="width: 50%; height: 5px;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Donasi Section -->


      <!-- ======= What We Do Section ======= -->
      <section id="what-we-do" class="what-we-do">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
              <div class="icon-box">
                <div class="row">
                  <div class="col-4">
                    <div class="icon">
                      <img src="/assets/img/icon-money.png" alt="">
                    </div>
                  </div>
                  <div class="col">
                    <h4><a href="">Zakat 100%</a></h4>
                    <p>
                      Tunaikan zakat anda melalui program zakat 100% amanah.
                    </p>
                    <div class="mt-3">
                      <a href="">Selengkapnya</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
              <div class="icon-box">
                <div class="row">
                  <div class="col-4">
                    <div class="icon">
                      <img src="/assets/img/icon-money.png" alt="">
                    </div>
                  </div>
                  <div class="col">
                    <h4><a href="">Zakat 100%</a></h4>
                    <p>
                      Tunaikan zakat anda melalui program zakat 100% amanah.
                    </p>
                    <div class="mt-3">
                      <a href="">Selengkapnya</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
              <div class="icon-box">
                <div class="row">
                  <div class="col-4">
                    <div class="icon">
                      <img src="/assets/img/icon-money.png" alt="">
                    </div>
                  </div>
                  <div class="col">
                    <h4><a href="">Zakat 100%</a></h4>
                    <p>
                      Tunaikan zakat anda melalui program zakat 100% amanah.
                    </p>
                    <div class="mt-3">
                      <a href="">Selengkapnya</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End What We Do Section -->

  
      <!-- ======= Program Section ======= -->
      <section id="program" class="portfolio">
        <div class="container">
          <div class="section-title">
            <h2 style="font-size: 40px;"><strong>Program Pilihan</strong></h2>
            <p>
              Program program terbaik dari Cinta Quran Foundation untuk Sahabat Cinta Quran.
            </p>
          </div>

          <div class="program row">
            <div class="col-8 mb-4">
              <div class="card bg-dark text-white">
                <img src="/assets/img/program-1.png" class="card-img" alt="...">
                <div class="card-img-overlay">
                  <div class="custom-text">
                    <h5 class="card-title">Indonesia Bisa Baca Quran</h5>
                    <p class="card-text">Sebuah Fakta mengejutkan menyatakan bahwa 53,57% (BPS 2018). kaum muslimin di Indonesia tidak bisa membaca Al-Quran.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-4 mb-4">
              <div class="card bg-dark text-white">
                <img src="/assets/img/program-2.png" class="card-img" alt="...">
                <div class="card-img-overlay">
                  <div class="custom-text">
                    <h5 class="card-title">CintaQuran Call</h5>
                    <p class="card-text">Cinta Quran Call merupakan layanan pendampingan.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-4 mb-4">
              <div class="card bg-dark text-white">
                <img src="/assets/img/program-3.png" class="card-img" alt="...">
                <div class="card-img-overlay">
                  <div class="custom-text">
                    <h5 class="card-title">Kajian Perkantoran</h5>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-4 mb-4">
              <div class="card bg-dark text-white">
                <img src="/assets/img/program-4.png" class="card-img" alt="...">
                <div class="card-img-overlay">
                  <div class="custom-text">
                    <h5 class="card-title">Kajian Perkantoran</h5>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-4 mb-4">
              <div class="card bg-dark text-white">
                <img src="/assets/img/program-5.png" class="card-img" alt="...">
                <div class="card-img-overlay">
                  <div class="custom-text">
                    <h5 class="card-title">Kajian Perkantoran</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Program Section -->

      <!-- ======= Kajian Section ======= -->
      <section id="kajian" class="portfolio">
        <div class="container">
          <div class="section-title text-center">
            <h2 style="font-size: 40px;"><strong>Kajian Inspiratif</strong></h2>
            <p>
              Program kajian inspiratif dari kami untuk menemani aktivitas Sahabat Cinta Qur’an.
            </p>
          </div>

          <div class="row">
            <div class="col-lg-12">
              <ul id="portfolio-flters">
                <li class="rounded-pill" data-filter="*" class="filter-active">Semua Kajian</li>
                <li class="rounded-pill" data-filter=".filter-berlangsung">Berlangsung</li>
                <li class="rounded-pill" data-filter=".filter-test1">Akan Datang</li>
                <li class="rounded-pill" data-filter=".filter-test2">Perkantoran</li>
                <li class="rounded-pill" data-filter=".filter-test3">Online</li>
                <li class="rounded-pill" data-filter=".filter-test4">Lainnya</li>
              </ul>
            </div>
          </div>

          <div class="program row">
            <div class="col-6 mb-4 filter-berlangsung">
              <div class="card bg-dark text-white">
                <img src="/assets/img/kajian-1.jpg" class="card-img" alt="...">
                <div class="card-img-overlay">
                  <div class="custom-text">
                    <h5 class="card-title">Menyempurnakan Taqwa</h5>
                    <p class="card-text kajian">Kamis, 20 September 2021.</p>
                    <p class="card-text kajian-2 mt-4">09:00 - 10:00</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="row">
                <div class="col-4 mb-4">
                  <div class="card bg-dark text-white">
                    <img src="/assets/img/kajian-1.jpg" class="card-img" alt="...">
                    <div class="card-img-overlay">
                    </div>
                  </div>
                </div>
                <div class="col-4 mb-4">
                  <div class="card bg-dark text-white">
                    <img src="/assets/img/kajian-1.jpg" class="card-img" alt="...">
                    <div class="card-img-overlay">
                    </div>
                  </div>
                </div>
                <div class="col-4 mb-4">
                  <div class="card bg-dark text-white">
                    <img src="/assets/img/kajian-1.jpg" class="card-img" alt="...">
                    <div class="card-img-overlay">
                    </div>
                  </div>
                </div>
                <div class="col-4 mb-4">
                  <div class="card bg-dark text-white">
                    <img src="/assets/img/kajian-1.jpg" class="card-img" alt="...">
                    <div class="card-img-overlay">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Kajian Section -->

      <!-- ======= Amazing Group Section ======= -->
      <section id="mitra" class="portfolio">
        <div class="container">
          <div class="section-title text-center">
            <h2 style="font-size: 40px;"><strong>Amazing Group</strong></h2>
          </div>

          <div class="program row">
            <div class="col">
              <div class="row">
                <div class="col-3 mb-4">
                  <div class="card group">
                    <img src="/assets/img/group-1.png" class="card-img py-3" alt="...">
                  </div>
                </div>
                <div class="col-3 mb-4">
                  <div class="card group">
                    <img src="/assets/img/group-1.png" class="card-img py-3" alt="...">
                  </div>
                </div>
                <div class="col-3 mb-4">
                  <div class="card group">
                    <img src="/assets/img/group-1.png" class="card-img py-3" alt="...">
                  </div>
                </div>
                <div class="col-3 mb-4">
                  <div class="card group">
                    <img src="/assets/img/group-1.png" class="card-img py-3" alt="...">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Amazing Group Section -->

      <!-- ======= Daftar Section ======= -->
      <section id="portfolio" class="portfolio">
        <div class="container">
          <div class="program program-custom-banner" row">
            <div class="col-12 mb-4">
              <div class="card bg-dark text-white custom-banner">
                <img src="/assets/img/banner-daftar.png" class="card-img" alt="...">
                <div class="card-img-overlay">
                  <div class="custom-text">
                    <h5 class="card-title">Mari bergabung menjadi keluarga Cinta Quran <br> Foundation agar bisa berbagi <br>dengan sesama</h5>
                    <a href="#about" class="btn btn-light rounded-pill px-5 text-info mb-4">
                      Daftar Sekarang
                      <i style="font-size: 15px;" class='bx bxs-right-arrow-circle' ></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Daftar Section -->
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-6 footer-contact">
              <!-- <h3>Lumia</h3> -->
              <a href="index.html">
                <img src="assets/img/logo.png" alt="" class="img-fluid" style="width: 70%;"/>
              </a>
              <p class="mt-4">Cinta Quran Foundation adalah lembaga independen yang mendakwahkan Alquran sebagai solusi dan inspirasi untuk negeri.</p>
              <button class="btn btn-info rounded-pill px-5 text-light mb-4">
                Lihat Laporan CQ
              </button>
            </div>

            <div class="col-lg-2 col-md-6 footer-links">
              <ul>
                <li>
                  <a href="#">Program</a>
                </li>
                <li>
                  <a href="#">Donasi</a>
                </li>
                <li>
                  <a href="#">Kajian</a>
                </li>
                <li>
                  <a href="#">Kemitraan</a>
                </li>
                <li>
                  <a href="#">Inspirasi</a>
                </li>
              </ul>
            </div>

            <div class="col-lg-2 col-md-6 footer-links">
              <ul>
                <li>
                  <a href="#">Volunteer</a>
                </li>
                <li>
                  <a href="#">Tentang Kami</a>
                </li>
                <li>
                  <a href="#">FAQ</a>
                </li>
                <li>
                  <a href="#">Syarat & Ketentuan</a>
                </li>
                <li>
                  <a href="#">Kebijakan Privasi</a>
                </li>
              </ul>
            </div>

            <div class="col-lg-4 col-md-6 footer-newsletter">
              <div class="row">
                <div class="col-1">
                  <i class='bx bx-map' ></i>
                </div>
                <div class="col">
                  <p>
                    Jl. Parikesit Raya No.35-37 Bantarjati, <br>
                    Bogor Utara, Kota Bogor 16153, Jawa <br>
                    Barat, Indonesia. 
                  </p>
                </div>
              </div>
              <div class="row">
                <div class="col-1">
                  <i class='bx bx-envelope' ></i>
                </div>
                <div class="col">
                  <p>info@cintaquran.or.id</p>
                </div>
              </div>
              <div class="row">
                <div class="col-1">
                  <i class='bx bx-envelope' ></i>
                </div>
                <div class="col">
                  <div class="row">
                    <div class="col">
                      <p>(0251) 85 717 62</p>
                    </div>
                    <div class="col hubungi">
                      <button class="btn btn-info rounded-pill">Hubungi Kami
                        <i class='bx bxl-whatsapp' ></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col ikuti">
                  <h4>Ikuti kami di</h4>
                  <div class="social-links text-left text-md-left pt-3 pt-md-0">
                    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="#" class="youtube"><i class="bx bxl-youtube"></i></a>
                    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                    <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container d-md-flex py-4">
        <div class="mr-md-auto text-center text-md-left">
          <div class="copyright">
            &copy; Copyright CintaQuran Foundation All Rights Reserved
          </div>
        </div>
      
      </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/front/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/front/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/front/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/front/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/front/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/front/vendor/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/front/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/front/vendor/venobox/venobox.min.js') }}"></script>
    <script src="{{ asset('assets/front/vendor/owl.carousel/owl.carousel.min.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/front/js/main.js') }}"></script>
  </body>
</html>
