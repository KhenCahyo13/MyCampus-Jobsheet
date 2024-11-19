package Assigment;

import javax.swing.*;
import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

public class Calculator extends JFrame {
    private JPanel mainPanel;
    private JButton sevenButton;
    private JButton eightButton;
    private JButton nineButton;
    private JButton dividedButton;
    private JButton fourButton;
    private JButton fiveButton;
    private JButton sixButton;
    private JButton multiplyButton;
    private JButton oneButton;
    private JButton twoButton;
    private JButton threeButton;
    private JButton minusButton;
    private JButton zeroButton;
    private JButton pointButton;
    private JButton plusButton;
    private JButton countButton;
    private JTextField resultsField;
    private JLabel title;
    private StringBuilder currentInput;
    private String lastOperator = "";
    private int result = 0;

    public Calculator() {
        currentInput = new StringBuilder();

        // Angka
        addNumberListener(sevenButton, "7");
        addNumberListener(eightButton, "8");
        addNumberListener(nineButton, "9");
        addNumberListener(fourButton, "4");
        addNumberListener(fiveButton, "5");
        addNumberListener(sixButton, "6");
        addNumberListener(oneButton, "1");
        addNumberListener(twoButton, "2");
        addNumberListener(threeButton, "3");
        addNumberListener(zeroButton, "0");
        addNumberListener(pointButton, ".");

        // Operator
        addOperatorListener(plusButton, "+");
        addOperatorListener(minusButton, "-");
        addOperatorListener(multiplyButton, "*");
        addOperatorListener(dividedButton, "/");

        countButton.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                calculate();
            }
        });
    }

    public static void main(String[] args) {
        EventQueue.invokeLater(() -> {
            Calculator calculator = new Calculator();
            calculator.setContentPane(calculator.mainPanel);
            calculator.setTitle("Java Swing Calculator");
            calculator.setSize(500, 400);
            calculator.setLocationRelativeTo(null);
            calculator.setVisible(true);
            calculator.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        });
    }

    private void addNumberListener(JButton button, String value) {
        button.addActionListener(e -> {
            currentInput.append(value);
            resultsField.setText(currentInput.toString());
        });
    }

    private void addOperatorListener(JButton button, String operator) {
        button.addActionListener(e -> {
            if (currentInput.length() > 0) {
                if (!lastOperator.isEmpty()) {
                    calculatePartial();
                } else {
                    result = Integer.parseInt(currentInput.toString());
                }
            }
            lastOperator = operator;
            currentInput.setLength(0);
        });
    }

    private void calculate() {
        if (currentInput.length() > 0 && !lastOperator.isEmpty()) {
            calculatePartial();
        }
        resultsField.setText(String.valueOf(result)); // Tampilkan hasil akhir
        lastOperator = "";
        currentInput.setLength(0);
    }

    private void calculatePartial() {
        double currentNumber = Double.parseDouble(currentInput.toString());
        switch (lastOperator) {
            case "+" -> result += currentNumber;
            case "-" -> result -= currentNumber;
            case "*" -> result *= currentNumber;
            case "/" -> result /= currentNumber;
        }
    }
}
