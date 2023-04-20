<?php

namespace App\Codility\Lessons\Arrays\CyclicRotation;

use App\Codility\Lessons\Arrays\CyclicRotation;
use PHPUnit\Framework\TestCase;

class CyclicRotationTest extends TestCase
{
    public function testSolutions()
    {
        $tests = [
            0 => [
                'oriArr' => [3, 8, 9, 7, 6],
                'times' => 3,
                'correctArr' => [9, 7, 6, 3, 8]
            ],
            1 => [
                'oriArr' => [0, 0, 0],
                'times' => 1,
                'correctArr' => [0, 0, 0]
            ],
            2 => [
                'oriArr' => [1, 2, 3, 4],
                'times' => 4,
                'correctArr' => [1, 2, 3, 4]
            ],
            3 => [
                'oriArr' => [],
                'times' => 2,
                'correctArr' => []
            ],
            4 => [
                'oriArr' => [3],
                'times' => 9,
                'correctArr' => [3]
            ],
            5 => [
                'oriArr' => [3, 6],
                'times' => 1,
                'correctArr' => [6, 3]
            ],
        ];

        $cyclicRotation = new CyclicRotation();

        foreach ($tests as $increment => $questionArr) {
            $this->assertEquals(
                $questionArr['correctArr'],
                $cyclicRotation->solution(
                    $questionArr['oriArr'],
                    $questionArr['times']
                )
            );
        }
    }
}
