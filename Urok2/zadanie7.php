<?php
date_default_timezone_set('GMT+03:00');


function getTimeWithWords ()
{
  $titlesHours = array('час', 'часа', 'часов');
  $titlesMinutes = array('минута', 'минуты', 'минут');


 $cases = array (2, 0, 1, 1, 1, 2);
  $timeWithWords = '';
  $time = explode(':',date('H:i'));

  $timeWithWords = $time[0] . ' ' . $titlesHours[($time[0] > 4 && $time[0] < 20 ) ? 2 : $cases[min($time[0]%10, 5)] ] . ' ';
  $timeWithWords .= $time[1] . ' ' . $titlesMinutes[($time[1] > 4 && $time[1] < 20 ) ? 2 : $cases[min($time[1]%10, 5)] ] . ' ';
  

  echo $timeWithWords;
}

  getTimeWithWords($i);

?>