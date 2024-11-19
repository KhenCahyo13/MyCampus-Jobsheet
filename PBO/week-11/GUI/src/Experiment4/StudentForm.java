package Experiment4;

import javax.swing.*;
import javax.swing.table.DefaultTableModel;
import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

public class StudentForm extends JFrame {
    private JLabel nameLabel;
    private JTextField nameField;
    private JLabel nimLabel;
    private JTextField nimField;
    private JLabel genderLabel;
    private JRadioButton maleRadio;
    private JRadioButton femaleRadio;
    private JLabel courseLabel;
    private JCheckBox stCheckbox;
    private JCheckBox pboCheckbox;
    private JLabel departementLabel;
    private JComboBox departementComboBox;
    private JLabel semesterLabel;
    private JComboBox semesterComboBox;
    private JButton resetButton;
    private JButton createButton;
    private JLabel title;
    private JPanel mainPanel;
    private JSeparator titleFormSeparator;
    private JTable studentsTable;
    private JLabel addressLabel;
    private JTextField addressField;

    public StudentForm() {
        String[] studentsTableColumnHeaders = {"No", "Name", "Address", "NIM", "Gender", "Course", "Departement", "Semester"};
        DefaultTableModel studentTableModel = new DefaultTableModel(studentsTableColumnHeaders, 0);
        this.studentsTable.setModel(studentTableModel);

        createButton.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                submitStudent();
            }
        });
        resetButton.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                clearInput();
            }
        });
    }

    public static void main(String[] args) {
        createFrame();
    }

    private static void createFrame() {
        EventQueue.invokeLater(() -> {
            StudentForm form = new StudentForm();
            form.setContentPane(form.mainPanel);
            form.setTitle("Student Form");
            form.setSize(500, 400);
            form.setLocationRelativeTo(null);
            form.setVisible(true);
            form.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        });
    }

    private void submitStudent() {
        String name = this.nameField.getText();
        String address = this.addressField.getText();
        String nim = this.nimField.getText();
        String gender = "";
        String course = "";
        String departement = this.departementComboBox.getSelectedItem().toString();
        String semester = this.semesterComboBox.getSelectedItem().toString();

        if (this.maleRadio.isSelected()) {
            gender = this.maleRadio.getText();
        }

        if (this.femaleRadio.isSelected()) {
            gender = this.femaleRadio.getText();
        }

        if (this.stCheckbox.isSelected()) {
            course = this.stCheckbox.getText();
        }

        if (this.pboCheckbox.isSelected()) {
            course = this.pboCheckbox.getText();
        }

        DefaultTableModel studentsTableModel = (DefaultTableModel) this.studentsTable.getModel();
        int nextRowNumber = studentsTableModel.getRowCount() + 1;
        studentsTableModel.addRow(new Object[] {
                nextRowNumber,
                name,
                address,
                nim,
                gender,
                course,
                departement,
                semester
        });
        JOptionPane.showMessageDialog(createButton, "Successfully create student data");
        clearInput();
    }

    private void clearInput() {
        this.nameField.setText("");
        this.nimField.setText("");
        this.addressField.setText("");
        this.maleRadio.setSelected(false);
        this.femaleRadio.setSelected(false);
        this.stCheckbox.setSelected(false);
        this.pboCheckbox.setSelected(false);
        this.departementComboBox.setSelectedIndex(0);
        this.semesterComboBox.setSelectedIndex(0);
    }
}
