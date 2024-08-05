<?php


// Set up the login_info data
$_SESSION['login_info'] = array(
    'cmuitaccount' => 'phatcharapon.p@cmu.ac.th',
);

// Check if user is logged in
if (!isset($_SESSION['login_info'])) {
    header('Location: ../oauth/');
    exit;
}

// Fetch cmuitaccount from session
$json = $_SESSION['login_info'];
$cmuitaccount = $json['cmuitaccount'];

// API URL
$api_url = 'https://mis.nurse.cmu.ac.th/misnew/Personnel/GetPersonInfo';

// Initialize cURL session
$ch = curl_init();

// Set cURL options
curl_setopt($ch, CURLOPT_URL, $api_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute API request
$response = curl_exec($ch);

// Check for errors
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
    curl_close($ch);
    exit;
}

// Close cURL session
curl_close($ch);

// Decode JSON response
$api_data = json_decode($response, true);

// Check if cmuitaccount exists in API data
$fname_th = '';
$lname_th = '';
$prefix_th = '';
$prefix_en = '';
$images = '';
$user_work = '';
$status = '';
$tel_office = '';
$institution = '';
$job = '';
$unit = '';
$position_no = '';
$position_type = '';
$position_name = '';
$position_manager = '';
$date_start = '';
$date_end = '';
$appoint_note = '';
$appoint_date = '';
$learn_type = '';
$inOut = '';
$laern_level = '';
$start_date = '';
$end_date = '';
$course = '';
$university = '';
$position_count = '';
$birth_date = '';
$end_name = '';
$work_id = '';
$tax_expired = '';
$position_manager_en = '';
$mini_branch = '';
$branch = '';
$detail = '';
foreach ($api_data as $data) {
    if ($data['cmu_account'] === $cmuitaccount) {
        // Get fname_th and lname_th
        $cmu_account = $data['cmu_account'];
        $fname_th = $data['fname_th'];
        $lname_th = $data['lname_th'];
        $prefix_th = $data['prefix_th'];
        $prefix_en = $data['prefix_en'];
        $images = $data['images'];
        $user_work = $data['user_work'];
        $status = $data['status'];
        $tel_office = $data['tel_office'];
        $institution = $data['institution'];
        $job = $data['job'];
        $unit = $data['unit'];
        $position_no = $data['position_no'];
        $position_type = $data['position_type'];
        $position_name = $data['position_name'];
        $position_manager = $data['position_manager'];
        $date_start = $data['date_start'];
        $date_end = $data['date_end'];
        $appoint_note = $data['appoint_note'];
        $appoint_date = $data['appoint_date'];
        $learn_type = $data['learn_type'];
        $inOut = $data['inOut'];
        $laern_level = $data['laern_level'];
        $start_date = $data['start_date'];
        $end_date = $data['end_date'];
        $course = $data['course'];
        $university = $data['university'];
        $position_count = $data['position_count'];
        $birth_date = $data['birth_date'];
        $end_name = $data['end_name'];
        $work_id = $data['work_id'];
        $tax_expired = $data['tax_expired'];
        $position_manager_en = $data['position_manager_en'];
        $mini_branch = $data['mini_branch'];
        $branch = $data['branch'];
        $detail = $data['detail'];
        break;
    }
}
