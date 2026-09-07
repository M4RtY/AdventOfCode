<?php

namespace Aoc\y2k24;

use Aoc\core\Day;

class Day1 extends Day
{
    public function part1() {
        $data = explode("\n", trim($this->input));

        $total = 0;
        $left = [];
        $right = [];

        foreach($data as $line) {
            [$a, $b] = preg_split("/\s+/", $line);

            $left[] = $a;
            $right[] = $b;
        }

        sort($left);
        sort($right);

        foreach($right as $index => $number) {
            $total += abs($number - $left[$index]);
        }

        echo "The total distance between the list is {$total}. <br>";
    }

    public function part2() {
        $data = explode("\n", trim($this->input));

        $total = 0;
        $left = [];
        $right = [];

        foreach($data as $line) {
            [$a, $b] = preg_split("/\s+/", $line);

            $left[] = $a;
            $right[] = $b;
        }

        $counts = array_count_values($right);

        foreach($left as $a) {
            $total += $a * ($counts[$a] ?? 0);
        }

        echo "The similarity score is {$total}. <br>";
    }
}
