<?php

namespace App\Codility\Lessons\Iterations;

class BinaryGap
{
    // https://app.codility.com/programmers/lessons/1-iterations/binary_gap/

    /**
     *  題目：輸入整數轉成二進位，找出夾在兩個 1 中間的最大 0 總數
     *  解法：先把數字轉成字串再遍歷一次即可
     *  時間複雜度 O(N)
     *  空間複雜度 O(1)
     */
    function solution($N): int
    {
        $N = (string)decbin($N);
        $maxGap = 0;
        $gapCounter = 0;
        $metFirstWall = false;
        foreach (str_split($N) as $eachInt) {
            if (!$metFirstWall && $eachInt === '1') {
                $metFirstWall = true;
                continue;
            }
            if ($metFirstWall && $eachInt === '0') {
                $gapCounter++;
                continue;
            }
            if ($metFirstWall && $eachInt === '1') {
                $maxGap = ($maxGap > $gapCounter) ? $maxGap : $gapCounter;
                $gapCounter = 0;
            }
        }

        return $maxGap;
    }
}
