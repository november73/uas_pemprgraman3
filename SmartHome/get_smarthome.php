<?php
$conn = mysqli_connect("localhost", "root", "iot", "iot", 3306);

$sql = "SELECT lampu_depan, lampu_kamar, lampu_belakang FROM tbl_smart_home ORDER BY id DESC LIMIT 1";
if ($result = $conn->query($sql)) {
    print_r(json_encode($result->fetch_assoc()));
    // echo json_encode($result->fetch_assoc());
} else {
    echo "Error dari MySQL: " . $sql . "<br>" . $conn->error;
}
$conn->close();