<?php require_once 'config.php'; ?>
<!doctype html>
<html lang="id">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="encoding" content="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta id="meta-application-name" name="application-name" content="<?= SITE_NAME ?> | Portal Resmi" />
    <meta id="meta-description" name="description" content="<?= SITE_DESCRIPTION ?>" />
    <meta id="meta-keywords" name="keywords" content="<?= SITE_KEYWORDS ?>" />
        
    <meta name='google' content='notranslate' />
    <meta name='theme' content='Faisol Themes' />
    <meta name='designer' content='Ach Faisol S Arifin' />
    <meta name='theme:designer' content='Ach Faisol S Arifin' />
    <meta name='theme:version' content='<?= SITE_VERSION ?>' />
    <meta property="og:title" content="<?= SITE_NAME ?> - Portal Resmi">
    <meta property="og:description" content="<?= SITE_DESCRIPTION ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= SITE_URL ?>">
    <meta property="og:site_name" content="<?= SITE_NAME ?>"/>
    <meta property="fb:app_id" content="147912828718">

    <link rel="preload" href="./assets/img/LOGO-MAARIF-WEB.jpg" as="image">
    <link rel="preload" href="./assets/img/Sipinter-LPMaarifNU.jpg" as="image">

    <link rel="icon" href="./assets/img/LOGO-MAARIF-WEB.jpg" type="image/png">
    <link rel="manifest" href="./manifest.json">
    <meta name="theme-color" content="#22c55e">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta name="apple-mobile-web-app-title" content="LP Ma'arif NU">
    <link rel="apple-touch-icon" href="./assets/img/LOGO-MAARIF-WEB.jpg">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <link rel="stylesheet" href="<?= get_asset_url('css/style.css') ?>">

    <title><?= SITE_NAME ?> | Portal Resmi</title>
  </head>
  <body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-white shadow-sm">
      <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="#">
          <img src="./assets/img/LOGO-MAARIF-WEB.jpg" alt="LP Ma'arif NU" width="40" height="40" class="me-2">
          <span class="fw-bold text-success">LP Ma'arif NU</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" href="#beranda">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#tentang">Tentang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#layanan">Layanan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#statistik">Statistik</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#kontak">Kontak</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Hero Section -->
    <section id="beranda" class="hero-section">
      <div class="hero-overlay"></div>
      <div class="container">
        <div class="row align-items-center min-vh-100">
          <div class="col-lg-6">
            <div class="hero-content animate__animated animate__fadeInLeft">
              <h1 class="hero-title mb-4">
                Membangun Generasi Cerdas
                <span class="text-success">Berakhlak Mulia</span>
              </h1>
              <p class="hero-subtitle mb-4">
                Lembaga Pendidikan Ma'arif Nahdlatul Ulama PBNU menaungi lebih dari <strong><?= format_number(TOTAL_SCHOOLS) ?> satuan pendidikan</strong> 
                di seluruh Indonesia, mulai dari PAUD, TK, SD/MI, SMP/MTs, hingga SMA/SMK/MA, dengan komitmen 
                menghadirkan pendidikan Islam berkualitas yang memadukan kearifan tradisional dan inovasi modern.
              </p>
              <div class="hero-buttons">
                <a href="#tentang" class="btn btn-success btn-lg me-3">
                  <i class="fas fa-arrow-right me-2"></i>Selengkapnya
                </a>
                <a href="#layanan" class="btn btn-outline-success btn-lg">
                  <i class="fas fa-graduation-cap me-2"></i>Layanan Kami
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="hero-image animate__animated animate__fadeInRight">
              <div class="floating-card">
                <i class="fas fa-school text-success mb-3"></i>
                <h4><?= format_number(TOTAL_SCHOOLS) ?></h4>
                <p>Satuan Pendidikan</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- About Section -->
    <section id="tentang" class="section-padding bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center mb-5">
            <span class="section-badge">Tentang Kami</span>
            <h2 class="section-title"><?= SITE_NAME ?></h2>
            <p class="section-subtitle">
              Organisasi otonom Nahdlatul Ulama yang bergerak di bidang pendidikan Islam
            </p>
          </div>
        </div>
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="about-content">
              <h3 class="mb-4">Visi & Misi Pendidikan Islam Terdepan</h3>
              <p class="mb-4">
                LP Ma'arif NU PBNU didirikan dengan tujuan mulia untuk mengembangkan pendidikan Islam yang 
                berkualitas, berkarakter, dan berdaya saing tinggi. Kami berkomitmen mencetak generasi 
                muslim yang cerdas, berakhlak mulia, dan mampu berkontribusi positif bagi bangsa dan negara.
              </p>
              
              <div class="feature-list">
                <div class="feature-item mb-3">
                  <i class="fas fa-check-circle text-success me-3"></i>
                  <div>
                    <h5>Pendidikan Berkualitas</h5>
                    <p>Standar pendidikan tinggi dengan kurikulum terintegrasi</p>
                  </div>
                </div>
                <div class="feature-item mb-3">
                  <i class="fas fa-check-circle text-success me-3"></i>
                  <div>
                    <h5>Akhlak Mulia</h5>
                    <p>Pembentukan karakter islami dan nilai-nilai kebangsaan</p>
                  </div>
                </div>
                <div class="feature-item mb-3">
                  <i class="fas fa-check-circle text-success me-3"></i>
                  <div>
                    <h5>Inovasi Pembelajaran</h5>
                    <p>Metode pembelajaran modern dan teknologi terkini</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="about-image">
              <img src="./assets/img/LOGO-MAARIF-WEB.jpg" class="img-fluid rounded-3 shadow" alt="LP Ma'arif NU">
              <div class="about-badge">
                <span class="badge bg-success fs-6">Est. 1926</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Services Section -->
    <section id="layanan" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center mb-5">
            <span class="section-badge">Layanan Digital</span>
            <h2 class="section-title">Platform & Aplikasi Kami</h2>
            <p class="section-subtitle">
              Akses mudah ke berbagai layanan pendidikan melalui platform digital terintegrasi
            </p>
          </div>
        </div>
        <div class="row g-4">
          <div class="col-lg-6">
            <div class="service-card animate__animated animate__fadeInUp">
              <div class="service-icon">
                <img src="./assets/img/LOGO-MAARIF-WEB.jpg" alt="Portal Ma'arif" class="img-fluid">
              </div>
              <div class="service-content">
                <h4>Portal Resmi LP Ma'arif NU</h4>
                <p class="mb-4">
                  Portal utama yang menyediakan informasi lengkap tentang kebijakan pendidikan, 
                  berita terkini, program-program unggulan, dan berbagai layanan administratif 
                  untuk seluruh satuan pendidikan Ma'arif NU di Indonesia.
                </p>
                <ul class="service-features mb-4">
                  <li><i class="fas fa-check text-success me-2"></i>Informasi kebijakan terbaru</li>
                  <li><i class="fas fa-check text-success me-2"></i>Berita dan pengumuman</li>
                  <li><i class="fas fa-check text-success me-2"></i>Direktori sekolah Ma'arif</li>
                  <li><i class="fas fa-check text-success me-2"></i>Resource pendidikan</li>
                </ul>
                <a href="<?= PORTAL_URL ?>" target="_blank" class="btn btn-success">
                  <i class="fas fa-external-link-alt me-2"></i>Kunjungi Portal
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="service-card animate__animated animate__fadeInUp">
              <div class="service-icon">
                <img src="./assets/img/Sipinter-LPMaarifNU.jpg" alt="SIPINTER" class="img-fluid">
              </div>
              <div class="service-content">
                <h4>SIPINTER Ma'arif NU</h4>
                <p class="mb-4">
                  Sistem Informasi Pesantren Terintegrasi yang mengelola data komprehensif 
                  seluruh satuan pendidikan Ma'arif NU. Platform modern untuk monitoring, 
                  evaluasi, dan pengembangan kualitas pendidikan secara real-time.
                </p>
                <ul class="service-features mb-4">
                  <li><i class="fas fa-check text-success me-2"></i>Database sekolah terintegrasi</li>
                  <li><i class="fas fa-check text-success me-2"></i>Monitoring kualitas pendidikan</li>
                  <li><i class="fas fa-check text-success me-2"></i>Laporan statistik real-time</li>
                  <li><i class="fas fa-check text-success me-2"></i>Manajemen data siswa & guru</li>
                </ul>
                <a href="<?= SIPINTER_URL ?>" target="_blank" class="btn btn-success">
                  <i class="fas fa-external-link-alt me-2"></i>Akses SIPINTER
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Statistics Section -->
    <section id="statistik" class="section-padding bg-success text-white">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center mb-5">
            <span class="section-badge bg-white text-success">Statistik Pendidikan</span>
            <h2 class="section-title text-white">Jejak Kontribusi Nyata</h2>
            <p class="section-subtitle text-white-50">
              Data terkini mengenai pencapaian dan kontribusi LP Ma'arif NU dalam dunia pendidikan Indonesia
            </p>
          </div>
        </div>
        <div class="row g-4">
          <div class="col-lg-3 col-md-6">
            <div class="stats-card text-center">
              <div class="stats-icon mb-3">
                <i class="fas fa-school fa-3x"></i>
              </div>
              <h3 class="stats-number" data-count="<?= TOTAL_SCHOOLS ?>"><?= format_number(TOTAL_SCHOOLS) ?></h3>
              <p class="stats-label">Satuan Pendidikan</p>
              <small class="stats-desc">Dari PAUD hingga SMA/SMK/MA</small>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="stats-card text-center">
              <div class="stats-icon mb-3">
                <i class="fas fa-users fa-3x"></i>
              </div>
              <h3 class="stats-number" data-count="<?= TOTAL_STUDENTS ?>"><?= format_number(TOTAL_STUDENTS) ?></h3>
              <p class="stats-label">Peserta Didik</p>
              <small class="stats-desc">Tersebar di 34 provinsi Indonesia</small>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="stats-card text-center">
              <div class="stats-icon mb-3">
                <i class="fas fa-chalkboard-teacher fa-3x"></i>
              </div>
              <h3 class="stats-number" data-count="<?= TOTAL_TEACHERS ?>"><?= format_number(TOTAL_TEACHERS) ?></h3>
              <p class="stats-label">Tenaga Pendidik</p>
              <small class="stats-desc">Guru dan tenaga kependidikan</small>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="stats-card text-center">
              <div class="stats-icon mb-3">
                <i class="fas fa-calendar fa-3x"></i>
              </div>
              <h3 class="stats-number" data-count="<?= get_establishment_years() ?>"><?= get_establishment_years() ?> Tahun</h3>
              <p class="stats-label">Pengalaman</p>
              <small class="stats-desc">Sejak tahun <?= ESTABLISHMENT_YEAR ?></small>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section id="kontak" class="section-padding bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center mb-5">
            <span class="section-badge">Hubungi Kami</span>
            <h2 class="section-title">Informasi Kontak</h2>
            <p class="section-subtitle">
              Siap melayani dan memberikan informasi terbaik untuk kemajuan pendidikan
            </p>
          </div>
        </div>
        <div class="row g-4">
          <div class="col-lg-4">
            <div class="contact-card text-center">
              <div class="contact-icon mb-3">
                <i class="fas fa-map-marker-alt fa-2x text-success"></i>
              </div>
              <h5>Alamat Kantor</h5>
              <p class="text-muted">
                <?= CONTACT_ADDRESS ?>
              </p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="contact-card text-center">
              <div class="contact-icon mb-3">
                <i class="fas fa-phone fa-2x text-success"></i>
              </div>
              <h5>Telepon</h5>
              <p class="text-muted">
                <?= CONTACT_PHONE ?><br>
                (021) 3100 053<br>
                Fax: (021) 3100 052
              </p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="contact-card text-center">
              <div class="contact-icon mb-3">
                <i class="fas fa-envelope fa-2x text-success"></i>
              </div>
              <h5>Email</h5>
              <p class="text-muted">
                <?= CONTACT_EMAIL ?><br>
                admin@maarifnu.or.id<br>
                humas@maarif.nu.or.id
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="footer-section bg-dark text-white">
      <div class="container">
        <div class="row g-4">
          <div class="col-lg-4">
            <div class="footer-brand">
              <img src="./assets/img/LOGO-MAARIF-WEB.jpg" alt="LP Ma'arif NU" width="60" height="60" class="mb-3">
              <h5 class="text-success mb-3"><?= SITE_NAME ?></h5>
              <p class="text-light-emphasis">
                Lembaga Pendidikan Ma'arif Nahdlatul Ulama PBNU berkomitmen 
                mengembangkan pendidikan Islam berkualitas untuk mencerdaskan bangsa.
              </p>
            </div>
          </div>
          <div class="col-lg-2">
            <h6 class="text-success mb-3">Navigasi</h6>
            <ul class="list-unstyled">
              <li class="mb-2"><a href="#beranda" class="text-light-emphasis text-decoration-none">Beranda</a></li>
              <li class="mb-2"><a href="#tentang" class="text-light-emphasis text-decoration-none">Tentang</a></li>
              <li class="mb-2"><a href="#layanan" class="text-light-emphasis text-decoration-none">Layanan</a></li>
              <li class="mb-2"><a href="#statistik" class="text-light-emphasis text-decoration-none">Statistik</a></li>
              <li class="mb-2"><a href="#kontak" class="text-light-emphasis text-decoration-none">Kontak</a></li>
            </ul>
          </div>
          <div class="col-lg-3">
            <h6 class="text-success mb-3">Layanan Digital</h6>
            <ul class="list-unstyled">
              <li class="mb-2">
                <a href="<?= PORTAL_URL ?>" target="_blank" class="text-light-emphasis text-decoration-none">
                  <i class="fas fa-external-link-alt me-2"></i>Portal Ma'arif NU
                </a>
              </li>
              <li class="mb-2">
                <a href="<?= SIPINTER_URL ?>" target="_blank" class="text-light-emphasis text-decoration-none">
                  <i class="fas fa-external-link-alt me-2"></i>SIPINTER Ma'arif
                </a>
              </li>
            </ul>
          </div>
          <div class="col-lg-3">
            <h6 class="text-success mb-3">Ikuti Kami</h6>
            <div class="social-links">
              <a href="<?= FACEBOOK_URL ?>" class="text-light-emphasis me-3"><i class="fab fa-facebook fa-lg"></i></a>
              <a href="<?= TWITTER_URL ?>" class="text-light-emphasis me-3"><i class="fab fa-twitter fa-lg"></i></a>
              <a href="<?= INSTAGRAM_URL ?>" class="text-light-emphasis me-3"><i class="fab fa-instagram fa-lg"></i></a>
              <a href="<?= YOUTUBE_URL ?>" class="text-light-emphasis me-3"><i class="fab fa-youtube fa-lg"></i></a>
            </div>
            <div class="mt-3">
              <small class="text-light-emphasis">
                📧 <?= CONTACT_EMAIL ?><br>
                📞 <?= CONTACT_PHONE ?>
              </small>
            </div>
          </div>
        </div>
        <hr class="my-4 border-secondary">
        <div class="row">
          <div class="col-lg-6">
            <p class="mb-0 text-light-emphasis">
              &copy; <?= get_current_year() ?> <?= SITE_NAME ?>. All rights reserved.
            </p>
          </div>
          <div class="col-lg-6 text-end">
            <p class="mb-0 text-light-emphasis">
              Developed with <i class="fas fa-heart text-danger"></i> for Indonesian Education
            </p>
          </div>
        </div>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    <!-- Custom JavaScript -->
    <script src="<?= get_asset_url('js/main.js') ?>"></script>
    
    <!-- Inline JavaScript for immediate functionality -->
    <script>
      // Immediate smooth scrolling setup (backup)
      document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
          e.preventDefault();
          const target = document.querySelector(this.getAttribute('href'));
          if (target) {
            const offsetTop = target.offsetTop - 80;
            window.scrollTo({
              top: offsetTop,
              behavior: 'smooth'
            });
          }
        });
      });

      // Immediate active navigation highlighting
      const updateActiveNavigation = () => {
        const sections = document.querySelectorAll('section[id]');
        const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
        
        let current = '';
        sections.forEach(section => {
          const sectionTop = section.offsetTop - 100;
          const sectionHeight = section.clientHeight;
          if (scrollY >= sectionTop && scrollY < sectionTop + sectionHeight) {
            current = section.getAttribute('id');
          }
        });

        navLinks.forEach(link => {
          link.classList.remove('active');
          if (link.getAttribute('href') === '#' + current) {
            link.classList.add('active');
          }
        });
      };

      window.addEventListener('scroll', updateActiveNavigation);

      // Counter animation for statistics (immediate)
      const animateCounters = () => {
        const counters = document.querySelectorAll('.stats-number');
        
        counters.forEach(counter => {
          if (counter.classList.contains('animated')) return;
          
          const target = parseInt(counter.getAttribute('data-count'));
          const duration = 2000;
          const increment = target / (duration / 16);
          let current = 0;
          
          counter.classList.add('animated');
          
          const updateCounter = () => {
            if (current < target) {
              current += increment;
              if (target >= 1000000) {
                counter.textContent = (Math.floor(current / 1000000)) + ' Juta+';
              } else if (target >= 1000) {
                counter.textContent = Math.floor(current).toLocaleString() + '+';
              } else {
                counter.textContent = Math.floor(current) + ' Tahun';
              }
              requestAnimationFrame(updateCounter);
            } else {
              if (target >= 1000000) {
                counter.textContent = (Math.floor(target / 1000000)) + ' Juta+';
              } else if (target >= 1000) {
                counter.textContent = target.toLocaleString() + '+';
              } else {
                counter.textContent = target + ' Tahun';
              }
            }
          };
          
          updateCounter();
        });
      };

      // Intersection Observer for counter animation
      const observerOptions = {
        threshold: 0.5,
        rootMargin: '0px 0px -100px 0px'
      };

      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            animateCounters();
            observer.unobserve(entry.target);
          }
        });
      }, observerOptions);

      const statsSection = document.querySelector('#statistik');
      if (statsSection) {
        observer.observe(statsSection);
      }

      // Add animation on scroll
      const animateOnScroll = () => {
        const elements = document.querySelectorAll('.animate__animated:not(.animate__fadeInUp)');
        
        elements.forEach(element => {
          const elementTop = element.getBoundingClientRect().top;
          const elementVisible = 150;
          
          if (elementTop < window.innerHeight - elementVisible) {
            element.classList.add('animate__fadeInUp');
          }
        });
      };

      window.addEventListener('scroll', animateOnScroll);
      
      // Initial call for elements already in view
      document.addEventListener('DOMContentLoaded', () => {
        animateOnScroll();
        updateActiveNavigation();
      });
    </script>
  </body>
</html>
