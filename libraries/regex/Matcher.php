<?php
 class Matcher {
  
  private $results;
  private $currentIndex = -1;
  private $totalMatchesCount;
  
  public function __construct(string $pattern, string $data){
   preg_match_all($pattern, $data, $this->results);
   $this->totalMachesCount = count($this->results[0]);
  }
  public function find(){
   $this->currentIndex++;
   return ($this->currentIndex < $this->totalMachesCount);
  }
  public function group(int $index){
   return $this->results[$index][$this->currentIndex];
  }
  
 }

?>
