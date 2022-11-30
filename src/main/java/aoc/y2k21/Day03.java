package aoc.y2k21;

import aoc.utils.TextReader;

import java.util.List;

public class Day03 {
   private final List<String> lines;

   public Day03() {
      lines = new TextReader().readString("src/main/resources/day03.txt");
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
            int number = Integer.parseInt(Character.toString(line.charAt(i)));

            if (number == 0) {
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

   }

}
