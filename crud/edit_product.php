<?php
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    $stmt = $conn->prepare("UPDATE product_database SET name = ?, description = ?, price = ? WHERE id = ?");
    $stmt->execute([$name, $description, $price, $id]);

    header('Location: index.php');
    exit;
}

$id = $_GET['id'];
$stmt = $conn->prepare("SELECT * FROM product_database WHERE id = ?");
$stmt->execute([$id]);
$product = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
</head>

<body>
    <h1>Edit Product</h1>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?php echo $product['id']; ?>">
        <label>Name: <input type="text" name="name" value="<?php echo $product['name']; ?>"></label><br>
        <label>Description: <input type="text" name="description"
                value="<?php echo $product['description']; ?>"></label><br>
        <label>Price: <input type="text" name="price" value="<?php echo $product['price']; ?>"></label><br>
        <input type="submit" value="Save Changes">
    </form>
</body>

</html>