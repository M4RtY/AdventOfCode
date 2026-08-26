<?php

namespace Aoc\y2k25;

use Aoc\core\Day;

class Day2 extends Day {

    public function part1() {
        $data = explode(",", trim($this->input));

        $invalidIds = 0;

        foreach ($data as $idRanges) {
            [$from, $to] = explode("-", $idRanges);

            for($i = $from; $i <= $to; $i++) {
                if(strlen($i) % 2 == 0) {
                    $half = strlen($i) / 2;

                    $firstPart = substr($i, 0, $half);
                    $secondPart = substr($i, $half);

                    if($firstPart === $secondPart) {
                        $invalidIds += $i;
                    }
                }
            }
        }

        echo "The sum of all invalid IDs is {$invalidIds} <br> \n";
    }

    public function part2() {
        $data = explode(",", trim($this->input));

        $invalidIds = 0;

        foreach ($data as $idRanges) {
            [$from, $to] = explode("-", $idRanges);

            for($i = $from; $i <= $to; $i++) {
                for($j = strlen($i); $j > 0; $j--) {
                    if (strlen($i) % $j == 0) {

                        $repeatCount = strlen($i) / $j;

                        if($repeatCount >= 2) {
                            $firstPart = substr($i, 0, $j);
                            $repeated = str_repeat($firstPart, $repeatCount);

                            if ($repeated == $i) {
                                $invalidIds += $i;
                                break;
                            }
                        }

                    }
                }
            }
        }

        echo "The sum of all invalid IDs is {$invalidIds} <br> \n";
    }

}
