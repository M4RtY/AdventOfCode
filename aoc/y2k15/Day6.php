<?php

namespace Aoc\y2k15;

use Aoc\core\Day;

class Day6 extends Day
{
    public function part1() {
        $data = explode("\n", trim($this->input));

        $total = 0;
        $lights = [];

        for ($x = 0; $x <= 999; $x++) {
            for ($y = 0; $y <= 999; $y++) {
                $lights[$x][$y] = 0;
            }
        }

        foreach($data as $line) {
            preg_match('/(turn on|turn off|toggle) (\d+,\d+) through (\d+,\d+)/', $line, $match);

            $instruction = $match[1];
            $start = explode(",", $match[2]);
            $end = explode(",", $match[3]);

            for ($i = $start[0]; $i <= $end[0]; $i++) {
                for ($j = $start[1]; $j <= $end[1]; $j++) {
                    switch($instruction) {
                        case "turn on":
                            $lights[$i][$j] = 1;
                            break;
                        case "turn off":
                            $lights[$i][$j] = 0;
                            break;
                        case "toggle":
                            $lights[$i][$j] = $lights[$i][$j] == 0 ? 1 : 0;
                            break;
                    }

                }
            }
        }

        for ($x = 0; $x <= 999; $x++) {
            for ($y = 0; $y <= 999; $y++) {
                if ($lights[$x][$y] === 1) {
                    $total++;
                }
            }
        }

        echo "There are {$total} lights lit. <br>";
    }

    public function part2() {
        $data = explode("\n", trim($this->input));

        $total = 0;
        $lights = [];

        for ($x = 0; $x <= 999; $x++) {
            for ($y = 0; $y <= 999; $y++) {
                $lights[$x][$y] = 0;
            }
        }

        foreach($data as $line) {
            preg_match('/(turn on|turn off|toggle) (\d+,\d+) through (\d+,\d+)/', $line, $match);

            $instruction = $match[1];
            $start = explode(",", $match[2]);
            $end = explode(",", $match[3]);

            for ($i = $start[0]; $i <= $end[0]; $i++) {
                for ($j = $start[1]; $j <= $end[1]; $j++) {
                    switch($instruction) {
                        case "turn on":
                            $lights[$i][$j]++;
                            break;
                        case "turn off":
                            $lights[$i][$j] = max(0, $lights[$i][$j] - 1);
                            break;
                        case "toggle":
                            $lights[$i][$j] += 2;
                            break;
                    }

                }
            }
        }

        for ($x = 0; $x <= 999; $x++) {
            for ($y = 0; $y <= 999; $y++) {
                $total += $lights[$x][$y];
            }
        }

        echo "The total brightness is {$total}<br>";
    }
}
