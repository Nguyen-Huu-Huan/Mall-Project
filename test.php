<?php
$file = fopen("data.csv","r");
while(! feof($file))
  {
  print_r(fgetcsv($file));
  }
fclose($file);
  print_r($file['Copyright'])
?>