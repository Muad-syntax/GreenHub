<?php
include "service/koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GreenHub - About</title>
    <link rel="stylesheet" href="styles/style.css?v=<?php echo time(); ?>">
</head>

</head>

<body>
    <header>
        <ul type="none" class="name">
            <li><strong>GreenHub</strong></li>
        </ul>
        <ul type="none">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <?php if (!isset($_SESSION["username"])): ?>
                <li><a href="login.php">Login</a></li>
            <?php else: ?>
                <li><a href="logout.php">Logout</a></li>
            <?php endif; ?>
        </ul>
    </header>
    <main>
        <div class="form-container" style="max-width: 800px;">
            <h2>Tentang GreenHub</h2>
            <p style="line-height: 1.6; margin-bottom: 15px;">GreenHub adalah platform komunitas yang didedikasikan untuk meningkatkan kesadaran masyarakat tentang pentingnya menjaga kebersihan lingkungan. Kami percaya bahwa perubahan besar dimulai dari kebiasaan kecil di rumah kita sendiri.</p>
            <p style="line-height: 1.6;">Visi kami adalah menciptakan ekosistem di mana setiap individu sadar akan jejak karbon mereka dan secara aktif berpartisipasi dalam menjaga kelestarian alam demi bumi yang lebih sejuk.</p>
        </div>
    </main>
    <footer>
        <p>&copy; 2026 GreenHub - Peduli Lingkungan</p>
    </footer>
</body>

</html>