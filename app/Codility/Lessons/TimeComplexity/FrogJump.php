<?php

namespace App\Codility\Lessons\TimeComplexity;

class FrogJump
{
    // https://app.codility.com/programmers/lessons/3-time_complexity/frog_jmp/

    /**
     *  題目：輸入整數 X Y D，找出從 X 加多少次 D 會大於等於 Y
     *  解法：直接用數學解法。感覺題目是想誘導你去用迴圈，導致變 O(D)
     *  時間複雜度 O(1)
     *  空間複雜度 O(1)
     */
    function solution(int $X, int $Y, int $D): int
    {
        // 題目已經確定所給參數符合規範了，但總覺得不加檢查怪怪的所以還是加了
        if ($X <= 0 || $Y <= 0 || $D <= 0 || $X > $Y) {
            return 0;
        }

        return ceil(($Y - $X) / $D);
    }
}
