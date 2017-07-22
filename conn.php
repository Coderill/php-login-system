<?php
$conn = mysql_connect("localhost", "root", "");
if(!$conn) {
	echo '<div class="error"><h3>MySQL Error: </h3><p>' . mysql_error() . '</p></div>';
}

$conn_db = mysql_select_db('project');
if(!$conn_db){
	echo '<div class="error"><h3>MySQL Error: </h3><p>' . mysql_error() . '</p></div>';
}
?>
