package Experiment3;

import javax.swing.*;

public class Layout {
    public static void main(String[] args) {
        JFrame frame = new Border();
        frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        frame.setVisible(true);

        JFrame frame2 = new Grid();
        frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        frame2.setVisible(true);

        JFrame frame3 = new Box();
        frame3.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        frame3.setVisible(true);
    }
}
