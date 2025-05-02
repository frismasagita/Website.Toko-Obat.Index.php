<?php
include 'koneksi.php';

// Query untuk mengambil data terakhir
$sql = "SELECT * FROM hasil_deteksi ORDER BY id DESC LIMIT 1";

// Gunakan mysqli_query() untuk MySQL
$result = mysqli_query($conn, $sql);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $nama = $row['nama'];
    $gejala = $row['gejala'];
    $hasil = $row['hasil'];
    $tanggal = $row['tanggal'];
} else {
    echo "Gagal mengambil data: " . mysqli_error($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Deteksi Penyakit</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f4f4f4;">

<section id="hasil-diagnosis" class="result-section" style="background-color: white; padding: 20px; margin: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); max-width: 600px; margin: 30px auto;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="result-container" style="text-align: center;">
                    <h2 style="color: #007bff;">Hasil Deteksi Penyakit</h2>
                    <p style="font-size: 18px; color: #333; margin-bottom: 10px;"><strong>Nama Pasien:</strong> <?php echo $nama; ?></p>
                    <p style="font-size: 18px; color: #333; margin-bottom: 10px;"><strong>Gejala yang Ditemukan:</strong> <?php echo $gejala; ?></p>
                    <p style="font-size: 18px; color: #333; margin-bottom: 10px;"><strong>Hasil Deteksi:</strong> <?php echo $hasil; ?></p>
                    <p style="font-size: 18px; color: #333; margin-bottom: 10px;"><strong>Tanggal Deteksi:</strong> <?php echo $tanggal; ?></p>

                    <!-- Tombol Kembali -->
                    <a href="index.php" style="text-decoration: none;">
                        <button style="background-color: #007bff; color: white; border: none; padding: 10px 20px; font-size: 16px; border-radius: 5px; cursor: pointer; transition: background-color 0.3s;">
                            Kembali ke Halaman Utama
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

</body>
</html>
