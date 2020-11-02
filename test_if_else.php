<?php

class if_else {
  
  public function choose($choose) // choose format "choose_1-choose_2"
  {
    $chooses = explode("-", $choose);
    $totalChooses = count($chooses);
    $iChoose = rand(0, $totalChoose);
    $hereMyChoose = "i choose " . $chooses[$ichoose];
    
    return $hereMyChoose;
  }
  
}
    
      
              
