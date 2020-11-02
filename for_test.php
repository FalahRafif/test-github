<?php

class For_test {

  public function show_all_number($number)
  {
    for($i=0;$i<$number;$i++;){
    $numbers = $numbers . $i . ", ";
    return $numbers;
  }

}
