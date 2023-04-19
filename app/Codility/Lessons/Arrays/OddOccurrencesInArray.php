<?php

namespace App\Codility\Lessons\Arrays;

class OddOccurrencesInArray
{
    // https://app.codility.com/programmers/lessons/2-arrays/cyclic_rotation/

    /**
     *  題目：
     *  解法：
     *  時間複雜度 O()
     *  空間複雜度 O()
     */
    function solution(array $A)
    {
        $resultArr = [];
        foreach ($A as $increment => $int) {
            if (!in_array($int, $resultArr)) {
                $resultArr[] = $int;
            } else {
                unset($resultArr[array_search($int, $resultArr)]);
            }
        }

        return reset($resultArr);
    }

    /**
     *  題目：
     *  解法：
     *  時間複雜度 O()
     *  空間複雜度 O()
     */
    function solutionWorse(array $A)
    {
        $resultArr = [];
        foreach ($A as $increment => $int) {
            if (!in_array($int, $resultArr)) {
                $resultArr[] = $int;
            } else {
                unset($resultArr[array_search($int, $resultArr)]);
            }
        }

        return reset($resultArr);
    }
}
