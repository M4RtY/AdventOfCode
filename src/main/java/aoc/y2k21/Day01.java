package aoc.y2k21;

import aoc.utils.TextReader;
import java.util.List;

public class Day01 {
   private final List<String> lines;

   public Day01() {
      lines = new TextReader().read("src/main/resources/day01.txt");
   }

   public void run() {
      System.out.println(lines);
   }

}
