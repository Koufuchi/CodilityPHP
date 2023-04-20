<?php

namespace App\Codility\Lessons\TimeComplexity\FrogJump;

use App\Codility\Lessons\TimeComplexity\FrogJump;
use PHPUnit\Framework\TestCase;

class FrogJumpTest extends TestCase
{
    public function testSolutions()
    {
        $tests = [
            0 => [
                'start' => 10,
                'end' => 85,
                'step' => 30,
                'correct' => 3
            ],
            1 => [
                'start' => 50,
                'end' => 50,
                'step' => 3,
                'correct' => 0
            ],
            2 => [
                'start' => 27,
                'end' => 988723457,
                'step' => 1283,
                'correct' => 770635
            ],
            2 => [
                'start' => 1,
                'end' => 1000000000,
                'step' => 1,
                'correct' => 999999999
            ],
            3 => [
                'start' => 10,
                'end' => 100,
                'step' => 10,
                'correct' => 9
            ],
        ];

        $FrogJump = new FrogJump();

        foreach ($tests as $increment => $questionArr) {
            $this->assertEquals(
                $questionArr['correct'],
                $FrogJump->solution(
                    X: $questionArr['start'],
                    Y: $questionArr['end'],
                    D: $questionArr['step']
                )
            );
        }
    }
}
