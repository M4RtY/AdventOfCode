<?php

namespace Aoc\y2k15;

use Aoc\core\Day;

class Day1 extends Day
{
    public function part1() {
        $data = trim($this->input);

        $floor = 0;

        for ($i = 0; $i < strlen($data); $i++) {
            $data[$i] == '(' ? $floor++ : $floor--;
        }

        echo "Santa takes to {$floor} floor. <br>";

    }

    public function part2() {
        $data = trim($this->input);

        $position = 0;
        $floor = 0;

        for ($i = 0; $i < strlen($data); $i++) {
            $data[$i] == '(' ? $floor++ : $floor--;

            if($floor == -1) {
                echo "Santa enters the basement at " . $i + 1 ." position. <br>";
                break;
            }
        }
    }
}
