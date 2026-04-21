<?php
include "service/koneksi.php";
$register_message = "";

if(isset($_POST['register'])) {
    // Basic sanitization untuk mencegah Error SQL
    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $password = mysqli_real_escape_string($koneksi, $_POST['password']);

    $sql = "INSERT INTO users (`username`, `password`) VALUES ('$username', '$password')";

    if ($koneksi->query($sql)) {
        echo "<script>alert('Akun berhasil dibuat! Silakan Login.'); window.location.href='login.php';</script>";
        exit();
    } else {
        $register_message = "Terjadi kesalahan, coba lagi.";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - GreenHub</title>
    <link rel="stylesheet" href="styles/style.css?v=<?php echo time(); ?>">
</head>
<body>
    <header>
        <ul type="none" class="name"><li><strong>GreenHub</strong></li></ul>
        <ul type="none">
            <li><a href="index.php">Home</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="register.php">Register</a></li>
        </ul>
    </header>
    
    <main>
        <div class="form-container">
            <h2>Bergabung Bersama Kami</h2>
            <p style="text-align:center; color:red; margin-bottom:10px;"><?= $register_message ?></p>
            <form action="" method="POST">
                <input type="text" placeholder="Username" name="username" required>
                <input type="password" placeholder="Password" name="password" required>
                <button type="submit" name="register">Register</button>
            </form>
        </div>
    </main>
</body>
</html>