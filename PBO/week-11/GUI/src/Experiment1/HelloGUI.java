package Experiment1;

import javax.swing.*;

public class HelloGUI {
    public static void main(String[] args) {
        JFrame frame;
        frame = new JFrame("Hello GUI Frame");
        frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        frame.setSize(600, 300);
        frame.setLocation(200, 200);
        frame.setLocationRelativeTo(null);
        frame.setVisible(true);
    }
}
