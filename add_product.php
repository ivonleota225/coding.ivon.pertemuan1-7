<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product_name = $_POST['product_name'];
    $category = $_POST['category'];
    $unit_price = $_POST['unit_price'];
    $stock_quantity = $_POST['stock_quantity'];

    $stmt = $conn->prepare("INSERT INTO Products (ProductName, Category, UnitPrice, StockQuantity) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssdi", $product_name, $category, $unit_price, $stock_quantity);

    if ($stmt->execute()) {
        header("Location: index.php");
    } else {
        echo "Error: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
}
?>