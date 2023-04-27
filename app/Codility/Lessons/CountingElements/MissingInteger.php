<?php

namespace App\Codility\Lessons\CountingElements;

class MissingInteger
{
    // https://app.codility.com/programmers/lessons/4-counting_elements/missing_integer/

    /**
     *  解法：記錄走過的不重複合法值，之後找出第一個 合法總數+1 的範圍內沒有記錄到的合法值。
     *  時間複雜度 O(N)  
     *  空間複雜度 O(N) 
     */
    function solution(array $A): int
    {
        $boardArr = [];
        foreach ($A as $int) {
            if ($int > 0 && !isset($boardArr[$int])) {
                $boardArr[$int] = true;
            }
        }
        for ($i = 1; $i <= count($boardArr); $i++) {
            if (!isset($boardArr[$i])) {
                return $i;
            }
        }

        return 1;
    }
}
