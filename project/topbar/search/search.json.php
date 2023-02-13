<?php

$host = "localhost";
$user ="postgres";
$pass = "postgres"; 
$db = "postgres";
$db_connection = pg_connect("host=$host port=5432 dbname=$db user=$user password=$pass");  
$pg_cmd = "SELECT * FROM dishes";
$pg_execute = pg_query($db_connection, $pg_cmd);

while($row = pg_fetch_array($pg_execute)){
    $dishname = $row['name'];
    $arr[] = $dishname;
}




$value = trim($_GET['value']);


if (!$value)
    $suggestions = [];
else {
    $suggestions = [];
    
    foreach ($arr as $ai) {
        $s = substr($ai, 0, strlen($value));
        if (strtolower($s) == strtolower($value)) $suggestions[] = $ai;
    }

    
}

$ret = new stdClass();
$ret->suggestions = $suggestions;

print(json_encode($ret));

?>