package Experiment2;

import javax.swing.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

public class InputForm extends JFrame {
    private static final int FRAME_WIDTH = 600;
    private static final int FRAME_HEIGHT = 200;
    private JLabel aLabel;
    private JLabel bLabel;
    private JLabel multiplyLabel;
    private JLabel sumLabel;
    private JTextField aField;
    private JTextField bField;
    private JButton multiplyButton;
    private JButton sumButton;
    private JPanel panel;

    public InputForm() {
        createTextField();
        createButton();
        createPanel();
        setSize(FRAME_WIDTH, FRAME_HEIGHT);
    }

    private void createTextField() {
        aLabel = new JLabel("Nilai A: ");
        bLabel = new JLabel("Nilai B: ");
        multiplyLabel = new JLabel("Hasil Perkalian: ");
        sumLabel = new JLabel("Hasil Penjumlahan: ");

        final int FIELD_WIDTH = 10;
        aField = new JTextField(FIELD_WIDTH);
        aField.setText("0");
        bField = new JTextField(FIELD_WIDTH);
        bField.setText("0");
    }

    private void createButton() {
        multiplyButton = new JButton("Multiply");
        sumButton = new JButton("Sum");

        class MultiplyListener implements ActionListener {
            @Override
            public void actionPerformed(ActionEvent e) {
                int a = Integer.valueOf(aField.getText());
                int b = Integer.valueOf(bField.getText());
                int multiplyResult = a * b;
                multiplyLabel.setText("Hasil Perkalian: " + multiplyResult);
            }
        }

        class SumListener implements ActionListener {
            @Override
            public void actionPerformed(ActionEvent e) {
                int a = Integer.valueOf(aField.getText());
                int b = Integer.valueOf(bField.getText());
                int sumResult = a + b;
                sumLabel.setText("Hasil Penjumlahan: " + sumResult);
            }
        }

        ActionListener multiplyListener = new MultiplyListener();
        ActionListener sumListener = new SumListener();
        multiplyButton.addActionListener(multiplyListener);
        sumButton.addActionListener(sumListener);
    }

    private void createPanel() {
        panel = new JPanel();
        panel.add(aLabel);
        panel.add(aField);
        panel.add(bLabel);
        panel.add(bField);
        panel.add(multiplyButton);
        panel.add(multiplyLabel);
        panel.add(sumButton);
        panel.add(sumLabel);
        add(panel);
    }
}
