<?php

  $json = file_get_contents("url");
  $data = json_decode($json);
  
  echo "<table border='1'>";
  echo "<colgroup span=”9” width=”100”</colgroup>";
  echo "<center><tr><td>ลำดับ</td><td>จังหวัด</td></tr></center>";
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
  echo "</table>"; 
?>
