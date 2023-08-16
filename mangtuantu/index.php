<?php
// Mảng dữ liệu
$numbers = array(2, 4, 6, 8, 10, 12, 14, 16, 18, 20);

// Phần tử cần tìm kiếm
$searchValue = 14;

// Biến để lưu vị trí của phần tử trong mảng
$foundIndex = -1;

// Duyệt qua mảng để tìm kiếm
for ($i = 0; $i < count($numbers); $i++) {
    if ($numbers[$i] == $searchValue) {
        $foundIndex = $i;
        break; // Kết thúc vòng lặp khi tìm thấy phần tử
    }
}

// Kiểm tra và hiển thị kết quả
if ($foundIndex != -1) {
    echo "Phần tử $searchValue được tìm thấy tại vị trí $foundIndex trong mảng.";
} else {
    echo "Không tìm thấy phần tử $searchValue trong mảng.";
}
?>