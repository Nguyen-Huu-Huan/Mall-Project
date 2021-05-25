<?php
$file = fopen("data.csv","r");
  $result = array_column(array_map('str_getcsv', file('data.csv')), 1, 0);
fclose($file);
echo nl2br ($result['ToS']);
?>