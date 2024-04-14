<?php

// Include database connection
include_once 'db_connect.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $college = mysqli_real_escape_string($conn, $_POST['college']);
    $branch = mysqli_real_escape_string($conn, $_POST['branch']);
    $semester = mysqli_real_escape_string($conn, $_POST['semester']);

    // Hash password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert user data into database
    $sql = "INSERT INTO users (name, username, email, password, college, branch, semester) VALUES ('$name', '$username', '$email', '$hashed_password', '$college', '$branch', '$semester')";
    if (mysqli_query($conn, $sql)) {
        // Registration successful
        $_SESSION['registration_success'] = true;
        header("Location: login.html");
        exit();
    } else {
        // Registration failed
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>
