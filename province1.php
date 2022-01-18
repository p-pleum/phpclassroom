<?php

  $json = file_get_contents("https://covid19.ddc.moph.go.th/api/Cases/today-cases-by-provinces");
  $data = json_decode($json);
  
   <?php   
          foreach($data as $key=>$val){
     echo "<tr>";
    echo "<td bgcolor ='peachpuff'>";
    echo ($key+1);
    echo "</td>";
    echo "<td>";
    echo $val->province;
    echo "</td>";
echo "<td>";
    echo $val->new_case;
    echo "</td>";
    echo "<td>";
    echo $val->new_recovered;
    echo "</td>";
    echo "<td>";
    echo $val->total_case_excludeabroad;
    echo "</td>";
    echo "<td>";
    echo $val->new_death;
    echo "</td>";
    echo "<td>";
   
    echo "</tr>";
  }
  echo "<center></table><br>"; 
          ?>
  }
  echo "</table>"; 
?>
