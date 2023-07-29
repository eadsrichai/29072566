<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แสดงรายการสินค้า</title>
    <link rel="stylesheet" href="../bootstrap-5.3.0/css/bootstrap.min.css">
</head>
<body>
<div class='container'>
<?php  include('header.php');   ?>

<div style="height: 70vh;">

<?php
include_once('db.php');

$sql = "SELECT  p_id, p_name, p_price, p_detail FROM product";

$result = $conn->query($sql);


echo "<table class='table table-hover'>";
if ($result->num_rows > 0) {
    echo "<thead><tr><th>รหัสสินค้า</th><th>ชื่อสินค้า</th><th>ราคา</th><th>รายละเอียด</th></tr></thead><tbody>";
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
<?php  include('footer.php'); ?>
</div>

</body>
</html>