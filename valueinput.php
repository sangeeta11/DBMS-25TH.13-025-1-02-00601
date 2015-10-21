<?php session_start();

include('config.php');


$v1=$_POST['v_1'];
$v2=$_POST['v_2'];
$v3=$_POST['v_3'];
$v4=$v1+$v2+$v3;
        $query = "INSERT INTO table1 (nmbr1, nmbr2, nmbr3, sum) VALUES
            ('{$v1}', '{$v2}','{$v3}','{$v4}')";
            if(!mysql_query($query)){
                die(mysql_error());
            }
            else{
                echo "insert successful";
            }
            echo "<br>"."<a href='inputpanel.html'>Input Panel</a>"."<br>";
            echo "<br>"."<a href='bank_logout.php'>LOG OUT</a>"."<br>";

?>
