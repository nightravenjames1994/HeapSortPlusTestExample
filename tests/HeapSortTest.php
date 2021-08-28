<?php declare(strict_types=1);
use App\HeapSort;
use PHPUnit\Framework\TestCase;

final class HeapSortTest extends TestCase
{
    public function testReturnsReversedArray()
    {
        $heap_sort = new \App\HeapSort;
        $MyArray = [1 ,10 , 23, 0, 7, -4];
        $n = sizeof($MyArray);
        $heap_sort->heapsort($MyArray,$n); 
        $this->assertEquals(
            $MyArray,
            $heap_sort->getArray()
        );
    }
}

