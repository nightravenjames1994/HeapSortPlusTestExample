<?php

require_once __DIR__.'../../vendor/autoload.php';

$heap_sort = new \App\HeapSort;

// test the code
$MyArray = array(1 ,10 , 23, 0, 7, -4);
$n = sizeof($MyArray); 
echo "Original Array\n";
$heap_sort->PrintArray($MyArray, $n);

$heap_sort->heapsort($MyArray, $n);
echo "\nSorted Array\n";
var_dump($heap_sort->PrintArray($MyArray, $n));