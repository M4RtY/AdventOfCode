package aoc.y2k22;

import aoc.utils.TextReader;

import java.util.ArrayList;
import java.util.List;

public class Day01 {
    private final List<String> calories;

    public Day01() {
        calories = new TextReader().readString("src/main/resources/y2k22/day01.txt");
    }

    public void run() {
        part1();
    }

    public void part1() {

        List<Integer> Elves = new ArrayList<>();
        int calorieSum = 0;
        int maxCalories = 0;
        int elf = 0;

        for (String calorie : calories) {
            if (calorie.length() != 0) {
                calorieSum += Integer.parseInt(calorie);
            } else {
                Elves.add(calorieSum);
                calorieSum = 0;
            }
        }

        Elves.add(calorieSum);

        for (int i = 0; i < Elves.size(); i++) {
            if(Elves.get(i) > maxCalories) {
                maxCalories = Elves.get(i);
                elf = i - 1;
            }
        }

        System.out.println("The Elf number " + elf + " is carrying the most calories (" + maxCalories + ")");

    }

}
