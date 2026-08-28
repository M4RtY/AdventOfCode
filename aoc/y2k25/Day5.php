<?php

namespace Aoc\y2k25;

use Aoc\core\Day;

class Day5 extends Day {

    public function part1() {
        $data = explode("\n\n", trim($this->input));

        $fresh = 0;

        $ranges = explode("\n", $data[0]);
        $ids = explode("\n", $data[1]);

        foreach ($ids as $id) {
            foreach ($ranges as $range) {
                [$min, $max] = explode("-", $range);

                if($id >= $min && $id <= $max) {
                    $fresh++;
                    break;
                }
            }
        }

        echo "There are {$fresh} fresh igredients in the list <br />";
    }

    public function part2() {
        $data = explode("\n\n", trim($this->input));

        $total = 0;
        $ranges = [];
        $merged = [];

        foreach (explode("\n", $data[0]) as $range) {
            [$min, $max] = explode("-", $range);
            $ranges[] = [(int)$min, (int)$max];
        }

        usort($ranges, fn($a, $b) => $a[0] <=> $b[0]);

        $currentMin = $ranges[0][0];
        $currentMax = $ranges[0][1];

        foreach ($ranges as [$min, $max]) {

            if ($min <= $currentMax + 1) {
                $currentMax = max($currentMax, $max);
            } else {
                $merged[] = [$currentMin, $currentMax];

                $currentMin = $min;
                $currentMax = $max;
            }

        }

        $merged[] = [$currentMin, $currentMax];

        foreach ($merged as [$min, $max]) {
            $total += $max - $min + 1;
        }

        echo "There are {$total} igredients considered to be fresh <br>";
    }

}
