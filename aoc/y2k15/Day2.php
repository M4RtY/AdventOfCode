<?php

namespace Aoc\y2k15;

use Aoc\core\Day;

class Day2 extends Day
{
    public function part1() {
        $data = explode("\n", trim($this->input));
        $total = 0;

        foreach ($data as $line) {
            [$l, $w, $h] = explode("x", $line);

            $surface = (2 * $l * $w) + (2 * $w * $h) + (2 * $h * $l);
            $slack = min($l * $w, $h * $l, $w * $h);

            $total += $surface + $slack;
        }

        echo "There is needed a {$total} square feet of wrapping paper. <br>";

    }

    public function part2() {
        $data = explode("\n", trim($this->input));
        $total = 0;

        foreach ($data as $line) {
            $dimensions = explode("x", $line);
            sort($dimensions);

            $total += (2 * $dimensions[0]) + (2 * $dimensions[1]) + ($dimensions[0] * $dimensions[1] * $dimensions[2]);
        }

        echo "There is needed a {$total} square feet of ribbon. <br>";
    }
}
