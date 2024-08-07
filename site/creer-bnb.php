<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Hash the password
    $passwordHash = password_hash($password, PASSWORD_BCRYPT);

    try {
        // Create (connect to) SQLite database in file
        $db = new PDO('sqlite:bnb.db');
        
        // Set error mode to exceptions
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        // Create table
        $db->exec("CREATE TABLE IF NOT EXISTS users (
            users_id INTEGER PRIMARY KEY,
            email TEXT NOT NULL UNIQUE,
            password_hash TEXT NOT NULL,
            name TEXT NOT NULL
        )");
        
        // Check if the email already exists
        $stmt = $db->prepare("SELECT COUNT(*) FROM users WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        
        if ($stmt->fetchColumn() > 0) {
            header("Location: redirect-page.php?status=exists");
            exit();
        } else {
            // Insert new user
            $stmt = $db->prepare("INSERT INTO users (name, email, password_hash) VALUES (:name, :email, :password_hash)");
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password_hash', $passwordHash);
            
            $stmt->execute();
            
            header("Location: redirect-page.php?status=success");
            exit();
        }

    } catch (PDOException $e) {
        header("Location: redirect-page.php?status=error&message=" . urlencode($e->getMessage()));
        exit();
    }
} else {
    echo "Invalid request method.";
}
