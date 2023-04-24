<?php

namespace App\Codility\Lessons\CountingElements;

class FrogRiverOne
{
    // https://app.codility.com/programmers/lessons/4-counting_elements/frog_river_one/

    /**
     *  解法：用一個變數存終止條件，另一個變數存最久時間，就能達到最差也只做 N，其他都低於 N
     *  時間複雜度 O(N) 最差也只做 N
     *  空間複雜度 O(N) 最差是 2N 
     */
    function solution(int $X, array $A): int
    {
        $findArr = []; // 記錄被找到的合法位置
        $maxTime = -1; // 到合法位置需花最久的時間
        $toFindCnt = $X; // 還有多少位置需要被找

        foreach ($A as $time => $position) {
            if (!isset($findArr[$position]) && $position <= $X) {
                $findArr[$position] = true;
                if ($time > $maxTime) {
                    $maxTime = $time;
                }
                if (--$toFindCnt == 0) {
                    return $maxTime;
                }
            }
        }

        return -1;
    }
}
