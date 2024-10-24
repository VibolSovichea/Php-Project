<?php
include 'config.php';

// Search functionality
$sql = "SELECT * FROM properties WHERE 1=1";
if (!empty($_GET['location'])) {
    $sql .= " AND location LIKE '%" . $_GET['location'] . "%'";
}
if (!empty($_GET['min_price'])) {
    $sql .= " AND price >= " . $_GET['min_price'];
}
if (!empty($_GET['max_price'])) {
    $sql .= " AND price <= " . $_GET['max_price'];
}
$stmt = $pdo->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Real Estate Listings</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<h1>Search Properties</h1>
<form method="GET" action="index.php">
    <input type="text" name="location" placeholder="Location">
    <input type="number" name="min_price" placeholder="Min Price">
    <input type="number" name="max_price" placeholder="Max Price">
    <button type="submit">Search</button>
</form>

<h2>Property Listings</h2>
<?php while ($row = $stmt->fetch()): ?>
    <div class="property">
        <h3><?php echo $row['title']; ?></h3>
        <p>Price: <?php echo $row['price']; ?></p>
        <p>Location: <?php echo $row['location']; ?></p>
        
        <!-- Fetch the first image for the property -->
        <?php
        $imgStmt = $pdo->prepare("SELECT image FROM property_images WHERE property_id = ? LIMIT 1");
        $imgStmt->execute([$row['id']]);
        $image = $imgStmt->fetch();
        ?>
        <?php if ($image): ?>
            <img src="uploads/<?php echo $image['image']; ?>" width="200">
        <?php endif; ?>
        
        <p>Owner: <?php echo $row['owner_name']; ?> | Contact: <?php echo $row['owner_contact']; ?></p>
        <a href="property_details.php?id=<?php echo $row['id']; ?>">View Details</a>
    </div>
<?php endwhile; ?>

</body>
</html>
