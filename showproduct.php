<?php
include_once('db.php');

$sql = "SELECT  p_id, p_name, p_price, p_detail FROM product";

$result = $conn->query($sql);

echo "<table>";
if ($result->num_rows > 0) {
    echo "<tr><td>รหัสสินค้า</td><td>ชื่อสินค้า</td><td>ราคา</td><td>รายละเอียด</td></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" .$row['p_id']. "</td>";
        echo "<td>" .$row['p_name']. "</td>";
        echo "<td>" .$row['p_price']. "</td>";
        echo "<td>" .$row['p_detail']. "</td>";
        echo "</tr>";
}
} else {
    echo "0 results";
}
echo "</table>";

$conn->close();
?>