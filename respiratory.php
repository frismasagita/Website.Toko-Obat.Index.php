<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Penyakit Pernapasan | SEHAT STORE</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">
  <?php include 'header.php'; ?>

  <section class="layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>Penyakit Pernapasan</h2>
        <p>Berikut informasi dan daftar obat yang dapat membantu menangani gangguan pernapasan seperti:</p>
        <ul>
          <li>Asma</li>
          <li>Bronkitis</li>
          <li>PPOK (Penyakit Paru Obstruktif Kronis)</li>
          <li>TBC</li>
          <li>Infeksi Saluran Pernapasan Atas (ISPA)</li>
        </ul>
      </div>

      <div class="row">
        <!-- Produk Obat 1 -->
        <div class="col-md-4">
          <div class="box">
            <div class="img-box">
              <img src="images/asma-medicine.jpg" alt="Obat Asma">
            </div>
            <div class="detail-box">
              <h5>Salbutamol Inhaler</h5>
              <p>Obat bronkodilator untuk mengatasi serangan asma secara cepat.</p>
              <h6>Rp 45.000</h6>
              <a href="#">Beli Sekarang</a>
            </div>
          </div>
        </div>

        <!-- Produk Obat 2 -->
        <div class="col-md-4">
          <div class="box">
            <div class="img-box">
              <img src="images/bronchitis.jpg" alt="Obat Bronkitis">
            </div>
            <div class="detail-box">
              <h5>Ambroxol Tablet</h5>
              <p>Obat ekspektoran untuk mengencerkan dahak pada bronkitis dan batuk berdahak.</p>
              <h6>Rp 28.000</h6>
              <a href="#">Beli Sekarang</a>
            </div>
          </div>
        </div>

        <!-- Produk Obat 3 -->
        <div class="col-md-4">
          <div class="box">
            <div class="img-box">
              <img src="images/tbc.jpg" alt="Obat TBC">
            </div>
            <div class="detail-box">
              <h5>Rifampicin</h5>
              <p>Antibiotik untuk pengobatan Tuberkulosis (TBC), sesuai resep dokter.</p>
              <h6>Rp 65.000</h6>
              <a href="#">Beli Sekarang</a>
            </div>
          </div>
        </div>
      </div>

      <div class="mt-4 text-center">
        <a class="btn btn-primary" href="medicine.php">Lihat Semua Obat</a>
      </div>
    </div>
  </section>

  <?php include 'footer.php'; ?>
  <script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>
