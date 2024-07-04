<?php
require_once('../vendor/autoload.php');
require_once('../config/connect.php'); // Assuming database connection is here

// Create new PDF document
$pdf = new TCPDF('P', PDF_UNIT, 'A4', true, 'UTF-8', false);

// Define font paths (adjust paths as necessary)
$fontRegular = TCPDF_FONTS::addTTFfont('../vendor/tecnickcom/tcpdf/fonts/Sarabun-Thin.ttf', 'TrueTypeUnicode', '', 96);
$fontMedium = TCPDF_FONTS::addTTFfont('../vendor/tecnickcom/tcpdf/fonts/Sarabun-Medium.ttf', 'TrueTypeUnicode', '', 96);
$fontBold = TCPDF_FONTS::addTTFfont('../vendor/tecnickcom/tcpdf/fonts/Sarabun-Bold.ttf', 'TrueTypeUnicode', '', 96);

// Check if fonts loaded successfully
if (!$fontRegular || !$fontBold || !$fontMedium) {
    die('Error: Could not load Noto Sans Thai fonts.');
}

// Set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('TCPDF Example with ID and REF');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// Disable header and footer
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

// Set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// Set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// Add a page
$pdf->AddPage();

// Get ID and REF from URL parameters
$id = isset($_GET['id']) ? $_GET['id'] : '';
$ref = isset($_GET['ref']) ? $_GET['ref'] : '';

// Fetch data from database based on ID and REF
$stmt = $conn->prepare("SELECT ref, fullname, department, tel, personnel, email, social, option, title, details, date_a, communicate, file_names, upload_url, status_user, status_admin, status_ss, status_email, created_at FROM ccfn_form_s WHERE id = :id AND ref = :ref");
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->bindParam(':ref', $ref, PDO::PARAM_STR);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

