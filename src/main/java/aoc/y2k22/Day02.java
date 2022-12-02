package aoc.y2k22;

import aoc.utils.TextReader;
import java.util.List;

public class Day02 {
    private final List<String> strategies;

    public Day02() {
        strategies = new TextReader().readString("src/main/resources/y2k22/day02.txt");
    }

    public void run() {
        part1();
        part2();
    }

    public void part1() {

        int score = 0;

        for (String strategy : strategies) {

            String[] turn = strategy.split("[ ]+");

            String opponent = turn[0];
            String player = turn[1];

            switch (opponent) {
                case "A" -> {
                    switch (player) {
                        case "X" -> score += 4;
                        case "Y" -> score += 8;
                        case "Z" -> score += 3;
                    }
                }
                case "B" -> {
                    switch (player) {
                        case "X" -> score += 1;
                        case "Y" -> score += 5;
                        case "Z" -> score += 9;
                    }
                }
                case "C" -> {
                    switch (player) {
                        case "X" -> score += 7;
                        case "Y" -> score += 2;
                        case "Z" -> score += 6;
                    }
                }
            }
        }

        System.out.println("The total score of this game is " + score);

    }

    public void part2() {
        int score = 0;

        for (String strategy : strategies) {

            String[] turn = strategy.split("[ ]+");

            String opponent = turn[0];
            String player = turn[1];

            switch (player) {
                case "X" -> {
                    switch (opponent) {
                        case "A" -> score += 3;
                        case "B" -> score += 1;
                        case "C" -> score += 2;
                    }
                }
                case "Y" -> {
                    switch (opponent) {
                        case "A" -> score += 4;
                        case "B" -> score += 5;
                        case "C" -> score += 6;
                    }
                }
                case "Z" -> {
                    switch (opponent) {
                        case "A" -> score += 8;
                        case "B" -> score += 9;
                        case "C" -> score += 7;
                    }
                }
            }
        }

        System.out.println("The total score of this game is " + score);
    }

}
