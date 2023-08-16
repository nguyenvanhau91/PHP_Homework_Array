<?php
// Mảng kết hợp dữ liệu
$students = array(
    "John" => 85,
    "Jane" => 92,
    "Michael" => 78,
    "Emily" => 95,
    "David" => 88
);

// Tên học sinh cần tìm kiếm
$searchName = "Jane";

// Kiểm tra xem tên học sinh có tồn tại trong mảng không
if (isset($students[$searchName])) {
    $score = $students[$searchName];
    echo "Điểm số của học sinh $searchName là: $score";
} else {
    echo "Không tìm thấy học sinh $searchName trong danh sách.";
}
?>