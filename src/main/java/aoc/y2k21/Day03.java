package aoc.y2k21;

import aoc.utils.TextReader;

import java.util.*;

public class Day03 {
   private final List<String> lines;

   public Day03() {
      lines = new TextReader().readString("src/main/resources/y2k21/day03.txt");
   }

   public void run() {
      part1();
      part2();
   }

   public void part1() {

      String gammaRate = "";
      String epsilonRate = "";
      int powerConsumption;

      for (int i = 0; i < 12; i++) {

         int zeros = 0;
         int ones = 0;

         for (String line : lines) {

            if (line.charAt(i) == '0') {
               zeros += 1;
            } else {
               ones += 1;
            }
         }

         if(zeros > ones) {
            gammaRate += "0";
            epsilonRate += "1";
         } else {
            gammaRate += "1";
            epsilonRate += "0";
         }

      }

      powerConsumption = Integer.parseInt(gammaRate, 2)  * Integer.parseInt(epsilonRate, 2);

      System.out.println("Gamma rate is: " + gammaRate);
      System.out.println("Epsilon rate is: " + epsilonRate);
      System.out.println("Power consumption is: " + powerConsumption);
   }

   public void part2() {

      System.out.println("The life support rating is: " + Integer.parseInt(findNumber(true), 2) * Integer.parseInt(findNumber(false), 2));

   }

   private String findNumber(boolean positive) {
      List<String> numbers = new ArrayList<>(lines);

      for (int i = 0; i < lines.get(0).length() && numbers.size() > 1; i++) {

         int count = 0;

         for(String number: numbers) {
            count += number.charAt(i) == '1' ? 1 : -1;
         }

         char target = positive == count >= 0 ? '1' : '0';
         int targetI = i;

         numbers.removeIf(s -> s.charAt(targetI) != target);

      }

      return numbers.get(0);
   }

}
