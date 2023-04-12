<?php

namespace App\Codility\Lessons\Iterations\BinaryGap;

use App\Codility\Lessons\Iterations\BinaryGap;
use PHPUnit\Framework\TestCase;

class BinaryGapTest extends TestCase
{
    public function testSolutions()
    {
        $tests = [
            1041 => 5,
            15 => 0,
            32 => 0,
            1 => 0,
            5 => 1,
            2147483647 => 0,
            6 => 0,
            328 => 2,
            561892 => 3,
            66561 => 9,
            74901729 => 4,
            1610612737 => 28
        ];

        $binaryGap = new BinaryGap();

        foreach ($tests as $N => $ans) {
            $this->assertEquals($ans, $binaryGap->solution($N));
        }
    }
}
