<?php
$serverName = "LAPTOP-1T2JNKDA\SHERLYSANTIADI";
$connectionInfo = array( "Database"=>"Perpustakaan");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     echo "";
}else{
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
}
?>