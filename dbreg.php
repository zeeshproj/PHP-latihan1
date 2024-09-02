<?php
// Koneksi ke database
$servername = "localhost";
$username = "ken";
$password = "Kenzie0708";
$database = "pejabat";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Memproses data form
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $password = $_POST['password'];

    // Hash password
    // $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    // SQL untuk menyimpan data
    // $sql = "INSERT INTO users (nama, username, password) VALUES (?, ?, ?)";

    // Prepare statement
    // $stmt = $conn->prepare($sql);
    // $stmt->bind_param("sss", $name, $email, $hashed_password);

    // Eksekusi statement
//     if ($stmt->execute()) {
//         echo "Registrasi berhasil";
//     } else {
//         echo "Error: " . $stmt->error;
//     }

//     // Menutup statement dan koneksi
//     $stmt->close();
// }

?>
