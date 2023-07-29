<?php
$id = $_GET['p_id'];
$name = $_GET['p_name'];
$price = $_GET['p_price'];
$detail = $_GET['p_detail'];

$sql = "INSERT INTO product(p_id,p_name,p_price,p_detail)VALUES(?,?,?,?)";

include_once('db.php');

$stmt = $conn->prepare($sql);
   $stmt->bind_param("ssss", $p_id, $p_name, $p_price,$p_detail);
   // นำค่าที่รับมา กำหนดให้กับตัวแปรสำหรับ bind
   $p_id = $id;
   $p_name = $name;
   $p_price = $price;
   $p_detail = $detail;

    // ทำการประมวลผลการเพิ่มข้อมูล
   $stmt->execute();
    //  ปิดการเชื่อมต่อ
   $stmt->close();
    //  ปิดการเชื่อมต่อฐานข้อมูล
   $conn->close();
    //  ย้ายตำแหน่งในการแสดงผลไปที่ show.php และออกจากคำสั่งทั้งหมด  exit(0)
   header( "location: showproduct.php" );
   exit(0);


?>