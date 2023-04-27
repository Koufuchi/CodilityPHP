<?php

namespace App\Codility\Lessons\CountingElements\MissingInteger;

use App\Codility\Lessons\CountingElements\MissingInteger;
use PHPUnit\Framework\TestCase;
use Tests\Traits\TraitPerformance;

class MissingIntegerTest extends TestCase
{
    use TraitPerformance;

    public $tests = [
        0 => [
            'questionArr' => [1, 3, 6, 4, 1, 2],
            'correct' => 5
        ],
        1 => [
            'questionArr' => [1, 2, 3],
            'correct' => 4
        ],
        2 => [
            'questionArr' => [-1, -3],
            'correct' => 1
        ],
        3 => [
            'questionArr' => [5],
            'correct' => 1
        ],
        4 => [
            'questionArr' => [1],
            'correct' => 2
        ],
        5 => [
            'questionArr' => [-3, 0, 2, 4, 2, 100000, 53, 2, -3, -2, -3, -7, 45, 523, 1, 5, 6, 7, 8, 3, 2, -2],
            'correct' => 9
        ],
    ];

    public function testSolution()
    {
        $MissingInteger = new MissingInteger();

        foreach ($this->tests as $questionArr) {
            $this->assertEquals(
                $questionArr['correct'],
                $MissingInteger->solution(
                    $questionArr['questionArr']
                )
            );
            $this->assertExecutionTime(0.352, function () use ($MissingInteger, $questionArr) {
                $MissingInteger->solution(
                    $questionArr['questionArr']
                );
            });
        }
    }
}
