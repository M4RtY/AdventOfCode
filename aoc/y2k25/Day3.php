<?php

namespace Aoc\y2k25;

use Aoc\core\Day;

class Day3 extends Day {

    public function part1() {
        $data = explode("\n", trim($this->input));
        $joltage = 0;

        foreach ($data as $line) {

            $bank = str_split($line);
            $firstValue = max(array_slice($bank, 0, -1));
            $secondValue = max(array_slice($bank, strpos($line, $firstValue) + 1));

            $joltage += (int) ($firstValue . $secondValue);

        }

        echo "The total output joltage is {$joltage} <br /> \n";
    }

    public function part2() {
        $data = explode("\n", trim($this->input));
        $joltage = 0;

        foreach ($data as $line) {

            $bank = str_split($line);

            $result = max(array_slice($bank, 0, -11));
            $remaining = array_slice($bank, strpos($line, $result) + 1);

            $i = 0;

            while (strlen($result) < 12) {

                $missing = 12 - strlen($result);
                $searchLength = count($remaining) - $missing + 1;

                $max = max(array_slice($remaining, 0, $searchLength));
                $index = array_search($max, $remaining);

                $result .= $max;
                $remaining = array_slice($remaining, $index + 1);
            }

            $joltage += $result;

        }

        echo "The total output joltage is {$joltage} <br /> \n";
    }

}