// Check if data found
if ($row) {
    $ref = $row['ref'];
    $fullname = $row['fullname'];
    $department = $row['department'];
    $tel = $row['tel'];
    $personnel = $row['personnel'];
    $email = $row['email'];
    $social = $row['social'];
    $option = $row['option'];
    $title = $row['title'];
    $details = $row['details'];
    $date_a = $row['date_a'];
    $communicate = $row['communicate'];
    $file_names = $row['file_names'];
    $upload_url = $row['upload_url'];
    $status_user = $row['status_user'];
    $status_admin = $row['status_admin'];
    $status_ss = $row['status_ss'];
    $status_email = $row['status_email'];
    $created_at = $row['created_at'];

    // Add logo
    $pdf->Image('../assets/img/logo.png', 42.5, 15, 120, '', 'PNG', '', 'T', false, 300, '', false, false, 1, false, false, false);

    $pdf->SetFont($fontRegular, '', 11);
    $pdf->SetXY(10, 50);
    $pdf->SetTextColor(128, 0, 128);
    
    $pdf->Write(0, "\n");
    $pdf->Line(10, $pdf->GetY(), 200, $pdf->GetY());
    $pdf->Ln(5);

    $pdf->SetTextColor(0, 0, 0);
    $pdf->SetFont($fontMedium, '', 11);
    $pdf->Write(0, 'ข้อมูลประชาสัมพันธ์' . "\n");
    $pdf->Ln();

    $pdf->SetFont($fontRegular, '', 11);
    $pdf->Write(0, 'หัวข้อ : ');
    $pdf->SetTextColor(128, 0, 128);
    $pdf->Write(0, $title . "\n");

    $pdf->SetTextColor(0, 0, 0);
    $pdf->Write(0, 'รายละเอียด : ');
    $pdf->SetTextColor(128, 0, 128);
    $pdf->Write(0, $details . "\n");

    $pdf->SetTextColor(0, 0, 0);
    $pdf->Write(0, 'หมวดการสื่อสาร : ');
    $pdf->SetTextColor(128, 0, 128);
    $pdf->Write(0, $communicate . "\n");

    $pdf->SetTextColor(0, 0, 0);
    $pdf->Write(0, 'ช่องทางการประชาสัมพันธ์ : ');
    $pdf->SetTextColor(128, 0, 128);
    $pdf->Write(0, $social . "\n");

    $pdf->Write(0, "\n");
    $pdf->Line(10, $pdf->GetY(), 200, $pdf->GetY());
    $pdf->Ln(5);

    $pdf->SetFont($fontMedium, '', 11);
    $pdf->SetTextColor(0, 0, 0);
    $pdf->Write(0, 'ข้อมูลผู้รับบริการ/ข้อมูลผู้ประสานงาน' . "\n");
    $pdf->Ln();
    $pdf->SetFont($fontRegular, '', 11);
    $pdf->Write(0, 'ชื่อ - สกุล : ');
    $pdf->SetTextColor(128, 0, 128);
    $pdf->Write(0, $fullname . "\n");

    $pdf->SetTextColor(0, 0, 0);
    $pdf->Write(0, 'อีเมล : ');
    $pdf->SetTextColor(128, 0, 128);
    $pdf->Write(0, $email . "\n");

    $pdf->SetTextColor(0, 0, 0);
    $pdf->Write(0, 'โทรศัพท์ : ');
    $pdf->SetTextColor(128, 0, 128);
    $pdf->Write(0, $tel . "\n");

    $pdf->SetTextColor(0, 0, 0);
    $pdf->Write(0, 'คณะ/หน่วยงาน : ');
    $pdf->SetTextColor(128, 0, 128);
    $pdf->Write(0, $department . "\n");

    $pdf->Ln();
    $pdf->Line(10, $pdf->GetY(), 200, $pdf->GetY());
    $pdf->Ln(5);

    $pdf->SetTextColor(0, 0, 0);
    $pdf->Write(0, 'หน่วยหน่วยสื่อสารและภาพลักษณ์องค์กรขอสงวนสิทธ์การให้บริการ ดังนี้' . "\n");
    $pdf->Ln();
    $pdf->Write(0, '1. กรุณาส่งใบขอรับบริการล่วงหน้าไม่น้อยกว่า 3 วันทำการ' . "\n");
    $pdf->Ln();
    $pdf->Write(0, '2. ขอบเขตการให้บริการการถ่ายภาพนิ่งและภาพวีดิทัศน์ เป็นการถายทำเพื่อจัดทำสกู๊ปข่าวสำหรับประกอบการเผยแพร่ข่าวประชาสัมพันธ์เท่านั้น ขอสงวนสิทธิ์การให้บริการการถ่ายภาพตลอดกิจกรรม เนื่องจากบุคลากรและอุปกรณ์ที่ใช้ในการบันทึกภาพมีจำกัด' . "\n");
    $pdf->Ln();
    $pdf->Write(0, '3. ขอสงวนสิทธิ์การให้บริการ สำหรับผู้ขอรับการบริการที่เอกสารข้อมูลแนบไม่ครบ และส่งแบบฟอร์มไม่ตรงตามกำหนดเวลา' . "\n");
    $pdf->Ln();
    $pdf->Write(0, '4. ขอสงวนสิทธิ์การเผยแพร่ภาพและข่าวสารผ่านระบบออนไลน์ของหน่วยสื่อสารและภาพลักษณ์องค์กรเท่านั้น' . "\n");
    $pdf->Ln();
    $pdf->Write(0, '5. เงื่อนไขต่างๆ จะได้รับการพิจารณาเป็นกรณีไป ทั้งนี้ให้เป็นไปตามความเหมาะสมและการพิจารณาของหน่วยสื่อสารและภาพลักษณ์องค์กร' . "\n");
    $pdf->Ln();
    $pdf->Write(0, '6. ทางหน่วยสื่อสารและภาพลักษณ์องค์กร ไม่มีบริการผลิต VDO Presentation สำหรับโครงการหรือกิจกรรม' . "\n");

    $pdf->Write(0, "\n");

    $pdf->SetTextColor(0, 0, 0);
    $pdf->Write(0, 'ข้าพเจ้าได้อ่าน พร้อมทั้งยอมรับเงื่อนไขและข้อตกลงทั้งหมดนี้' . "\n");

    $pdf->Ln(10);

    $footer1 = 'ข้อมูลผู้รับบริการ     ' . $fullname;
    $pdf->MultiCell(0, 5, $footer1, 0, 'C');

    $footer2 = 'วันที่  ' . $created_at;
    $pdf->MultiCell(0, 10, $footer2, 0, 'C');

} else {
    $pdf->Write(0, 'No data found for ID: ' . $id . ' and REF: ' . $ref);
}

// Close and output PDF document
$pdf->Output('แบบร้องขอการประชาสัมพันธ์.pdf', 'I');
$pdf->Close();
?>
