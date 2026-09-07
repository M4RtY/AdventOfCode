<?php

namespace Aoc\y2k15;

use Aoc\core\Day;

class Day5 extends Day
{
    public function part1() {
        $data = explode("\n", trim($this->input));
        $sum = 0;

        foreach($data as $line) {

            $count = 0;

            $forbidden = ['ab', 'cd', 'pq', 'xy'];
            $vowel = ['a', 'e', 'i', 'o', 'u'];

            foreach ($forbidden as $pair) {
                $nice = true;

                if(str_contains($line, $pair)) {
                    $nice = false;
                    break;
                }
            }

            if(!$nice) {
                continue;
            }

            foreach($vowel as $vow) {
                $count += substr_count($line, $vow);
            }

            if($count < 3) {
                continue;
            }

            for($i = 0; $i < strlen($line) - 1; $i++) {
                if($line[$i] == $line[$i + 1]) {
                    $sum++;
                    break;
                }
            }
        }

        echo "There are {$sum} nice strings in the list. <br>";
    }

    public function part2() {
        $data = explode("\n", trim($this->input));
        $sum = 0;

        foreach($data as $line) {

            $hasPair = false;
            for ($i = 0; $i < strlen($line) - 1; $i++) {
                if(substr_count($line, $line[$i] . $line[$i + 1]) >= 2) {
                    $hasPair = true;
                    break;
                }
            }

            if (!$hasPair) {
                continue;
            }

            for ($i = 1; $i < strlen($line) - 1; $i++) {
                if($line[$i - 1] == $line[$i + 1]) {
                    $sum++;
                    break;
                }
            }

        }

        echo "There are {$sum} nice strings in the list. <br>";

    }
}
