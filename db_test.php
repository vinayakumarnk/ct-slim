<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

//$link	=	new MySQLi('us-cdbr-iron-east-02.cleardb.net', 'b3839c81c0b0de', 'f32b049b', 'heroku_5139ce7a09c55ce');
//
//                if(mysqli_connect_errno()){
//                    echo 'Failed to connect to MySQL '.mysqli_connect_error();
//                }
//                else{
//                    
//                    print_r('conn success');
//                }
                
$mysqli = new mysqli("us-cdbr-iron-east-02.cleardb.net", "b3839c81c0b0de", "f32b049b", "heroku_5139ce7a09c55ce");
$result = $mysqli->query("SHOW TABLES");
    while ( $row = $result->fetch_row() ){
    $table = $row[0];
 echo '<h3>',$table,'</h3>';
$result1 = $mysqli->query("SELECT * FROM $table");
if($result1) {
    echo '<table cellpadding="0" cellspacing="0" class="db-table">';
    $column = $mysqli->query("SHOW COLUMNS FROM $table");
echo '<tr>';
    while($row3 = $column->fetch_row() ) {
    echo '<th>'.$row3[0].'</th>';
}
echo '</tr>';
    while($row2 = $result1->fetch_row() ) {
      echo '<tr>';
      foreach($row2 as $key=>$value) {
        echo '<td>',$value,'</td>';
      }
      echo '</tr>';
    }
    echo '</table><br />';
  }
  }
$mysqli->close();               
?>