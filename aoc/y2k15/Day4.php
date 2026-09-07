<?php

namespace Aoc\y2k15;

use Aoc\core\Day;

class Day4 extends Day
{
    public function part1() {
        $data = trim($this->input);
        $secret = 0;

        while(!str_starts_with(md5($data . $secret), '00000')) {
            $secret++;
        }

        echo "The secret number is {$secret} <br>";
    }

    public function part2() {
        $data = trim($this->input);
        $secret = 0;

        while(!str_starts_with(md5($data . $secret), '000000')) {
            $secret++;
        }

        echo "The secret number is {$secret} <br>";
    }
}
