<?php

namespace App\Codility\Lessons\TimeComplexity\PermMissingElemTest;

use App\Codility\Lessons\TimeComplexity\PermMissingElem;
use PHPUnit\Framework\TestCase;

class PermMissingElemTest extends TestCase
{
    public function testSolutions()
    {
        $tests = [
            0 => [
                'questionArr' => [2, 3, 1, 5],
                'correct' => 4
            ],
            1 => [
                'questionArr' => [],
                'correct' => 1
            ],
            2 => [
                'questionArr' => [2],
                'correct' => 1
            ],
            3 => [
                'questionArr' => [1],
                'correct' => 2
            ],
            4 => [
                'questionArr' => [2, 3, 1, 5, 4],
                'correct' => 6
            ],
            5 => [
                'questionArr' => [2, 3, 6, 5, 4],
                'correct' => 1
            ],
            6 => [
                'questionArr' => [3, 1],
                'correct' => 2
            ],
        ];

        $PermMissingElem = new PermMissingElem();

        foreach ($tests as $increment => $questionArr) {
            $this->assertEquals(
                $questionArr['correct'],
                $PermMissingElem->solution(
                    $questionArr['questionArr'],
                )
            );
        }
    }
}
