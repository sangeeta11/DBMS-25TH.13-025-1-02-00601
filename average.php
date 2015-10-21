<?php
include 'config.php';
$result = mysql_query("SELECT * FROM table1");
    echo "<table border='1'>
                <tr>
                <th>INDEX</th><th>Value 1</th><th>Value 2</th><th>Value 3</th><th>Sum</th>
                <th>Average</th>
                </tr>";
        if($result === FALSE) { 
    die(mysql_error()); // TODO: better error handling
}
    while($row1= mysql_fetch_array($result)){
        $avg=$row1['sum']/3;
        echo "<tr>";
               echo"<td>".$row1['prkey']."</td>";
               echo"<td>".$row1['nmbr1']."</td>";
               echo"<td>".$row1['nmbr2']."</td>";
               echo"<td>".$row1['nmbr3']."</td>";
               //echo"<td>".$present_date."</td>";
               echo"<td>".$row1['sum']."</td>";
               echo"<td>".$avg."</td>";
               echo "</tr>";
    }

echo "<br>"."<a href='index.php'>MAIN PAGE</a>"."<br>";
?>

