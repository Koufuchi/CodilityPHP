<?php

namespace App\Codility\Exercise\AlgorithmicSkills;

use App\Codility\Exercise\AlgorithmicSkills\FirstUnique;
use PHPUnit\Framework\TestCase;

class FirstUniqueTest extends TestCase
{
    public function testSolutions()
    {
        $tests = [
            0 => [
                'questionArr' => [4, 10, 5, 4, 2, 10],
                'correct' => 5
            ],
            1 => [
                'questionArr' => [1, 4, 3, 3, 1, 2],
                'correct' => 4
            ],
            2 => [
                'questionArr' => [6, 4, 4, 6],
                'correct' => -1
            ],
        ];

        $FirstUnique = new FirstUnique();

        foreach ($tests as $increment => $questionArr) {
            $this->assertEquals(
                $questionArr['correct'],
                $FirstUnique->solution(
                    $questionArr['questionArr'],
                )
            );
        }
    }
}
