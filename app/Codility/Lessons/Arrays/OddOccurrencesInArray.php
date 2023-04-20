<?php

namespace App\Codility\Lessons\Arrays;

class OddOccurrencesInArray
{
    // https://app.codility.com/programmers/lessons/2-arrays/odd_occurrences_in_array/

    /**
     *  時間複雜度 O(N)
     *  空間複雜度 O(N) 最糟的情況下會存 N/2 的數量
     */
    function solution(array $A): int
    {
        $resultArr = [];
        foreach ($A as $int) {
            if (!isset($resultArr[$int])) {
                $resultArr[$int] = 1;
            } else {
                unset($resultArr[$int]);
            }
        }

        return array_key_first($resultArr);
    }

    /**
     *  時間複雜度 O(N) 實際上要跑 2N
     *  空間複雜度 O(N) 每次都要存 N
     */
    function solutionWorse(array $A)
    {
        $boardArr = [];
        foreach ($A as $int) {
            if (!isset($boardArr[$int])) {
                $boardArr[$int] = 1;
            } else {
                $boardArr[$int] += 1;
            }
        }
        foreach ($boardArr as $int => $times) {
            if ($times == 1) {
                return $int;
            }
        }
    }
}
