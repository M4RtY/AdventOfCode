package aoc.y2k22;

import aoc.utils.TextReader;

import java.util.List;

public class Day03 {
    private final List<String> rucksacks;

    public Day03() {
        rucksacks = new TextReader().readString("src/main/resources/y2k22/day03.txt");
    }

    public void run() {
        part1();
        part2();
    }

    public void part1() {
        char character = 0;
        int priorities = 0;

        for (String items : rucksacks) {

            String firstItem = items.substring(0, items.length() / 2);
            String secondItem = items.substring(items.length() / 2);

            for (int i = 0; i < firstItem.length(); i++) {
                for (int j = 0; j < secondItem.length(); j++) {
                    if (firstItem.charAt(i) == secondItem.charAt(j)) {
                        character = firstItem.charAt(i);
                        break;
                    }
                }
            }

            if(Character.isLowerCase(character)) {
                priorities += (int) character - (int) 'a' + 1;
            } else {
                priorities += (int) character - (int) 'A' + 27;
            }
        }

        System.out.println("The sum of the priorities is: " + priorities);
    }

    public void part2() {
        char character = 0;
        int priorities = 0;

        for (int i = 0; i < rucksacks.size(); i+=3) {
            String firstLine = rucksacks.get(i);
            String secondLine = rucksacks.get(i+1);
            String thirdLine = rucksacks.get(i+2);

            for (int j = 0; j < firstLine.length(); j++) {
                for (int k = 0; k < secondLine.length(); k++) {
                    for (int l = 0; l < thirdLine.length(); l++) {
                        if (firstLine.charAt(j) == secondLine.charAt(k) && firstLine.charAt(j) == thirdLine.charAt(l)) {
                            character = firstLine.charAt(j);
                            break;
                        }
                    }
                }
            }

            if(Character.isLowerCase(character)) {
                priorities += (int) character - (int) 'a' + 1;
            } else {
                priorities += (int) character - (int) 'A' + 27;
            }
        }

        System.out.println("The sum of the priorities is: " + priorities);
    }

}
