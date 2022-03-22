<?php 

function to_jalali(string $db_date)
{
   $array = explode(" ",$db_date); #divide string to ($year,$month,$day) and ($hour,$minute,$second)
   list($year,$month,$day) = explode("/",$array[0]); #we can print each one separately, but we plan to print both
   list($hour,$minute,$second) = explode(":",$array[1]);
   $time_stamp = mktime($hour,$minute,$second,$month,$day,$year);#jdate only acceots timestamps
   return jdate("Y/m/d h:i:s",$time_stamp,"",'Asia/Tehran',"fa");
}


?>