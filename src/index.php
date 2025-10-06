<?php
// Database connection test
$host = '127.0.0.1'; // yoki 'localhost'
$port = 3306;
$db = "demo";        // MySQL'dagi mavjud baza nomi (masalan: test)
$user = "root";      // OSPanel'da odatda root foydalanuvchi
$pass = "";          // parol odatda bo'sh bo'ladi

echo "<h1>Salom to PHP 8.4 + Nginx + MySQL 8 Project</h1>";
echo "<p>PHP Version: " . phpversion() . "</p>";

try {
    $dsn = "mysql:host=$host;port=$port;dbname=$db;charset=utf8mb4";
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "<p style='color: green;'>✓ Database connection successful!</p>";
    echo "<p>Database: $db</p>";
} catch (PDOException $e) {
    echo "<p style='color: red;'>✗ Database connection failed: " . $e->getMessage() . "</p>";
}
?>
