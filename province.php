<?php

  $json = file_get_contents("https://covid19.ddc.moph.go.th/api/Cases/today-cases-by-provinces");
  $data = json_decode($json);
  
  echo "<table border='1'>";
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
  foreach($data as $key=>$val=>$new_case=>$total_case=>$new_case_excludeabroad=>$total_case_excludeabroad=>$new_death=>$total_death=>$update_date){
    echo "<tr>";
    echo "<td>";
    echo ($key+1);
    echo "</td>";
    echo "<td>";
    echo $val->province;
    echo "</td>";
    echo "<td>";
    echo $new_case->province;
    echo "</td>";
    echo "<td>";
    echo $total_case->province;
    echo "</td>";
    echo "<td>";
    echo $new_case_excludeabroad->province;
    echo "</td>";
    echo "<td>";
    echo $total_case_excludeabroad->province;
    echo "</td>";
    echo "<td>";
    echo $new_death->province;
    echo "</td>";
    echo "<td>";
    echo $total_death->province;
    echo "</td>";
    echo "<td>";
    echo $update_date->province;
    echo "</td>";
    
    echo "</tr>";
  }
  echo "</table>"; 
?>

