<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách trường học</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="container">
        <h2>Danh sách trường học</h2>
        <table>
            <thead>
                <tr>
                    <th>Loại</th>
                    <th>Tên</th>
                    <th>Địa chỉ</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $school = array(
                    array('loai' => 'Giáo viên', 'ten' => 'Nguyễn Văn A', 'dia_chi' => '123 Đường Lê Duẩn, Quận Thanh Khê, TP Đà Nẵng'),
                    array('loai' => 'Sinh viên', 'ten' => 'Trần Thị B', 'dia_chi' => '456 Đường Nguyễn Văn Linh, Quận Hải Châu, TP Đà Nẵng'),
                    array('loai' => 'Giáo viên', 'ten' => 'Lê Văn C', 'dia_chi' => '789 Đường Tôn Đức Thắng, Quận Liên Chiểu, TP Đà Nẵng')
                );

                foreach ($school as $person) {
                    echo "<tr>";
                    echo "<td>" . $person['loai'] . "</td>";
                    echo "<td>" . $person['ten'] . "</td>";
                    echo "<td>" . $person['dia_chi'] . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>