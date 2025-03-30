<?php 
include 'config/db.php'; 
$id = $_GET['id'];
$product = $conn->query("SELECT * FROM products WHERE id = $id")->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Produk</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h2>Edit Produk</h2>
    <form action="" method="POST">
        <input type="text" name="name" value="<?= $product['name']; ?>" required>
        <input type="number" name="quantity" value="<?= $product['quantity']; ?>" required>
        <input type="number" step="0.01" name="price" value="<?= $product['price']; ?>" required>
        <button type="submit" name="update" class="btn btn-update">Update</button>
    </form>

    <?php
    if(isset($_POST['update'])){
        $name = $_POST['name'];
        $qty = $_POST['quantity'];
        $price = $_POST['price'];

        $conn->query("UPDATE products SET name='$name', quantity=$qty, price=$price WHERE id=$id");
        echo "<p>Produk berhasil diupdate! <a href='index.php'>Kembali ke daftar</a></p>";
    }
    ?>
</body>
</html>
