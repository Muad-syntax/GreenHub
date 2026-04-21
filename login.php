<?php
session_start();
if(isset($_SESSION['username'])){
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css?v=<?php echo time(); ?>">
    <title>Login - GreenHub</title>
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
            <h2>Masuk ke Akunmu</h2>
            <form action="service/proses-login.php" method="POST">
                <input type="text" placeholder="Username" name="username" required>
                <input type="password" placeholder="Password" name="password" required>
                <button type="submit" name="login">Login</button>
            </form>
            <p style="text-align: center; margin-top: 15px;">Belum punya akun? <a href="register.php" style="color: var(--primary-green);">Daftar di sini</a></p>
        </div>
    </main>
</body>
</html>