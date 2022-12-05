package aoc.y2k22;

import aoc.utils.TextReader;

import java.util.List;

public class Day04 {
    private final List<String> assignmnents;

    public Day04() {
        assignmnents = new TextReader().readString("src/main/resources/y2k22/day04.txt");
    }

    public void run() {
        part1();
        part2();
    }

    public void part1() {
        int count = 0;

        for (String assignmenent : assignmnents) {

            String firstElf = assignmenent.split(",")[0];
            String secondElf = assignmenent.split(",")[1];

            int minA = Integer.parseInt(firstElf.split("-")[0]);
            int maxA = Integer.parseInt(firstElf.split("-")[1]);

            int minB = Integer.parseInt(secondElf.split("-")[0]);
            int maxB = Integer.parseInt(secondElf.split("-")[1]);

            if( (minA >= minB && maxA <= maxB) || (minB >= minA && maxB <= maxA) ) {
                count++;
            }
        }

        System.out.println("The sum of all pair assignments: " + count);
    }

    public void part2() {
        int count = 0;

        for (String assignmenent : assignmnents) {

            String firstElf = assignmenent.split(",")[0];
            String secondElf = assignmenent.split(",")[1];

            int minA = Integer.parseInt(firstElf.split("-")[0]);
            int maxA = Integer.parseInt(firstElf.split("-")[1]);

            int minB = Integer.parseInt(secondElf.split("-")[0]);
            int maxB = Integer.parseInt(secondElf.split("-")[1]);

            if( (minA <= maxB && maxA >= minB) ) {
                count++;
            }
        }

        System.out.println("The sum of all overlapped pair assignments: " + count);
    }

}
