<?php

namespace Aoc\y2k25;

use Aoc\core\Day;

class Day1 extends Day {

    public function part1() {

        $data = explode("\n", trim($this->input));

        $currentPosition = 50;
        $count = 0;

        foreach ($data as $rotation) {

            $direction = $rotation[0];
            $position = (int) substr($rotation, 1);

            switch($direction) {
                case "L":
                    $currentPosition -= $position;
                break;

                case "R":
                    $currentPosition += $position;
                break;
            }

            $currentPosition %= 100;

            if ($currentPosition == 0) {
                $count++;
            }

        }

        echo "The actual password to open the door is {$count} <br>";
    }

    public function part2() {
        $data = explode("\n", trim($this->input));

        $currentPosition = 50;
        $zeroCount = 0;

        foreach ($data as $rotation) {
            $direction = $rotation[0];
            $position = (int) substr($rotation, 1);

            for ($i = 0; $i < $position; $i++) {
                switch ($direction) {
                    case "L":
                        $currentPosition--;
                        break;

                    case "R":
                        $currentPosition++;
                        break;
                }

                $currentPosition %= 100;

                if ($currentPosition === 0) {
                    $zeroCount++;
                }
            }
        }

        echo "The actual password to open the door is {$zeroCount} <br>";
    }

}
