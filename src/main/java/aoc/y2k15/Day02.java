package aoc.y2k15;

import aoc.utils.TextReader;

import java.util.Arrays;
import java.util.List;

public class Day02 {
   private final List<String> dimensions;

   public Day02() {
      dimensions = new TextReader().readString("src/main/resources/y2k15/day02.txt");
   }

   public void run() {
      part1();
      part2();
   }

   public void part1() {
      int l, w, h;
      int smallest, surface = 0;

      for (String dimension : dimensions) {
         int[] dimensionNumbers = Arrays.stream(Arrays.stream(dimension.split("x")).mapToInt(Integer::parseInt).toArray()).toArray();

         l = dimensionNumbers[0];
         w = dimensionNumbers[1];
         h = dimensionNumbers[2];

         int[] sides = {l*w, w*h, h*l};
         Arrays.sort(sides);

         smallest = sides[0];

         surface += (2*l*w + 2*w*h + 2*h*l) + smallest;
      }

      System.out.println("The total square feet of wrapping paper is " + surface);
   }

   public void part2() {
      int l, w, h;
      int ribbonLength = 0;

      for (String dimension : dimensions) {
         int[] dimensionNumbers = Arrays.stream(Arrays.stream(dimension.split("x")).mapToInt(Integer::parseInt).toArray()).toArray();
         Arrays.sort(dimensionNumbers);

         l = dimensionNumbers[0];
         w = dimensionNumbers[1];
         h = dimensionNumbers[2];

         ribbonLength += (2*l + 2*w) + (l*w*h);
      }

      System.out.println("The total feet of ribbon is " + ribbonLength);
   }
}
