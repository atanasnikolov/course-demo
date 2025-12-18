<?php
$host = "localhost";
$dbname = "testdb";
$user = "testuser";
$password = "password123";

try {
    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";

    $pdo = new PDO($dsn, $user, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);

    echo "Successful connection to the database";

} catch (PDOException $e) {
    // Friendly message for users, detailed error for logs
    echo "Database connection failed. Please try again later.";

    // Optional: log the real error (recommended)
    error_log("DB Connection Error: " . $e->getMessage());
}
?>
