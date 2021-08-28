<?php declare(strict_types=1);

namespace App;

final class HeapSort {
    // function for heap sort which calls heapify function 
    // to build the max heap and then swap last element of 
    // the max-heap with the first element
    // exclude the last element from the heap and rebuild the heap
    function heapsort(&$Array, $n) {
    for($i = (int)($n/2); $i >= 0; $i--) {
      $this->heapify($Array, $n-1, $i);
    }
    
    for($i = $n - 1; $i >= 0; $i--) {
      //swap last element of the max-heap with the first element
      $temp = $Array[$i];
      $Array[$i] = $Array[0];
      $Array[0] = $temp;
  
      //exclude the last element from the heap and rebuild the heap 
      $this->heapify($Array, $i-1, 0);
    }
    
    $this->setArray($Array);
  }
  
    // heapify function is used to build the max heap
    // max heap has maximum element at the root which means
    // first element of the array will be maximum in max heap
    function heapify(&$Array, $n, $i) {
    $max = $i;
    $left = 2*$i + 1;
    $right = 2*$i + 2;
  
    //if the left element is greater than root
    if($left <= $n && $Array[$left] > $Array[$max]) {
      $max = $left;
    }
  
    //if the right element is greater than root
    if($right <= $n && $Array[$right] > $Array[$max]) {
      $max = $right;
    }
  
    //if the max is not i
    if($max != $i) {
      $temp = $Array[$i];
      $Array[$i] = $Array[$max];
      $Array[$max] = $temp;
      //Recursively heapify the affected sub-tree
      $this->heapify($Array, $n, $max); 
    }
  }
  
  // function to print array
  function PrintArray($Array, $n) { 
    for ($i = 0; $i < $n; $i++) 
      echo $Array[$i]." "; 
    echo "\n";
  } 

  function getArray(): array
  {
    return $this->reversedArray;
  }

  function setArray($Array): void
  {
    $this->reversedArray = $Array;
  }

}
?>