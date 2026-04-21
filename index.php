<?php
include "service/koneksi.php";
session_start();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GreenHub - Beranda</title>
    <link rel="stylesheet" href="styles/style.css?v=<?php echo time(); ?>">
</head>

<body>
    <header>
        <ul type="none" class="name">
            <li>
                <strong>GreenHub</strong>
                <span>
                    <?php
                    if (isset($_SESSION["username"])) {
                        echo "Halo, " . $_SESSION["username"] . "!";
                    } else {
                        echo "Guest";
                    }
                    ?>
                </span>
            </li>
        </ul>
        <ul type="none">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <?php if (!isset($_SESSION["username"])): ?>
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Register</a></li>
            <?php else: ?>
                <li><a href="logout.php">Logout</a></li>
            <?php endif; ?>
        </ul>
    </header>
    <main>

        <section class="hero">
            <h1>Langkah Kecil untuk Bumi yang Lebih Hijau</h1>
            <p>Selamat datang di GreenHub. Mari bersama-sama wujudkan lingkungan yang bersih, sehat, dan nyaman untuk generasi masa depan. Kurangi sampah, tanam pohon, dan mulailah dari diri sendiri!</p>
        </section>

        <section class="card-container">
            <div class="card">
                <h3>🌱 Reboisasi</h3>
                <p>Menanam satu pohon hari ini berarti memberikan napas segar untuk kehidupan puluhan tahun ke depan.</p>
            </div>
            <div class="card">
                <h3>♻️ Daur Ulang</h3>
                <p>Pisahkan sampah organik dan anorganik. Jadikan barang bekas kembali memiliki nilai guna.</p>
            </div>
            <div class="card">
                <h3>💧 Hemat Air</h3>
                <p>Gunakan air secukupnya. Mematikan keran air saat tidak digunakan adalah tindakan pahlawan lingkungan.</p>
            </div>
        </section>

    </main>
    <footer>

        <p>&copy; 2026 GreenHub - Peduli Lingkungan</p>
    
    </footer>
</body>

</html>