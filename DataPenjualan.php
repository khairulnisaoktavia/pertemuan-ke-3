<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Penjualan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 12px;
            text-align: center;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        h2 {
            color: #333;
        }
        .total-row {
            font-weight: bold;
            background-color: #ddd;
        }
    </style>
</head>
<body>

    <h2>Sistem Pencatatan Data Penjualan</h2>
    <form action="" method="post">
        <label for="product">Nama Produk: </label>
        <input type="text" name="product" id="product" required><br><br>
        <label for="price">Harga Per Produk: </label>
        <input type="number" name="price" id="price" required><br><br>
        <label for="quantity">Jumlah Terjual: </label>
        <input type="number" name="quantity" id="quantity" required><br><br>
        <input type="submit" name="submit" value="Tambahkan Penjualan">
    </form>

    <h3>Laporan Penjualan:</h3>
    <table>
        <thead>
            <tr>
                <th>Nama Produk</th>
                <th>Harga Per Produk</th>
                <th>Jumlah Terjual</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Data penjualan produk
            $sales = [
                ['name' => 'Produk A', 'price' => 10000, 'quantity' => 5],
                ['name' => 'Produk B', 'price' => 7500, 'quantity' => 10],
                ['name' => 'Produk C', 'price' => 12000, 'quantity' => 8]
            ];

            $totalSales = 0;
            $totalQuantity = 0;

            foreach ($sales as $sale) {
                $total = $sale['price'] * $sale['quantity'];
                $totalSales += $total;
                $totalQuantity += $sale['quantity'];
                echo "<tr>
                    <td>{$sale['name']}</td>
                    <td>Rp " . number_format($sale['price'], 0, ',', '.') . "</td>
                    <td>{$sale['quantity']}</td>
                    <td>Rp " . number_format($total, 0, ',', '.') . "</td>
                </tr>";
            }
            ?>
            <tr class="total-row">
                <td colspan="2">Total Penjualan</td>
                <td><?php echo $totalQuantity; ?></td>
                <td>Rp <?php echo number_format($totalSales, 0, ',', '.'); ?></td>
            </tr>
        </tbody>
    </table>

</body>
</html>