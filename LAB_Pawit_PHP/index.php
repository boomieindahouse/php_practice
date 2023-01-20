<?php
// ตรวจสอบการ submit ของ form
if($_SERVER["REQUEST_METHOD"] == "POST"){
//ตรวจสอบถ้าไฟล์ที่อัพโหลดไม่มีปัญหา errors
if(move_uploaded_file($_FILES["photo"]["tmp_name"],"pic/".$_FILES["photo"]["name"])) {
//echo "Copy/Upload Complete.";
}else{
//echo "Error: " . $_FILES["photo"]["error"];
}
}

$dayTH = ['อาทิตย์','จันทร์','อังคาร','พุธ','พฤหัสบดี','ศุกร์','เสาร์'];
$monthTH = [null,'มกราคม','กุมภาพันธ์','มีนาคม','เมษายน','พฤษภาคม','มิถุนายน','กรกฎาคม','สิงหาคม','กันยายน','ตุลาคม','พฤศจิกายน','ธันวาคม'];
$monthTH_brev = [null,'ม.ค.','ก.พ.','มี.ค.','เม.ย.','พ.ค.','มิ.ย.','ก.ค.','ส.ค.','ก.ย.','ต.ค.','พ.ย.','ธ.ค.'];
$date = $dayTH[date("w")]." ".date("d")." ".$monthTH[date("n")]." ".(date("Y")+543);

echo "วันที่",' ',$date;

date_default_timezone_set('asia/bangkok');
$date1 = date('h:i:s');
echo '<br>',"เวลา",' ', $date1;

echo '<br>';

echo 'ชื่อ',$_POST["title"];
echo $_POST["fname"],' ',$_POST["lname"];
echo '<br>';
echo 'เพศ',' ',$_POST["sex"];
echo '<br>';
echo 'บันทึกข้อมูลเรียบร้อย';


?>