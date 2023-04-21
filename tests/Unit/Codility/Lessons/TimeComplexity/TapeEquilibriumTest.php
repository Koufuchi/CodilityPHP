<?php

namespace App\Codility\Lessons\TimeComplexity\TapeEquilibrium;

use App\Codility\Lessons\TimeComplexity\TapeEquilibrium;
use PHPUnit\Framework\TestCase;

class TapeEquilibriumTest extends TestCase
{
    public function testSolutions()
    {
        $tests = [
            0 => [
                'questionArr' => [3, 1, 2, 4, 3],
                'correct' => 1
            ],
            1 => [
                'questionArr' => [3, 1],
                'correct' => 2
            ],
            2 => [
                'questionArr' => [3, 1, -9, -8, 10],
                'correct' => 7
            ],
            3 => [
                'questionArr' => [1000, -1000],
                'correct' => 2000
            ],
        ];

        $TapeEquilibrium = new TapeEquilibrium();

        foreach ($tests as $increment => $questionArr) {
            $this->assertEquals(
                $questionArr['correct'],
                $TapeEquilibrium->solution(
                    $questionArr['questionArr'],
                )
            );
        }
    }
}
