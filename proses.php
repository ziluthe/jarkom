<?php
include 'koneksi.php';

// Fungsi untuk membersihkan data input
function sanitize($data) {
    global $db;
    return mysqli_real_escape_string($db, $data);
}

// Memeriksa apakah form login atau register disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['login'])) {
        // LOGIN
        $username = sanitize($_POST['login_username']);
        $password = sanitize($_POST['login_password']);

        $query = "SELECT * FROM admin WHERE username='$username'";
        $result = mysqli_query($db, $query);

        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                $hashedPassword = $row['password'];
                if (password_verify($password, $hashedPassword)) {
                    // Redirect ke beranda.html setelah login berhasil
                    header("Location: index.html");
                    exit();
                } else {
                    echo "Login gagal. Password tidak cocok.";
                }
            } else {
                echo "Login gagal. Username tidak ditemukan.";
            }
        } else {
            echo "Error: " . mysqli_error($db);
        }
    } elseif (isset($_POST['register'])) {
        // REGISTER
        $id = sanitize($_POST['register_id']);
        $username = sanitize($_POST['register_username']);
        $password = password_hash(sanitize($_POST['register_password']), PASSWORD_DEFAULT);

        $query = "INSERT INTO admin (id, username, password) VALUES ('$id', '$username', '$password')";
        $result = mysqli_query($db, $query);

        if ($result) {
            // Redirect ke login.php setelah registrasi berhasil
            header("Location: login.php");
            exit();
        } else {
            echo "Error: " . mysqli_error($db);
        }
    } else {
        // Jika tidak ada aksi yang sesuai
        echo "Aksi tidak valid.";
    }

    // Menutup koneksi database
    mysqli_close($db);
}
?> 