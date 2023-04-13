<?php

namespace App\Codility\Lessons\Arrays;

class CyclicRotation
{
    // https://app.codility.com/programmers/lessons/2-arrays/cyclic_rotation/

    /**
     *  題目：輸入整數陣列 A 和一個整數 K ，將每個陣列元素往右移 K 次
     *  解法：由於 php 語法的特性，可以直接取最後跟塞最前面，重複做 K 次就好
     *  時間複雜度 O(K * A)
     *  空間複雜度 O(1)
     */
    function solution(array $A, int $K)
    {
        if (empty($A)) {
            return $A;
        }

        for ($i = 0; $i < $K; $i++) {
            array_unshift($A, array_pop($A));
        }

        return $A;
    }
}
