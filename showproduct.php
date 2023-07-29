<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แสดงรายการสินค้า</title>
    <link rel="stylesheet" href="../bootstrap-5.3.0/css/bootstrap.min.css">
</head>
<body>
    

<?php
include_once('db.php');

$sql = "SELECT  p_id, p_name, p_price, p_detail FROM product";

$result = $conn->query($sql);

echo "<div class='container'>";
echo "<table class='table table-hover'>";
if ($result->num_rows > 0) {
    echo "<thead><tr><td>รหัสสินค้า</td><td>ชื่อสินค้า</td><td>ราคา</td><td>รายละเอียด</td></tr></thead><tbody>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" .$row['p_id']. "</td>";
        echo "<td>" .$row['p_name']. "</td>";
        echo "<td>" .$row['p_price']. "</td>";
        echo "<td>" .$row['p_detail']. "</td>";
        echo "</tr>";
}
    echo "<tbody>";
} else {
    echo "0 results";
}
echo "</table>";

$conn->close();
?>

</div>
</body>
</html>