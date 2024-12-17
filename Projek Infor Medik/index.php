<?php include('header.php'); ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TemanSehat</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <link href="gaya.css" rel="stylesheet">
  <script src="script.js"></script>
  <link rel="icon" type="image/x-icon" href="foto/logo-removebg-preview.png">
</head>
<body>
<header class="header">
    <div class="logo">
      <img alt="Mediline Logo" src="foto/logo-removebg-preview.png" />
      <span>TemanSehat</span>
    </div>
    <nav>
      <a href="#Kategori"><i class="fas fa-stethoscope"></i> Kategori Tindakan Medis</a>
      <a href="https://www.alodokter.com/kesehatan" target="_blank"><i class="fas fa-info-circle"></i> Kesehatan</a>
      <?php if (isset($_SESSION['username'])): ?>
          <!-- Username dan tombol logout -->
          <span id="username" onclick="toggleProfile()"><?php echo $_SESSION['username']; ?></span>
          <a href="logout.php" class="logout-btn">Logout</a>
      <?php else: ?>
          <!-- Jika belum login, tampilkan link login -->
          <a href="login&regis/login.html"><i class="fas fa-sign-in-alt"></i> Login</a>
      <?php endif; ?>
    </nav>
  </header>
  <section class="hero">
    <div class="hero-text">
      <h1>Selamat Datang di TemanSehat</h1>
      <p>Konsultasi kesehatan mudah dan terpercaya</p>
      <button class="cta-button">Mulai Sekarang</button>
    </div>
    <img alt="Doctor Image" src="foto/menu.png" />
  </section>

  <section class="section" id="Spesialisasi">
    <h2>Pilih Spesialisasi Dokter</h2>
    <hr/>
    <div class="grid">
      <div class="grid-item">
        <a href="https://www.alodokter.com/cari-dokter/dokter-mata?page=1" target="_blank">
          <img alt="Dokter Mata" height="200" src="img/doktermata.webp" width="300"/>
          <span>Dokter Mata</span>
        </a>
      </div>
      <div class="grid-item">
        <a href="https://www.alodokter.com/cari-dokter/dokter-anak?page=1" target="_blank">
          <img alt="Dokter Anak" height="200" src="img/dokteranak.jpeg" width="300"/>
          <span>Dokter Anak</span>
        </a>
      </div>
      <div class="grid-item">
        <a href="https://www.alodokter.com/cari-dokter/dokter-paru?page=1" target="_blank">
          <img alt="Dokter Paru" height="200" src="img/dokterparu.jpg" width="300"/>
          <span>Dokter Paru</span>
        </a>
      </div>
      <div class="grid-item">
        <a href="https://www.alodokter.com/cari-dokter/dokter-jiwa?page=1" target="_blank">
          <img alt="Dokter Psikiater" height="200" src="img/dokterpsikiater.png" width="300"/>
          <span>Dokter Psikiater</span>
        </a>
      </div>
      <div class="grid-item">
        <a href="https://www.alodokter.com/cari-dokter/dokter-tht?page=1" target="_blank">
          <img alt="Dokter THT" height="200" src="img/doktertht.webp" width="300"/>
          <span>Dokter THT</span>
        </a>
      </div>
      <div class="grid-item">
        <a href="https://www.alodokter.com/cari-dokter/dokter-kandungan?page=1" target="_blank">
          <img alt="Dokter Kandungan" height="200" src="img/dokterkandungan.jpg" width="300"/>
          <span>Dokter Kandungan</span>
        </a>
      </div>
      <div class="grid-item">
        <a href="https://www.alodokter.com/cari-dokter/dokter-kulit?page=1" target="_blank">
          <img alt="Dokter Kulit" height="200" src="img/dokterkulit.jpg" width="300"/>
          <span>Dokter Kulit</span>
        </a>
      </div>
      <div class="grid-item">
        <a href="https://www.alodokter.com/cari-dokter/dokter-penyakit-dalam?page=1" target="_blank">
          <img alt="Dokter Penyakit Dalam" height="200" src="img/dokterpenyakitdalam.jpg" width="300"/>
          <span>Dokter Penyakit Dalam</span>
        </a>
      </div>
    </div>
  </section>

  <section class="section">
      <h2>Cek Kesehatan</h2>
      <hr>
      <div class="cek-kesehatan">
        <button
        onclick="window.location.href='https://jec.co.id/id/eye-test'"
        target="_blank"
      >
        Kesehatan Mata
      </button>
      <button
          onclick="window.location.href='https://hatiplong.com/?gad_source=1&gclid=CjwKCAiAmfq6BhAsEiwAX1jsZ7_4y_H2DXTYhS4xyH5RqBchNlekU6D9yHXMAc3981Rlq6vgVlQl0BoCKawQAvD_BwE#tes-gratis'"
          target="_blank"
        >
          Tes Psikologi Mental
        </button>
        <button
          onclick="window.location.href='https://www.halodoc.com/bmi-calculator/?srsltid=AfmBOoq2l50p3NcORm6Y47xxxudSU237E3piVHlCEOLc5MEyj8JoPlgZ'"
          target="_blank"
        >
        Berat Badan Ideal
        </button>
        <button
          onclick="window.location.href='https://satupersen.net/quiz/tes-sleep-quality'"
          target="_blank"
        >
        Tes Kualitas Tidur
        </button>
        <button
          onclick="window.location.href='https://satupersen.net/quiz/tes-eating-quality'"
          target="_blank"
        >
        Tes Kualitas Makan
        </button>
        <button
          onclick="window.location.href='https://satupersen.net/quiz/tes-physical-activity'"
          target="_blank"
        >
        Tes Physical Activity
        </button>
        <button
          onclick="window.location.href='https://satupersen.net/quiz/tes-overthinking-rumination'"
          target="_blank"
        >
        Tes Overthinking (Rumination)
      </button>
      </div>
    </section>


  <section class="section">
    <h2>Pola Hidup Sehat</h2>
    <hr/>
    <div class="grid grid-5x1">
      <div class="grid-item">
        <a href="pola-hidup-sehat/kesehatan-mental.html" target="_blank">
          <img alt="Kesehatan Mental" height="200" src="img/kesehatanmental.png" width="300"/>
          <span>Kesehatan Mental</span>
        </a>
      </div>
      <div class="grid-item">
        <a href="pola-hidup-sehat/diet-dan-berat-badan.html" target="_blank">
          <img alt="Diet dan Menjaga Berat Badan" height="200" src="img/dietdanmenjagaberatbadan.webp" width="300"/>
          <span>Diet dan Menjaga Berat Badan</span>
        </a>
      </div>
      <div class="grid-item">
        <a href="pola-hidup-sehat/kebugaran-dan-olahraga.html" target="_blank">
          <img alt="Kebugaran dan Olahraga" height="200" src="img/kebugarandanolahraga.jpg" width="300"/>
          <span>Kebugaran dan Olahraga</span>
        </a>
      </div>
      <div class="grid-item">
        <a href="pola-hidup-sehat/penuaan-sehat.html" target="_blank">
          <img alt="Penuaan Sehat" height="200" src="img/penuaansehat.jpg" width="300"/>
          <span>Penuaan Sehat</span>
        </a>
      </div>
      <div class="grid-item">
        <a href="pola-hidup-sehat/sex-dan-hubungan.html" target="_blank">
          <img alt="Sex dan Hubungan" height="200" src="img/sexdanhubungan.jpg" width="300"/>
          <span>Hubungan</span>
        </a>
      </div>
    </div>    
  </section>

  <section class="section">
    <h2 id="Kategori">Kategori Tindakan Medis</h2>
    <div class="category-buttons">
      <button onclick="window.location.href='https://www.alodokter.com/cari-rumah-sakit/bedah-plastik?page=1'" target="_blank">Bedah Plastik</button>
      <button onclick="window.location.href='https://www.alodokter.com/cari-rumah-sakit/gizi-klinik?page=1'" target="_blank">Gizi Klinik</button>
      <button onclick="window.location.href='https://www.alodokter.com/cari-rumah-sakit/pediatri?page=1'" target="_blank">Anak</button>
      <button onclick="window.location.href='https://www.alodokter.com/cari-rumah-sakit/psikiatri?page=1'" target="_blank">Kejiwaan</button>
      <button onclick="window.location.href='https://www.alodokter.com/cari-rumah-sakit/endokrinologi?page=1'" target="_blank">Kelenjar</button>
      <button onclick="window.location.href='https://www.alodokter.com/cari-rumah-sakit/onkologi?page=1'" target="_blank">Kanker</button>
      <button onclick="window.location.href='https://www.alodokter.com/cari-rumah-sakit/gigi-dan-mulut?page=1'" target="_blank">Gigi dan Mulut</button>
      <button onclick="window.location.href='https://www.alodokter.com/cari-rumah-sakit/ortopedi?page=1'" target="_blank">Bedah Tulang</button>
      <button onclick="window.location.href='https://www.alodokter.com/cari-rumah-sakit/kardiologi?page=1'" target="_blank">Jantung dan Pembuluh Darah</button>
      <button onclick="window.location.href='https://www.alodokter.com/cari-rumah-sakit/bedah-saraf?page=1'" target="_blank">Bedah Saraf</button>
      <button onclick="window.location.href='https://www.alodokter.com/cari-rumah-sakit/kedokteran-umum?page=1'" target="_blank">Kedokteran Umum</button>
      <button onclick="window.location.href='https://www.alodokter.com/cari-rumah-sakit/fisioterapi?page=1'" target="_blank">Fisioterapi</button>
    </div>
  </section>

  <footer class="footer">
    <div class="footer-content">
      <div class="footer-logo">
        <img src="foto/logo-removebg-preview.png" alt="TemanSehat Logo" width="50">
        <span class="footer-logo-text">TemanSehat</span>
      </div>
      <div class="footer-contact">
        <p><strong>Kontak Kami </strong></p>
        <p>Email: <a href="mailto:kontak@temansehat.com">TemanSehat@gmail.com</a></p>
        <p>Telepon: <a href="tel:+6281234567890">+62 813 1502 4772</a></p>
      </div>
    </div>
    <p>&copy; 2024 TemanSehat.</p>
  </footer>  
</body>
</html>
