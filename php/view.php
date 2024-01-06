<?php
$conn = mysqli_connect('localhost','root','','QLTT');
if($conn != null)
echo 'Kết nối thành công!';
$str ='select * from THUCTAP ';
$result = mysqli_query($conn, $str);
echo '<table border=1>';
echo '<tr>';
echo '<td>'.'Mã Số Sinh Viên'.'</td>';
echo '<td>'.'Mã Số Đề Tài'.'</td>';
echo '<td>'.'Nơi Thực Tập'.'</td>';
echo '<td>'.'Kết Quả'.'</td>'; 
echo '</tr>';
while($row = mysqli_fetch_row($result))
{ 
    echo "<tr>";
    echo '<td>'.$row[0].'</td>';
    echo '<td>'.$row[1].'</td>';
    echo '<td>'.$row[2].'</td>';
    echo '<td>'.$row[3].'</td>';
?>
</tr>
<?php
}
echo "</table>";
mysqli_close($conn);
?>
