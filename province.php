<?php

  $json = file_get_contents("url");
  $data = json_decode($json);
  
  echo "<center><table border='1'>";
  echo "<colgroup span=”9” width=”100”</colgroup>";
  echo "<tr><td><b>ลำดับ</b></td>
  <td><b>จังหวัด</b></td>
  <td><b>ผู้ป่วยใหม่</b></td>
  <td><b>ผู้ป่วยรวม</b></td>
  <td><b>ผู้ป่วยใหม่ในประเทศ</b></td>
  <td><b>ผู้ป่วยรวมในประเทศ</b></td>
  <td><b>ผู้เสียชีวิตใหม่</b></td>
  <td><b>ผู้เสียชีวิตรวม</b></td>
  <td><b>วันที่อัพเดท</b></td></tr>";
  foreach($data as $key=>$val){
    echo "<tr>";
    echo "<td>";
    echo $key;
    echo "</td>";
    echo "<td>";
    echo $val->province;
    echo "</td>";
    echo "</tr>";
  }
  echo "</center></table>"; 
?>
