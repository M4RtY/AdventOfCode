package aoc.utils;

import java.io.BufferedReader;
import java.io.IOException;
import java.util.ArrayList;
import java.util.List;

public class TextReader {
    public List<String> read(String input) {

        List<String> lines = new ArrayList<String>();

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

}
