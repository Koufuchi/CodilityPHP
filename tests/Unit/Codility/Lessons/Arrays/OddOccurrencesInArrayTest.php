<?php

namespace App\Codility\Lessons\Arrays\OddOccurrencesInArray;

use App\Codility\Lessons\Arrays\OddOccurrencesInArray;
use PHPUnit\Framework\TestCase;

class OddOccurrencesInArrayTest extends TestCase
{
    public function testSolutions()
    {
        $tests = [
            0 => [
                'questionArr' => [9, 3, 9, 3, 9, 7, 9],
                'correct' => 7
            ],
            1 => [
                'questionArr' => [42],
                'correct' => 42
            ]
        ];

        $oddOccurrencesInArray = new OddOccurrencesInArray();

        foreach ($tests as $increment => $questionArr) {
            $this->assertEquals(
                $questionArr['correct'],
                $oddOccurrencesInArray->solution(
                    $questionArr['questionArr'],
                )
            );
        }
    }
}
