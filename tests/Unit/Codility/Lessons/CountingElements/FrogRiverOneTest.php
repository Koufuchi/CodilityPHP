<?php

namespace App\Codility\Lessons\CountingElements\FrogRiverOne;

use App\Codility\Lessons\CountingElements\FrogRiverOne;
use PHPUnit\Framework\TestCase;

class FrogRiverOneTest extends TestCase
{
    public function testSolutions()
    {
        $tests = [
            0 => [
                'targetPosition' => 5,
                'questionArr' => [1, 3, 1, 4, 2, 3, 5, 4],
                'correct' => 6
            ],
            1 => [
                'targetPosition' => 2,
                'questionArr' => [1],
                'correct' => -1
            ],
            2 => [
                'targetPosition' => 0,
                'questionArr' => [1, 1, 0],
                'correct' => -1
            ],
            3 => [
                'targetPosition' => 1,
                'questionArr' => [2, 3, 1],
                'correct' => 2
            ],
        ];

        $FrogRiverOne = new FrogRiverOne();

        foreach ($tests as $increment => $questionArr) {
            $this->assertEquals(
                $questionArr['correct'],
                $FrogRiverOne->solution(
                    $questionArr['targetPosition'],
                    $questionArr['questionArr']
                )
            );
        }
    }
}
