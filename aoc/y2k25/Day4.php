<?php

namespace Aoc\y2k25;

use Aoc\core\Day;

class Day4 extends Day {

    public function part1() {
        $data = explode("\n", trim($this->input));
        $grid = [];
        $rolls = 0;

        foreach ($data as $line) {
            $grid[] = str_split($line);
        }

        $directions = [
            [-1, -1], // ↖
            [0, -1],  // ↑
            [1, -1],  // ↗
            [-1, 0],  // ←
            [1, 0],   // →
            [-1, 1],  // ↙
            [0, 1],   // ↓
            [1, 1],   // ↘
        ];

        for ($y = 0; $y < count($grid); $y++) {
            for ($x = 0; $x < count($grid[$y]); $x++) {

                if ($grid[$y][$x] == '@') {
                    $count = 0;

                    foreach ($directions as [$dy, $dx]) {
                        $newX = $x + $dx;
                        $newY = $y + $dy;

                        if ($newY < 0 || $newY >= count($grid) || $newX < 0 || $newX >= count($grid[$newY])) {
                            continue;
                        }

                        if ($grid[$newY][$newX] === '@') {
                            $count++;
                        }
                    }

                    if ($count < 4) {
                        $rolls++;
                    }
                }
            }
        }

        echo "The number of rolls of paper that can be accessed by a forklift is {$rolls}. <br>";
    }

    public function part2() {
        $data = explode("\n", trim($this->input));
        $grid = [];
        $totalRolls = 0;

        foreach ($data as $line) {
            $grid[] = str_split($line);
        }

        $directions = [
            [-1, -1], // ↖
            [0, -1],  // ↑
            [1, -1],  // ↗
            [-1, 0],  // ←
            [1, 0],   // →
            [-1, 1],  // ↙
            [0, 1],   // ↓
            [1, 1],   // ↘
        ];

        $iter = 0;

        do {
            $rolls = 0;
            $remove = [];

            for ($y = 0; $y < count($grid); $y++) {
                for ($x = 0; $x < count($grid[$y]); $x++) {

                    if ($grid[$y][$x] == '@') {
                        $count = 0;

                        foreach ($directions as [$dy, $dx]) {
                            $newX = $x + $dx;
                            $newY = $y + $dy;

                            if ($newY < 0 || $newY >= count($grid) || $newX < 0 || $newX >= count($grid[$newY])) {
                                continue;
                            }

                            if ($grid[$newY][$newX] === '@') {
                                $count++;
                            }
                        }

                        if ($count < 4) {
                            $remove[] = [$y, $x];
                            $rolls++;
                        }
                    }
                }
            }

            foreach ($remove as [$y, $x]) {
                $grid[$y][$x] = '.';
                $totalRolls++;
            }

        } while ($rolls > 0);

        echo $iter;

        echo "The number of rolls of paper that can be accessed by a forklift is {$totalRolls}. <br>";
    }

}
