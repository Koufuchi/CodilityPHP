<?php

namespace App\Codility\Lessons\CountingElements\MaxCounters;

use App\Codility\Lessons\CountingElements\MaxCounters;
use PHPUnit\Framework\TestCase;
use Tests\Traits\TraitPerformance;

class MaxCountersTest extends TestCase
{
    use TraitPerformance;

    public $tests = [
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

    // 會新增 $tests 的測試案例
    public function genLargeCase(): void
    {
        $questionArr['N'] = 100000;
        $questionArr['questionArr'][0] = 50000;
        for ($i = 1; $i < 100000; $i++) {
            $questionArr['questionArr'][] = 100001;
        }
        $questionArr['correctArr'] = array_fill(0, 100000, 1);

        array_push($this->tests, $questionArr);
    }

    public function testSolution()
    {
        // $this->genLargeCase();
        $MaxCounters = new MaxCounters();

        foreach ($this->tests as $questionArr) {
            $this->assertEquals(
                $questionArr['correctArr'],
                $MaxCounters->solution(
                    $questionArr['N'],
                    $questionArr['questionArr']
                )
            );
            $this->assertExecutionTime(0.352, function () use ($MaxCounters, $questionArr) {
                $MaxCounters->solution(
                    $questionArr['N'],
                    $questionArr['questionArr']
                );
            });
        }
    }

    public function testSolutionWorse()
    {
        // $this->genLargeCase();
        $MaxCounters = new MaxCounters();

        foreach ($this->tests as $questionArr) {
            $this->assertEquals(
                $questionArr['correctArr'],
                $MaxCounters->solutionWorse(
                    $questionArr['N'],
                    $questionArr['questionArr']
                )
            );
            $this->assertExecutionTime(0.352, function () use ($MaxCounters, $questionArr) {
                $MaxCounters->solutionWorse(
                    $questionArr['N'],
                    $questionArr['questionArr']
                );
            });
        }
    }
}
