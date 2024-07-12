<?php
// ตรวจสอบว่ามีการระบุภาษาใน session หรือไม่
if (!isset($_SESSION['lang'])) {
	// ถ้าไม่มี, ตั้งค่าเริ่มต้นเป็น "th"
	$_SESSION['lang'] = "th";
}

// ตรวจสอบว่ามีการระบุภาษาผ่าน URL หรือไม่
if (isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang'])) {
	// ถ้ามี, ตั้งค่า session เป็นค่าที่ระบุ
	if ($_GET['lang'] == "en" || $_GET['lang'] == "th") {
		$_SESSION['lang'] = $_GET['lang'];
	}
}

// ตรวจสอบว่าไฟล์ภาษามีอยู่จริงหรือไม่
$langFile = "../languages/" . $_SESSION['lang'] . ".php";
if (file_exists($langFile)) {
	require_once $langFile;
} else {
	echo "Language file not found!";
	exit;
}

