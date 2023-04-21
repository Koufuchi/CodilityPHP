<?php

namespace App\Codility\Lessons\TimeComplexity;

class PermMissingElem
{
    // https://app.codility.com/programmers/lessons/3-time_complexity/perm_missing_elem/

    /**
     *  解法：等差數列公式解，注意的是由於少給一個元素所以算的時候預期長度要記得加
     *  時間複雜度 O(N)
     *  空間複雜度 O(1) 
     */
    function solution(array $A): int
    {
        $arrLen = count($A);
        $expect = ($arrLen + 1) * ($arrLen + 2) / 2;
        foreach ($A as $element) {
            $expect -= $element;
        }

        return $expect;
    }
}
