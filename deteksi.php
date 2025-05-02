<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Deteksi Penyakit Pernapasan | SEHAT STORE</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">SEHAT STORE</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="index.php">Beranda</a></li>
          <li class="nav-item"><a class="nav-link" href="medicine.php">Obat</a></li>
          <li class="nav-item"><a class="nav-link active" href="deteksi.php">Deteksi Penyakit</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Form Deteksi Penyakit Pernapasan</h4>
          </div>
          <div class="card-body">
            <form action="proses_deteksi.php" method="POST">
              <div class="mb-3">
                <label for="nama" class="form-label">Nama Pasien</label>
                <input type="text" name="nama" id="nama" class="form-control" required>
              </div>
              <div class="mb-3">
                <label class="form-label">Pilih Gejala:</label><br>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="gejala[]" value="Batuk Kering" id="gejala1">
                  <label class="form-check-label" for="gejala1">Batuk Kering</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="gejala[]" value="Sesak Napas" id="gejala2">
                  <label class="form-check-label" for="gejala2">Sesak Napas</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="gejala[]" value="Demam" id="gejala3">
                  <label class="form-check-label" for="gejala3">Demam</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="gejala[]" value="Batuk Berdahak" id="gejala4">
                  <label class="form-check-label" for="gejala4">Batuk Berdahak</label>
                </div>
				<div class="form-check">
                  <input class="form-check-input" type="checkbox" name="gejala[]" value="Pilek" id="gejala5">
                  <label class="form-check-label" for="gejala5">Pilek</label>
                </div>
				<div class="form-check">
                  <input class="form-check-input" type="checkbox" name="gejala[]" value="Batuk" id="gejala6">
                  <label class="form-check-label" for="gejala6">Batuk</label>
                </div>
				<div class="form-check">
                  <input class="form-check-input" type="checkbox" name="gejala[]" value="Sakit Tenggorokan" id="gejala7">
                  <label class="form-check-label" for="gejala7">Sakit Tenggorokan</label>
                </div>
				<div class="form-check">
                  <input class="form-check-input" type="checkbox" name="gejala[]" value="Mudah Lelah" id="gejala8">
                  <label class="form-check-label" for="gejala8">Mudah Lelah</label>
                </div>
				<div class="form-check">
                  <input class="form-check-input" type="checkbox" name="gejala[]" value="Batuk Lama" id="gejala9">
                  <label class="form-check-label" for="gejala9">Batuk Lama</label>
                </div>
				<div class="form-check">
                  <input class="form-check-input" type="checkbox" name="gejala[]" value="Berat Badan Menurun" id="gejala10">
                  <label class="form-check-label" for="gejala10">Berat Badan Menurun</label>
                </div>
              </div>
              <div class="text-end">
                <button type="submit" class="btn btn-success">Deteksi Sekarang</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
