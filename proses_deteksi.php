<?php
include 'koneksi.php';

$nama=$_POST['nama'];
$gejala=$_POST['gejala'];

$gejala_text=implode(", ", $gejala);

$hasil= "";

$gejala_hasil=[
    ["gejala"=>["Batuk Lama", "Berat Badan Menurun"], "hasil"=>"TBC"],
    ["gejala"=>["Batuk", "Sesak Napas"], "hasil"=>"Asma"],
    ["gejala"=>["Batuk", "Pilek", "Demam"], "hasil"=>"ISPA"],
    ["gejala"=>["Mudah Lelah", "Batuk Lama"], "hasil"=>"PPOK"],
    ["gejala"=>["Sesak Napas", "Batuk Berdahak"], "hasil"=>"Bronkitis"]
];

foreach ($gejala_hasil as $kombinasi){
    if (!array_diff($kombinasi['gejala'], $gejala)){
        $hasil=$kombinasi['hasil'];
        break;
    }
}

if (empty($hasil)){
    $hasil="Hasil Penyakit Tidak Ditemukan";
}

$tanggal=date('Y-m-d H:i:s');

$sql="INSERT INTO hasil_deteksi(nama, gejala, hasil, tanggal)VALUES(?, ?, ?, ?)";
$stmt=$conn->prepare($sql);
$stmt->bind_param("ssss", $nama, $gejala_text, $hasil, $tanggal);
if($stmt->execute()){
    header("Location: hasil_deteksi.php");
    exit();
}else{
    echo "Gagal menyimpan data: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
