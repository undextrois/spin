<?php
set_time_limit(0);
for($i = 0 ; $i<=100; $i++)
{
  if($i == 10 ) $c = "|";
  else if($i == 20 ) $c = "/";
  else if($i == 30 ) $c = "--";
  else if($i == 40) $c = "\\";
  else if($i == 60) $c = "//";
  else if($i == 90) $c = "--";
  print "$c\r";
  sleep(1);
}
?>
