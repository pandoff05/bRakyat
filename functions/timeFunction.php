<?php
function strToDate($date, $time){
  $str = $date." ".$time;
  $date = strtotime($str);
  $date = date("Y-m-d H:i:s", $date);
  return $date;
}

function getTimeMal(){
  date_default_timezone_set("Asia/Kuala_Lumpur");
  $currentdate = date('Y-m-d H:i:s',time());
  return $currentdate;
}

class reformatTime{
  private $date;
  function __construct($date){
    $this->date = date_create($date);
  }
  function getDate(){
    // echo $this->date;
    return date_format($this->date,"Y/m/d");
  }
}
?>