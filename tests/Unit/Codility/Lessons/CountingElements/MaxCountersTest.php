<?php

namespace App\Codility\Lessons\CountingElements\MaxCounters;

use App\Codility\Lessons\CountingElements\MaxCounters;
use PHPUnit\Framework\TestCase;

class MaxCountersTest extends TestCase
{
    public function testSolutions()
    {
        $tests = [
            0 => [
                'N' => 5,
                'questionArr' => [3, 4, 4, 6, 1, 4, 4],
                'correctArr' => [3, 2, 2, 4, 2]
            ],
            1 => [
                'N' => 6,
                'questionArr' => [7],
                'correctArr' => [0, 0, 0, 0, 0, 0]
            ],
            2 => [
                'N' => 6,
                'questionArr' => [6, 7],
                'correctArr' => [1, 1, 1, 1, 1, 1]
            ],
            3 => [
                'N' => 4,
                'questionArr' => [2, 5, 5, 3],
                'correctArr' => [1, 1, 2, 1]
            ],
            4 => [
                'N' => 4,
                'questionArr' => [2, 5, 3, 5],
                'correctArr' => [2, 2, 2, 2]
            ],
        ];

        $MaxCounters = new MaxCounters();

        foreach ($tests as $increment => $questionArr) {
            $this->assertEquals(
                $questionArr['correctArr'],
                $MaxCounters->solution(
                    $questionArr['N'],
                    $questionArr['questionArr']
                )
            );
        }
    }
}
