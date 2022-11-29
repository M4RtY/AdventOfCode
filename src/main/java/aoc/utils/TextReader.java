package aoc.utils;

import java.io.BufferedReader;
import java.io.IOException;
import java.util.ArrayList;
import java.util.List;

public class TextReader {
    public List<String> readString(String input) {

        List<String> lines = new ArrayList<>();

        try {
            BufferedReader reader = new BufferedReader(new java.io.FileReader(input));
            String line;

            while((line = reader.readLine()) != null) {
                lines.add(line);
            }

            reader.close();

        } catch (IOException e) {
            System.out.println("Error: " + e.getMessage());
        }

        return lines;

    }

    public List<Integer> readInteger(String input) {

        List<Integer> lines = new ArrayList<>();

        try {
            BufferedReader reader = new BufferedReader(new java.io.FileReader(input));
            String line;

            while((line = reader.readLine()) != null) {
                lines.add(Integer.parseInt(line));
            }

            reader.close();

        } catch (IOException e) {
            System.out.println("Error: " + e.getMessage());
        }

        return lines;

    }

}
