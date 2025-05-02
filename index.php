<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Medion</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700|Roboto:400,700&display=swap" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
          <a class="navbar-brand" href="index.php">
            <img src="images/logo.png" alt="">
            <span>SEHAT STORE | Toko Obat & Informasi Kesehatan</span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      
          <div class="navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex flex-column flex-lg-row align-items-center w-100 justify-content-between" >
              <ul class="navbar-nav ml-auto"> <!-- ml-auto to align items to the right -->
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#jenis-penyakit">Jenis Penyakit</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#daftar-obat">Daftar Obat</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#deteksi-form">Deteksi Penyakit</a>
                </li>
              </ul>
            </div>
          </div>
      
        </nav>
      </div>      
    <!-- end header section -->

    <!-- slider section -->
    <section class="mt-3 slider_section position-relative">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="row">
                <div class="col-md-4">
                  <div class="img-box">
                    <img src="images/medicine.png" alt="" >
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="detail-box">
                    <h1>
                      Selamat datang di <br>
                      <span>
                        SEHAT STORE
                      </span>

                    </h1>
                    <p>
                      SEHAT STORE adalah toko obat online terpercaya yang menyediakan berbagai produk kesehatan berkualitas dengan harga terjangkau. 
                      Kami berkomitmen untuk membantu masyarakat mendapatkan akses informasi dan solusi kesehatan yang tepat. 
                      Kami juga menyediakan fitur aplikasi interaktif yang memudahkan pengguna mengenali dan memahami penyakit-penyakit pernapasan seperti asma, bronkitis, hingga pneumonia.
                    </p>
                    <div>
                      <a href="#deteksi-form">
                        Deteksi Penyakit sekarang
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>

  <section id="jenis-penyakit" style="padding: 60px 0; background-color: #fff;">
    <div style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      <h2 style="text-align: center; margin-bottom: 40px; font-size: 32px; font-weight: bold; text-transform: uppercase;">
        Jenis Penyakit
      </h2>
  
      <!-- Baris pertama: 3 kotak -->
      <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 20px; margin-bottom: 20px;">
        <div style="width: 30%; min-width: 220px; aspect-ratio: 1/1; background: #f0f0f0; border-radius: 15px; overflow: hidden; box-shadow: 0 4px 10px rgba(0,0,0,0.1); display: flex; flex-direction: column;">
          <div style="height: 50%; overflow: hidden;">
            <img src="images/asma.jpg" alt="Asma" style="width: 100%; height: 100%; object-fit: cover;">
          </div>
          <div style="padding: 10px; height: 50%; overflow: auto;">
            <h5 style="margin: 0 0 8px; font-size: 16px;">Asma</h5>
            <p style="font-size: 13px; color: #333;">
              Penyakit kronis pada saluran napas yang menyebabkan sesak, batuk, dan napas berbunyi (mengi).
            </p>
          </div>
        </div>
  
        <div style="width: 30%; min-width: 220px; aspect-ratio: 1/1; background: #f0f0f0; border-radius: 15px; overflow: hidden; box-shadow: 0 4px 10px rgba(0,0,0,0.1); display: flex; flex-direction: column;">
          <div style="height: 50%; overflow: hidden;">
            <img src="images/bronkitis.jpg" alt="Bronkitis" style="width: 100%; height: 100%; object-fit: cover;">
          </div>
          <div style="padding: 10px; height: 50%; overflow: auto;">
            <h5 style="margin: 0 0 8px; font-size: 16px;">Bronkitis</h5>
            <p style="font-size: 13px; color: #333;">
              Peradangan bronkus karena infeksi atau rokok. Gejala: batuk berdahak dan sesak napas.
            </p>
          </div>
        </div>
  
        <div style="width: 30%; min-width: 220px; aspect-ratio: 1/1; background: #f0f0f0; border-radius: 15px; overflow: hidden; box-shadow: 0 4px 10px rgba(0,0,0,0.1); display: flex; flex-direction: column;">
          <div style="height: 50%; overflow: hidden;">
            <img src="images/ppok.jpg" alt="PPOK" style="width: 100%; height: 100%; object-fit: cover;">
          </div>
          <div style="padding: 10px; height: 50%; overflow: auto;">
            <h5 style="margin: 0 0 8px; font-size: 16px;">PPOK</h5>
            <p style="font-size: 13px; color: #333;">
              Penyakit paru kronis akibat rokok. Gejala: napas pendek, batuk lama, mudah lelah.
            </p>
          </div>
        </div>
      </div>
  
      <!-- Baris kedua: 2 kotak di tengah -->
      <div style="display: flex; justify-content: center; gap: 20px;">
        <div style="width: 30%; min-width: 220px; aspect-ratio: 1/1; background: #f0f0f0; border-radius: 15px; overflow: hidden; box-shadow: 0 4px 10px rgba(0,0,0,0.1); display: flex; flex-direction: column;">
          <div style="height: 50%; overflow: hidden;">
            <img src="images/tbc.jpg" alt="TBC" style="width: 100%; height: 100%; object-fit: cover;">
          </div>
          <div style="padding: 10px; height: 50%; overflow: auto;">
            <h5 style="margin: 0 0 8px; font-size: 16px;">TBC</h5>
            <p style="font-size: 13px; color: #333;">
              Infeksi paru karena Mycobacterium tuberculosis. Gejala: batuk lama, keringat malam, berat badan turun.
            </p>
          </div>
        </div>
  
        <div style="width: 30%; min-width: 220px; aspect-ratio: 1/1; background: #f0f0f0; border-radius: 15px; overflow: hidden; box-shadow: 0 4px 10px rgba(0,0,0,0.1); display: flex; flex-direction: column;">
          <div style="height: 50%; overflow: hidden;">
            <img src="images/ispa.jpg" alt="ISPA" style="width: 100%; height: 100%; object-fit: cover;">
          </div>
          <div style="padding: 10px; height: 50%; overflow: auto;">
            <h5 style="margin: 0 0 8px; font-size: 16px;">ISPA</h5>
            <p style="font-size: 13px; color: #333;">
              Infeksi virus saluran pernapasan atas. Gejala: demam, batuk, pilek, sakit tenggorokan.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  

  <section id="daftar-obat" style="padding: 60px 0; background-color: #f9f9f9;">
    <div style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      <h2 style="text-align: center; margin-bottom: 40px; font-size: 32px; font-weight: bold; text-transform: uppercase;">
        Daftar Obat
      </h2>
  
      <div style="display: flex; flex-wrap: wrap; gap: 20px; justify-content: center;">
        <!-- Obat 1 -->
        <div style="width: 250px; background: #fff; border-radius: 15px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); padding: 20px; display: flex; flex-direction: column; align-items: center;">
          <img src="images/salbotamol.jpg" alt="Salbutamol" style="width: 100%; height: 200px; object-fit: cover; border-radius: 10px;">
          <div style="margin-top: 10px;">
            <div style="text-align: center;">
              <h6 style="margin: 10px 0 5px;">Salbutamol Inhaler</h6>
              <div style="color: #f5a623; margin-bottom: 5px;">
                ★★★★☆
              </div>
              <h6 style="color: #28a745; margin-bottom: 10px;">Rp45.000,00</h6>
              <a href="#" style="background-color: #007bff; color: #fff; padding: 8px 20px; text-decoration: none; border-radius: 5px;">Buy Now</a>
            </div>
          </div>
        </div>
  
        <!-- Obat 2 -->
        <div style="width: 250px; background: #fff; border-radius: 15px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); padding: 20px; display: flex; flex-direction: column; align-items: center;">
          <img src="images/ambroxol.jpg" alt="Ambroxol" style="width: 100%; height: 200px; object-fit: cover; border-radius: 10px;">
          <div style="margin-top: 10px;">
            <div style="text-align: center;">
              <h6 style="margin: 10px 0 5px;">Ambroxol Tablet</h6>
              <div style="color: #f5a623; margin-bottom: 5px;">
                ★★★★☆
              </div>
              <h6 style="color: #28a745; margin-bottom: 10px;">Rp28.000,00</h6>
              <a href="#" style="background-color: #007bff; color: #fff; padding: 8px 20px; text-decoration: none; border-radius: 5px;">Buy Now</a>
            </div>
          </div>
        </div>
  
        <!-- Obat 3 -->
        <div style="width: 250px; background: #fff; border-radius: 15px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); padding: 20px; display: flex; flex-direction: column; align-items: center;">
          <img src="images/rifapicin.jpg" alt="Rifampicin" style="width: 100%; height: 200px; object-fit: cover; border-radius: 10px;">
          <div style="margin-top: 10px;">
            <div style="text-align: center;">
              <h6 style="margin: 10px 0 5px;">Rifampicin</h6>
              <div style="color: #f5a623; margin-bottom: 5px;">
                ★★★★☆
              </div>
              <h6 style="color: #28a745; margin-bottom: 10px;">Rp65.000,00</h6>
              <a href="#" style="background-color: #007bff; color: #fff; padding: 8px 20px; text-decoration: none; border-radius: 5px;">Buy Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section id="deteksi-form" class="contact_section">
    <div class="container">
      <div class="row">
        <div class="custom_heading-container ">
        <h2 style="text-align: center; margin-bottom: 40px; font-size: 32px; font-weight: bold; text-transform: uppercase;">
          DETEKSI PENYAKIT
        </h2>
        </div>
      </div>
    </div>
    <div class="container layout_padding2">
      <div class="row">
        <div class="col-md-5">
          <div class="form_container">
            <form action="proses_deteksi.php" method="post">
              <!-- Nama Pasien -->
              <div class="form-group">
                <label for="nama" class="form-label">Nama Pasien</label>
                <input type="text" name="nama" id="nama" class="form-control" required>
              </div>
          
              <!-- Gejala -->
              <div class="form-group">
                <label class="form-label">Pilih Gejala:</label>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="gejala[]" value="Batuk Kering" id="g1">
                  <label class="form-check-label" for="g1">Batuk Kering</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="gejala[]" value="Sesak Napas" id="g2">
                  <label class="form-check-label" for="g2">Sesak Napas</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="gejala[]" value="Demam" id="g3">
                  <label class="form-check-label" for="g3">Demam</label>
                </div>
				        <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="gejala[]" value="Batuk Berdahak" id="g4">
                  <label class="form-check-label" for="g4">Batuk Berdahak</label>
                </div>
				        <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="gejala[]" value="Pilek" id="g5">
                  <label class="form-check-label" for="g5">Pilek</label>
                </div>
				        <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="gejala[]" value="Batuk" id="g6">
                  <label class="form-check-label" for="g7">Batuk</label>
                </div>
				 <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="gejala[]" value="Sakit Tenggorokan" id="g7">
                  <label class="form-check-label" for="g7">Sakit Tenggorokan</label>
                </div>
				 <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="gejala[]" value="Mudah Lelah" id="g8">
                  <label class="form-check-label" for="g8">Mudah Lelah</label>
                </div>
				 <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="gejala[]" value="Batuk Lama" id="g9">
                  <label class="form-check-label" for="g9">Batuk Lama</label>
                </div>
				 <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="gejala[]" value="Berat Badan Menurun" id="g10">
                  <label class="form-check-label" for="g10">Berat Badan Menurun</label>
                </div>
              </div>
              <!-- Tombol Submit -->
              <div class="form-group">
                <button type="submit" class="btn btn-primary w-100">Periksa</button>
              </div>
            </form>
          </div>
          
        </div>
        <div class="col-md-7">
          <div class="detail-box">
            <h3>
              Get Now Medicines
            </h3>
            <p>
              There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
              in some form, by injected humour, or randomised words which don't look even slightly believable.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      &copy; 2019 All Rights Reserved. Design by
      <a href="https://html.design/">Free Html Templates</a>
    </p>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js">
  </script>
  <script type="text/javascript">
    $(".owl-carousel").owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      navText: [],
      autoplay: true,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 2
        },
        1000: {
          items: 4
        }
      }
    });
  </script>
  <script type="text/javascript">
    $(".owl-2").owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      navText: [],
      autoplay: true,

      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 2
        },
        1000: {
          items: 4
        }
      }
    });
  </script>
</body>

</html>