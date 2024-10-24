<?php
include 'config.php';

$property_id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM properties WHERE id = ?");
$stmt->execute([$property_id]);
$property = $stmt->fetch();

// Fetch property images
$imgStmt = $pdo->prepare("SELECT * FROM property_images WHERE property_id = ?");
$imgStmt->execute([$property_id]);
$images = $imgStmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $property['title']; ?></title>
</head>
<body>

<h1><?php echo $property['title']; ?></h1>
<p>Price: <?php echo $property['price']; ?></p>
<p>Location: <?php echo $property['location']; ?></p>
<p>Owner: <?php echo $property['owner_name']; ?> | Contact: <?php echo $property['owner_contact']; ?></p>

<h2>Images</h2>
<?php foreach ($images as $image): ?>
    <img src="uploads/<?php echo $image['image']; ?>" width="200">
<?php endforeach; ?>

</body>
</html>
