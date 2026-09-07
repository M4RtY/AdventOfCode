<?php

namespace Aoc\y2k25;

use Aoc\core\Day;

class Day6 extends Day {

    public function part1() {

        $newData = [];
        $sum = 0;
        $data = explode("\n", trim($this->input));

        foreach ($data as $key => $line) {
            $data[$key] = explode("-", preg_replace('/\s+/', '-', trim($line)));
        }

        foreach($data as $row => $columns) {
            foreach ($columns as $column => $value) {
                $newData[$column][$row] = $value;
            }
        }

        foreach($newData as $numbers) {
            $operation = end($numbers);
            $numbers = array_slice($numbers, 0, -1);

            $result = array_shift($numbers);

            foreach($numbers as $number) {
                $result = match ($operation) {
                    '*' => $result * (int) $number,
                    '+' => $result + (int) $number,
                    '/' => $result / (int) $number,
                    '-' => $result - (int) $number,
                };
            }

            $sum += $result;
        }

        //echo "The grand total of the answers to the individual problems is {$sum}. <br>";
    }

    public function part2() {
        $data = explode("\n", trim($this->input));
        $maxLength = max(array_map('strlen', $data));

        foreach ($data as $key => $line) {
            $data[$key] = str_split(str_pad($line, $maxLength, ' '));
        }

        $newData = [];

        foreach ($data as $row => $columns) {
            foreach($columns as $row2 => $column2) {
                $newData[$row2][$row] = $column2;
            }
        }

        foreach($newData as $numbers) {
            $operation = end($numbers);
            $result = 0;
            $number = '';

            foreach(array_slice($numbers, 0, -1) as $digit) {

                $number .= str_replace(' ', '', $digit);

            }

            $result += (int) $number;

            //echo $result . "\n";

        }
    }

}
