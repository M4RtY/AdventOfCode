package aoc.y2k15;

import aoc.utils.TextReader;

import java.util.List;

public class Day01 {
   private final List<String> lines;

   public Day01() {
      lines = new TextReader().readString("src/main/resources/y2k15/day01.txt");
   }

   public void run() {
      part1();
      part2();
   }

   public void part1() {
      int floor = 0;

      String instructions = lines.get(0);

      for (int i = 0; i < instructions.length(); i++) {
         char instruction = instructions.charAt(i);

         switch (instruction) {
            case '(' -> floor += 1;
            case ')' -> floor -= 1;
         }
      }

      System.out.println("The Santa takes " + floor + " floor");

   }

   public void part2() {
      int floor = 0;
      int position = 0;

      String instructions = lines.get(0);

      for (int i = 0; i < instructions.length(); i++) {
         char instruction = instructions.charAt(i);

         switch (instruction) {
            case '(' -> floor += 1;
            case ')' -> floor -= 1;
         }
         if(floor == -1) {
            position = i + 1;
            break;
         }

      }

      System.out.println("The Santa takes " + position + " position");
   }
}
