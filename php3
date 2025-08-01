<?php
$number = "0814563972";

// กำหนด array คำอ่านของตัวเลข
$read = array("ศูนย์", "หนึ่ง", "สอง", "สาม", "สี่", "ห้า", "หก", "เจ็ด", "แปด", "เก้า");

// แปลงเป็น array ของตัวเลขแต่ละตัว
$digits = str_split($number);

// สร้าง string คำอ่านจาก array
$result = "";
foreach ($digits as $digit) {
    $result .= $read[$digit];
}

// แสดงผลลัพธ์
echo "$number => $result";
?>
