<?php
$_SESSION['login_info'] = array(
    'cmuitaccount' => 'phatcharapon.p@cmu.ac.th',
);
// เช็คว่ามี session login_info หรือไม่
if (!isset($_SESSION['login_info'])) {
    header('Location: ../oauth/'); // ถ้าไม่มีให้ redirect ไปยังหน้าเข้าสู่ระบบ
    exit;
}
