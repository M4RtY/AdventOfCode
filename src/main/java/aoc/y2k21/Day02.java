package aoc.y2k21;

import aoc.utils.TextReader;

import java.util.List;

public class Day02 {
   private final List<String> lines;

   public Day02() {
      lines = new TextReader().readString("src/main/resources/y2k21/day02.txt");
   }

   public void run() {
      part1();
      part2();
   }

   public void part1() {
      int positionX = 0;
      int positionY = 0;

      for (String line : lines) {
         String command = line.split(" ")[0];
         int position = Integer.parseInt(line.split(" ")[1]);

         switch (command) {
            case "forward" -> positionX += position;
            case "down" -> positionY += position;
            case "up" -> positionY -= position;
         }
      }

      System.out.println("Multiplication of X and Y position: " + positionX * positionY);

   }

   public void part2() {
      int positionX = 0;
      int positionY = 0;
      int aim = 0;

      for (String line : lines) {
         String command = line.split(" ")[0];
         int position = Integer.parseInt(line.split(" ")[1]);

         switch (command) {
            case "down" -> aim += position;
            case "up" -> aim -= position;
            case "forward" -> {
               positionX += position;
               positionY += aim * position;
            }

         }
      }

      System.out.println("Multiplication of X and Y position: " + positionX * positionY);
   }

}
