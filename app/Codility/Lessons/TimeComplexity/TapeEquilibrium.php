<?php

namespace App\Codility\Lessons\TimeComplexity;

class TapeEquilibrium
{
    // https://app.codility.com/programmers/lessons/3-time_complexity/perm_missing_elem/

    /**
     *  解法：只算偏移量所以可以時間複雜度 O(N)，需要注意的是迴圈內執行順序以及頭尾的計算細節
     *  時間複雜度 O(N)
     *  空間複雜度 O(1) 
     */
    function solution(array $A): int
    {
        if (empty($A)) {
            return 0;
        }
        if (count($A) == 1) {
            return $A[0];
        }

        $min = PHP_INT_MAX;
        $left = $A[0];
        $right = array_sum($A) - $left;

        for ($i = 0; $i < count($A) - 1; $i++) {
            $count = abs($left - $right);
            if ($count < $min) {
                $min = $count;
            }

            $left += $A[$i + 1];
            $right -= $A[$i + 1];
        }

        return $min;
    }
}
