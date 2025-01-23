<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$database = "recipe_db"; // Ganti dengan nama database Anda

$conn = new mysqli($servername, $username, $password, $database);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari form
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $recipe_title = $conn->real_escape_string($_POST['recipe_title']);
    $ingredients = $conn->real_escape_string($_POST['ingredients']);
    $steps = $conn->real_escape_string($_POST['steps']);
    $cooking_tips = $conn->real_escape_string($_POST['cooking_tips']);

    // Query untuk menyimpan data
    $sql = "INSERT INTO recipes (name, email, recipe_title, ingredients, steps, cooking_tips)
            VALUES ('$name', '$email', '$recipe_title', '$ingredients', '$steps', '$cooking_tips')";

    if ($conn->query($sql) === TRUE) {
        echo "Resep berhasil disimpan!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
