<?php

$conn = mysqli_connect("localhost","root","","QLTT");
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $mssv =  $_POST["MSSV"];
    $msdt = $_POST["MSDT"];
    $noitt = $_POST["NoiTT"];
    $ketqua = $_POST["KetQua"];
    // $imageData = file_get_contents($_FILES["image"]["temp_name"]);
    $str = "insert into THUCTAP(MSSV,MSDT,NoiTT,KetQua) values ('$mssv','$msdt','$noitt','$ketqua')";
    $result = mysqli_query($conn,$str);
    
    $str1 ='select * from THUCTAP';
    $result1 = mysqli_query($conn, $str1);
    echo '<table border=1>';
    echo '</tr>';
    echo '<td>'.'Mã Số Sinh Viên'.'</td>';
    echo '<td>'.'Mã Số Đề Tài'.'</td>';
    echo '<td>'.'Nơi Thực Tập'.'</td>';
    echo '<td>'.'Kết Quả'.'</td>'; 
    echo '</tr>';
    while($row = mysqli_fetch_row($result1))
    { 
        echo "<tr>";
        echo '<td>'.$row[0].'</td>';
        echo '<td>'.$row[1].'</td>';
        echo '<td>'.$row[2].'</td>';
        echo '<td>'.$row[3].'</td>';
    }
    echo "</table>";
    mysqli_close($conn);
}

?>
<form action="" method="POST" enctype="multipart/form-data">
<table>
	<tr>
		<td colspan="2">Thêm Sinh Viên Thực Tập</td>
	</tr>
	<tr>
		<td>
			Mã Số Sinh Viên
		</td>
	<td><input type="text" name="MSSV"></td>
	</tr>
	<tr>
		<td>
		Mã Số Đề Tài
		</td>
	<td><input type="text" name="MSDT"></td>
	</tr>
	<tr>
		<td>
			Nơi Thực Tập
		</td>
	<td><input type="text" name="NoiTT"></td>
	</tr>
	<tr>
		<td>
			Kết Quả
		</td>
	<td>
        <input type="text" name="KetQua">
    </td>
	</tr>
	<tr>
		<td>
		</td>
		<td><input type="submit" name="btnok" value="Thêm">
			<input type="reset" name="btncancel" value="Nhập Lại"></td>
	</tr>
</table>
</form>