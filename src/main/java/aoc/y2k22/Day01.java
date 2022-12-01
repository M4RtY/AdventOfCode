package aoc.y2k22;

import aoc.utils.TextReader;

import java.util.ArrayList;
import java.util.Comparator;
import java.util.List;

public class Day01 {
    private final List<String> calories;
    private final List<Integer> Elves = new ArrayList<>();

    public Day01() {
        calories = new TextReader().readString("src/main/resources/y2k22/day01.txt");
    }

    public void run() {
        part1();
        part2();
    }

    public void part1() {

        int calorieSum = 0;

        for (String calorie : calories) {
            if (calorie.length() != 0) {
                calorieSum += Integer.parseInt(calorie);
            } else {
                Elves.add(calorieSum);
                calorieSum = 0;
            }
        }

        Elves.add(calorieSum);
        Elves.sort(Comparator.reverseOrder());

        System.out.println("The most carried calories are " + Elves.get(0));

    }

    public void part2() {

        int totalCalories = 0;

        for (int i = 0; i < 3; i++) {
            totalCalories += Elves.get(i);
        }

        System.out.println("The first three Elves are carrying " + totalCalories + " calories");
    }

}
