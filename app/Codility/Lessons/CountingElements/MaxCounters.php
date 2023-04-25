<?php

namespace App\Codility\Lessons\CountingElements;

class MaxCounters
{
    // https://app.codility.com/programmers/lessons/4-counting_elements/max_counters/

    /**
     *  解法：多一個 needToAdd 變數，就不需要在每次觸發 $N + 1 時都重跑一次 M，從 O(N*M) 降為 O(N+M)
     *  時間複雜度 O(N + M)  M 是因為最後要檢查有沒有人沒被更新
     *  空間複雜度 O(M) 
     */
    function solution(int $N, array $A): array
    {
        // codility 測試會抓索引為0的，所以不能從1開始
        $countArr = array_fill(0, $N, 0);
        // 當前的最大計數
        $max = 0;
        // 需要統一的目標計數
        $needToAdd = 0;

        foreach ($A as $int) {
            if (1 <= $int && $int <= $N) {
                // 如果當前位置計數 < 需要統一的目標計數，代表他需要被統一，然後無論如何因為跑到了所以都要再 +1
                $countArr[$int - 1] = ($countArr[$int - 1] < $needToAdd) ? $needToAdd + 1 : $countArr[$int - 1] + 1;
                $max = ($max < $countArr[$int - 1]) ? $countArr[$int - 1] : $max;
            } elseif ($int == $N + 1) {
                // 更新需要統一的目標計數
                $needToAdd = $max;
            }
        }
        // 因為可能有人沒被更新所以最後再統一更新一次
        foreach ($countArr as $index => $cnt) {
            if ($cnt < $needToAdd) {
                $countArr[$index] = $needToAdd;
            }
        }

        return $countArr;
    }

    /**
     *  時間複雜度 O(N * M)
     *  空間複雜度 O(M) 
     */
    function solutionWorse(int $N, array $A): array
    {
        // codility 測試會抓索引為0的，所以不能從1開始
        $countArr = array_fill(0, $N, 0);
        $max = 0;
        foreach ($A as $int) {
            if (1 <= $int && $int <= $N) {
                $countArr[$int - 1] += 1;
                $max = ($max < $countArr[$int - 1]) ? $countArr[$int - 1] : $max;
            } elseif ($int == $N + 1) {
                $countArr = array_fill(0, $N, $max);
            }
        }

        return $countArr;
    }
}
