<?php
error_reporting(0);
$noitt= $_GET["NoiTT"];
$conn = mysqli_connect("localhost","root","","QLTT");
$str = "select * from THUCTAP where NoiTT = 'Trường ĐH Kinh tế Kỹ thuật Công nghiệp'";
$result = mysqli_query($conn,$str);
echo '<table border = 1>';
echo '<tr><td>Mã Số Sinh Viên</td><td>Mã Số Đề Tài</td><td>Nơi Thực Tập</td><td>Kết Quả</td></tr>';
while($row=mysqli_fetch_row($result))
{ 
	echo '<tr>';
	echo '<td>'.$row[0].'</td>';
	echo '<td>'.$row[1].'</td>';
	echo '<td>'.$row[2].'</td>';
	echo '<td>'.$row[3].'</td>';
	echo '</tr>';
}
echo '</table>';
mysqli_close($conn);
?>