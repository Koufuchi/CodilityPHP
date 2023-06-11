<?php

namespace App\Codility\Exercise\AlgorithmicSkills;

class FirstUnique
{
    // https://app.codility.com/programmers/trainings/4/first_unique/

    /**
     *  解法：用另一個 map 存鍵值顛倒的結果，並判斷有重複鍵時值寫成 -1，最後再遍歷一次。
     *  時間複雜度 O(N) 
     *  空間複雜度 O(N) 
     */
    function solution($A)
    {
        $timesArr = [];
        foreach ($A as $index => $times) {
            $timesArr[$times] = isset($timesArr[$times]) ? -1 : $index;
        }

        foreach ($timesArr as $times => $number) {
            if ($number !== -1) {

                return $times;
            }
        }

        return -1;
    }
}
