<?php
// Koneksi ke database
$servername = "localhost"; // Ganti dengan server Anda
$username = "root"; // Ganti dengan username database Anda
$password = ""; // Ganti dengan password database Anda
$dbname = "kegiatan_mahasiswa"; // Ganti dengan nama database Anda

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Memeriksa apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $peranan_anda = $_POST['peranan_anda'];
    $saran = $_POST['saran'];

    // Menyiapkan dan mengikat
    $stmt = $conn->prepare("INSERT INTO saran (nama, email, peranan_anda, saran) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $nama, $email, $peranan_anda, $saran);

    // Menjalankan pernyataan
    if ($stmt->execute()) {
        echo "Data berhasil disimpan!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Menutup pernyataan dan koneksi
    $stmt->close();
}

$conn->close();
?>
