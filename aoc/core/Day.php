<?php

namespace Aoc\core;

abstract class Day {

    public string $year;
    public int $day;
    protected string $input;

    public function __construct(string $year, int $day)
    {
        $this->year = $year;
        $this->day = $day;

        $file = dirname(__DIR__) . "/{$this->year}/input/day{$this->day}.txt";

        if(!file_exists($file)) {
            throw new \Exception("The input file for Advent of Code day does not exist.");
        }

        $this->input = file_get_contents($file);

    }

    abstract public function part1();
    abstract public function part2();

    public function run(): void
    {

        $this->part1();
        $this->part2();
    }
}
