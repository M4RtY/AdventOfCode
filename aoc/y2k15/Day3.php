<?php

namespace Aoc\y2k15;

use Aoc\core\Day;

class Day3 extends Day
{
    public function part1() {
        $data = trim($this->input);

        $houses = ["0,0"];

        $x = 0;
        $y = 0;

        for ($i = 0; $i < strlen($data); $i++) {
            switch ($data[$i]) {
                case "^":
                    $y++;
                    break;
                case "v":
                    $y--;
                    break;
                case ">":
                    $x++;
                    break;
                case "<":
                    $x--;
                    break;
            }

            $houses[] = "$x,$y";
        }

        $count = count(array_unique($houses));

        echo "The Santa have visited {$count} houses. <br>";
    }

    public function part2() {
        $data = trim($this->input);

        $houses = ["0,0"];

        $santaX = 0;
        $santaY = 0;
        $roboX = 0;
        $roboY = 0;

        for ($i = 0; $i < strlen($data); $i++) {

            if($i % 2 == 0) {
                $x =& $santaX;
                $y =& $santaY;

            } else {
                $x =& $roboX;
                $y =& $roboY;
            }

            switch ($data[$i]) {
                case "^":
                    $y++;
                    break;
                case "v":
                    $y--;
                    break;
                case ">":
                    $x++;
                    break;
                case "<":
                    $x--;
                    break;
            }

            $houses[] = "$x,$y";
        }

        $count = count(array_unique($houses));

        echo "The Sanda with Robo-Santa have visited {$count} houses. <br>";
    }
}
