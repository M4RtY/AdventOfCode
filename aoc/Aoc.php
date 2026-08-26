<?php

namespace Aoc;

use Aoc\core\Day;

class Aoc {

    public string $year;
    public int $day;
    private Day $aocDay;

    public function __construct(string $year, int $day)
    {
        $this->year = $year;
        $this->day = $day;

        $className = "\\Aoc\\y2k25\\Day{$this->day}";

        if(!class_exists($className)) {
            throw new \Exception("The Advent Of Code day is not available.");
        }

        $this->aocDay = new $className($this->year, $this->day);
    }

    public function run(): void
    {
        $this->aocDay->run();
    }
}
