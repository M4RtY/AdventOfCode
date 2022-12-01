package aoc.y2k21;

import aoc.utils.TextReader;
import java.util.List;

public class Day01 {
   private final List<Integer> lines;

   public Day01() {
      lines = new TextReader().readInteger("src/main/resources/y2k21/day01.txt");
   }

   public void run() {
      part1();
      part2();
   }

   public void part1() {
      int count = 0;

      for (int i = 1; i < lines.size(); i++) {
         if(lines.get(i) > lines.get(i - 1)) {
            count++;
         }
      }

      System.out.println("Number of larger measurements: " + count);
   }

   public void part2() {
      int count = 0;

      for (int i = 0; i < lines.size() - 3; i++) {
         int sumA = lines.get(i) + lines.get(i+1) + lines.get(i+2);
         int sumB = lines.get(i+1) + lines.get(i+2) + lines.get(i+3);

         if(sumB > sumA) {
            count++;
         }
      }

      System.out.println("Number of larger measurements: " + count);
   }

}
