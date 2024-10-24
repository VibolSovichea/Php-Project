<?php
include 'config.php';
session_start();

if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: admin_login.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $price = $_POST['price'];
    $location = $_POST['location'];
    $owner_name = $_POST['owner_name'];
    $owner_contact = $_POST['owner_contact'];

    // Insert property details into the 'properties' table
    $stmt = $pdo->prepare("INSERT INTO properties (title, price, location, owner_name, owner_contact) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$title, $price, $location, $owner_name, $owner_contact]);
    $property_id = $pdo->lastInsertId();

    // Handle image uploads
    foreach ($_FILES['images']['tmp_name'] as $index => $tmpName) {
        $image = basename($_FILES['images']['name'][$index]);
        move_uploaded_file($tmpName, "uploads/$image");

        // Save the image path in the 'property_images' table
        $stmt = $pdo->prepare("INSERT INTO property_images (property_id, image) VALUES (?, ?)");
        $stmt->execute([$property_id, $image]);
    }

    echo "Property added successfully!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Property</title>
</head>
<body>
<a href="admin_dashboard.php">Back</a>
<h1>Add New Property</h1>
<form method="POST" action="add_property.php" enctype="multipart/form-data">
    <input type="text" name="title" placeholder="Property Title" required>
    <input type="number" name="price" placeholder="Price" required>
    <input type="text" name="location" placeholder="Location" required>
    <input type="text" name="owner_name" placeholder="Owner Name" required>
    <input type="text" name="owner_contact" placeholder="Owner Contact" required>
    <input type="file" name="images[]" multiple required>
    <button type="submit">Add Property</button>
</form>

</body>
</html>
