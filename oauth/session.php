<?php
session_start();
// กำหนดค่าให้กับ $_SESSION['login_info']
$_SESSION['login_info'] = array(
    'prename_id' => '231564',
    'organization_code' => '53',
    'firstname_EN' => 'Nest',
    'lastname_EN' => 'Pingyos',
    'organization_name_EN' => 'Nuser',
    'cmuitaccount' => 'app.dev0299@gmail.com',
    'itaccounttype_TH' => 'MIS Employee'
);

// แสดงข้อมูลทั้งหมดใน $_SESSION['login_info']
echo "<h2>User Information:</h2>";
echo "<p>Prename ID: " . $_SESSION['login_info']['prename_id'] . "</p>";
echo "<p>Organization Code: " . $_SESSION['login_info']['organization_code'] . "</p>";
echo "<p>First Name (EN): " . $_SESSION['login_info']['firstname_EN'] . "</p>";
echo "<p>Last Name (EN): " . $_SESSION['login_info']['lastname_EN'] . "</p>";
echo "<p>Organization Name (EN): " . $_SESSION['login_info']['organization_name_EN'] . "</p>";
echo "<p>CMU IT Account: " . $_SESSION['login_info']['cmuitaccount'] . "</p>";
echo "<p>IT Account Type (TH): " . $_SESSION['login_info']['itaccounttype_TH'] . "</p>";
