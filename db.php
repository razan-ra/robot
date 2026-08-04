<?php
// بيانات الاتصال بقاعدة البيانات - غيّرها ببياناتك من InfinityFree
$host = "sql313.infinityfree.com";      // اسم السيرفر (Hostname)
$user = "if0_42403521";                // اسم المستخدم
$pass = "ttWE6nRxGKEYLp";           // كلمة المرور
$dbname = "if0_42403521_control";   // اسم قاعدة البيانات

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die(json_encode(["status" => "error", "message" => "فشل الاتصال: " . $conn->connect_error]));
}
?>
