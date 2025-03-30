<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gudang dan Penjualan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Daftar Produk Gudang</h1>
        
        <!-- Form Tambah Produk -->
        <form id="addProductForm" action="add_product.php" method="POST">
            <input type="text" name="product_name" placeholder="Nama Produk" required>
            <input type="text" name="category" placeholder="Kategori" required>
            <input type="number" name="unit_price" placeholder="Harga Satuan" step="0.01" required>
            <input type="number" name="stock_quantity" placeholder="Jumlah Stok" required>
            <button type="submit">Tambah Produk</button>
        </form>

        <!-- Tabel Produk -->
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Produk</th>
                    <th>Kategori</th>
                    <th>Harga Satuan</th>
                    <th>Stok</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'config.php';
                $result = $conn->query("SELECT * FROM Products");
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['ProductID'] . "</td>";
                    echo "<td>" . $row['ProductName'] . "</td>";
                    echo "<td>" . $row['Category'] . "</td>";
                    echo "<td>Rp " . number_format($row['UnitPrice'], 2, ',', '.') . "</td>";
                    echo "<td>" . $row['StockQuantity'] . "</td>";
                    echo "</tr>";
                }
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
    <script src="script.js"></script>
</body>
</html>