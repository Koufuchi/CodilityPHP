<?php

namespace App\Codility\Lessons\CountingElements\PermCheck;

use App\Codility\Lessons\CountingElements\PermCheck;
use PHPUnit\Framework\TestCase;

class PermCheckTest extends TestCase
{
    public function testSolutions()
    {
        $tests = [
            0 => [
                'questionArr' => [4, 1, 3, 2],
                'correct' => 1
            ],
            1 => [
                'questionArr' => [4, 1, 3],
                'correct' => 0
            ],
            2 => [
                'questionArr' => [1],
                'correct' => 1
            ],
            3 => [
                'questionArr' => [100000],
                'correct' => 0
            ],
            4 => [
                'questionArr' => [2, 1],
                'correct' => 1
            ],
            5 => [
                'questionArr' => [1, 1],
                'correct' => 0
            ],
            6 => [
                'questionArr' => [9, 8, 7, 6, 5, 4, 3, 2, 2, 1],
                'correct' => 0
            ],
            7 => [
                'questionArr' => [9, 8, 7, 6, 5, 4, 3, 2, 1, 10],
                'correct' => 1
            ],
        ];

        $PermCheck = new PermCheck();

        foreach ($tests as $increment => $questionArr) {
            $this->assertEquals(
                $questionArr['correct'],
                $PermCheck->solution(
                    $questionArr['questionArr']
                )
            );
        }
    }
}
