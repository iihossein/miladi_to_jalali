<?php 
include "jdf.php"; #insert the jdf library for use the jalali calendar
include "helper.php"; #insert the function file for read data from database and show it in jalali calendar
$db_date = "2024/11/27 15:56:07"; 
echo to_jalali($db_date); #call the function from helper file and print it
