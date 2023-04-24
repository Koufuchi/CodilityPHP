<?php

namespace App\Codility\Lessons\CountingElements;

class PermCheck
{
    // https://app.codility.com/programmers/lessons/4-counting_elements/perm_check/

    /**
     *  解法：簡單版的 FrogRiverOne
     *  時間複雜度 O(N)
     *  空間複雜度 O(N) 
     */
    function solution(array $A): int
    {
        $max = 0;
        $findArr = [];
        foreach ($A as $int) {
            if (isset($findArr[$int])) {
                return 0;
            }
            $findArr[$int] = true;
            $max = ($max < $int) ? $int : $max;
        }
        return ($max == count($findArr)) ? 1 : 0;
    }
}
