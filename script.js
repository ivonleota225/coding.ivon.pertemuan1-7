document.getElementById('addProductForm').addEventListener('submit', function(e) {
    const unitPrice = document.querySelector('input[name="unit_price"]').value;
    const stockQuantity = document.querySelector('input[name="stock_quantity"]').value;
    
    if (unitPrice <= 0 || stockQuantity < 0) {
        e.preventDefault();
        alert('Harga satuan harus lebih dari 0 dan stok tidak boleh negatif!');
    }
});