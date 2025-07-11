<?php

// Kredensial database
$servername = "localhost"; // Ganti jika server database Anda berbeda
$username = "root";        // Ganti dengan username database Anda
$password = "";            // Ganti dengan password database Anda
$kegiatan_mahasiswa = "kegiatan_mahasiswa"; // Ganti dengan nama database yang Anda buat

// Membuat koneksi ke database
$conn = new mysqli($servername, $username, $password, $kegiatan_mahasiswa);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Memeriksa apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form dan membersihkannya untuk mencegah SQL Injection
    $nama = $conn->real_escape_string($_POST['nama']);
    $email = $conn->real_escape_string($_POST['email']);
    $peran = $conn->real_escape_string($_POST['peranan_anda']);
    $saran = $conn->real_escape_string($_POST['saran']);

    // Query SQL untuk memasukkan data
    $sql = "INSERT INTO saran (nama, email, peran_anda, saran) VALUES ('$nama', '$email', '$peran', '$saran')";

    // Menjalankan query dan memeriksa hasilnya
    if ($conn->query($sql) === TRUE) {
        // Jika berhasil, kirim respon JSON
        echo json_encode(['status' => 'success', 'message' => 'Terima kasih atas kritik dan saran Anda!']);
    } else {
        // Jika gagal, kirim respon JSON dengan pesan error
        echo json_encode(['status' => 'error', 'message' => 'Error: ' . $sql . '<br>' . $conn->error]);
    }
}

// Menutup koneksi database
$conn->close();

?>