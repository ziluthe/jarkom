<?php
// Mulai atau ambil sesi yang ada
session_start();

// Hapus semua data sesi
session_destroy();

// Redirect ke halaman login atau halaman lain setelah logout
header("Location: login.php"); // Gantilah login.php dengan halaman yang sesuai
exit();
?>
