<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="c.css">
</head>
<body>
    <?php
    @include 'config1.php';
    $sql = "SELECT * FROM products";
    $result = $conn->query($sql);
    // Hiển thị danh sách sản phẩm
    echo '<div class="product-table">';
    echo '<table>';
    echo '<thead>';
    echo '<tr>';
    echo '<th>id</th>';
    echo '<th>Product Name</th>';
    echo '<th>Image</th>';
    echo '<th>Description</th>';
    echo '<th>xóa</th>';
    echo '<th>thêm</th>';
    echo '<th>sửa</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row['id'] . '</td>'; 
        echo '<td>' . $row['product_name'] . '</td>';
        echo '<td><img src="' . $row['image'] . '" alt="' . $row['product_name'] . '" width="100"></td>';
        echo '<td>' . $row['description'] . '</td>';
        echo '<td><a href="delete_product.php?id=' . $row['id'] . '">Delete</a></td>';
        echo '<td><a href="/ADD/add.php">ADD</a></td>';
        echo '<td><a href="update.php?id=' . $row['id'] . '">Update</a></td>';
        echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';
    echo '</div>';

    // Đóng kết nối
    $conn->close();

    ?>
</body>
</html>