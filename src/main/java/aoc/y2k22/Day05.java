package aoc.y2k22;

import aoc.utils.TextReader;

import java.util.*;

public class Day05 {
    private final List<String> ship;

    public Day05() {
        ship = new TextReader().readString("src/main/resources/y2k22/day05.txt");
    }

    public void run() {
        part1();
        part2();
    }

    public void part1() {
        List<Deque<Character>> crates = getCrates();
        String peekCrates = "";
        
        for (int i = 10; i < ship.size(); i++) {
            
            String[] move = ship.get(i).split(" ");

            int number = Integer.parseInt(move[1]);
            int from = Integer.parseInt(move[3]) - 1;
            int to = Integer.parseInt(move[5]) - 1;

            for (int j = 0; j < number; j++) {
                char crate = crates.get(from).pop();
                crates.get(to).push(crate);
            }
        }

        for (Deque<Character> crate : crates) {
            peekCrates += crate.peek();
        }

        System.out.println("The crates ended up on the peek of each stake: " + peekCrates);
    }

    public void part2() {
        List<Deque<Character>> crates = getCrates();
        String peekCrates = "";

        for (int i = 10; i < ship.size(); i++) {

            String[] move = ship.get(i).split(" ");
            Deque<Character> sideCrate = new ArrayDeque<>();

            int number = Integer.parseInt(move[1]);
            int from = Integer.parseInt(move[3]) - 1;
            int to = Integer.parseInt(move[5]) - 1;

            for (int j = 0; j < number; j++) {
                char crate = crates.get(from).pop();
                sideCrate.push(crate);
            }

            for (int j = 0; j < number; j++) {
                crates.get(to).push(sideCrate.pop());
            }
        }

        for (Deque<Character> crate : crates) {
            peekCrates += crate.peek();
        }

        System.out.println("The crates ended up on the peek of each stake: " + peekCrates);
    }
    
    private List<Deque<Character>> getCrates() {
        List<Deque<Character>> crates = new ArrayList<>();

        for (int i = 0; i < 9; i++) {
            crates.add(new ArrayDeque<>());
        }

        for (int i = 7; i > -1; i--) {
            String line = ship.get(i);

            for (int j = 1; j < line.length(); j+=4) {
                char character = line.charAt(j);

                if(character != ' ') {
                    crates.get((j-1) / 4 ).push(character);
                }
            }
        }
        
        return crates;
    }

}
