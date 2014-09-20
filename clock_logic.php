<?php
date_default_timezone_set('America/Los_Angeles');
//date_default_timezone_set('Pacific/Honolulu');
//date_default_timezone_set('Europe/Rome');
//date_default_timezone_set('Australia/Sydney');

$curTime = date('g:i:s A');
$tzName = date_default_timezone_get();
$nowArray = getdate();
$hours = $nowArray['hours'];
$period = "unknown";
if ($hours >= 5 && $hours < 11) {
  $period = "morning";
} else if ($hours >= 11 && $hours < 16) {
  $period = "afternoon";
} else if ($hours >= 16 && $hours < 20) {
  $period = "evening";
} else if ($hours >= 20 || $hours < 5) {
  $period = "night";
}
$time_image_url = "http://making-the-internet.s3.amazonaws.com/php-" . $period . ".png";
?>