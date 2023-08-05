<?php
    $p_id = $_GET['p_id'];
    $p_name = $_GET['p_name'];
    $p_price = $_GET['p_price'];
    $p_detail = $_GET['p_detail'];

    include_once('db.php');

    $sql = "UPDATE product SET p_name=? , p_price=?, p_detail=?
            WHERE p_id =?";
    
    $stmt = $conn->prepare($sql);

    $stmt->bind_param("ssss", $name,$price,$detail,$id);
    $name = $p_name;
    $price= $p_price;
    $detail = $p_detail;
    $id= $p_id;
    $stmt->execute();

    // ปิดการเชื่อมต่อฐานข้อมูล
    $stmt->close();
    $conn->close();
    
    // ไปยังไฟล์ showDep.php
    header( "location: showproduct.php" );
    exit(0);
?>