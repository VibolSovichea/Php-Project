<?php
include 'config.php';
session_start();

if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: admin_login.php');
    exit;
}

$stmt = $pdo->query("SELECT * FROM properties");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Dashboard</title>
</head>
<body>

<h1>Admin Dashboard</h1>
<a href="add_property.php">Add New Property</a>
<h2>Properties</h2>
<table>
    <tr>
        <th>Title</th>
        <th>Price</th>
        <th>Location</th>
        <th>Actions</th>
    </tr>
    <?php while ($row = $stmt->fetch()): ?>
        <tr>
            <td><?php echo $row['title']; ?></td>
            <td><?php echo $row['price']; ?></td>
            <td><?php echo $row['location']; ?></td>
            <td>
                <a href="edit_property.php?id=<?php echo $row['id']; ?>">Edit</a> |
                <a href="delete_property.php?id=<?php echo $row['id']; ?>">Delete</a>
            </td>
        </tr>
    <?php endwhile; ?>
</table>

<a href="logout.php">Logout</a>

</body>
</html>
