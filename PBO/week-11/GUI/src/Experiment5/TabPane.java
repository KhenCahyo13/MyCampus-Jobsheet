package Experiment5;

import javax.swing.*;
import javax.swing.table.DefaultTableModel;
import java.awt.*;

public class TabPane extends JFrame {
    private JTabbedPane mainTabPane;
    private JTree tree1;
    private JPanel page1Tab;
    private JPanel page2Tab;
    private JPanel page3Tab;
    private JTable table1;
    private JScrollPane page1Table;
    private JTable table2;
    private JPanel rootPanel;

    public TabPane() {
        String[] page1TableColumnHeaders = { "No", "Name" };
        String[] page2TableColumnHeaders = { "No", "Name", "Address", "Date of Birth" };

        DefaultTableModel page1TableModel = new DefaultTableModel(page1TableColumnHeaders, 0);
        this.table1.setModel(page1TableModel);
        DefaultTableModel page2TableModel = new DefaultTableModel(page2TableColumnHeaders, 0);
        this.table2.setModel(page2TableModel);
    }

    public static void main(String[] args) {
        EventQueue.invokeLater(() -> {
            TabPane tabPane = new TabPane();
            tabPane.setContentPane(tabPane.rootPanel);
            tabPane.setTitle("Tab Pane Example");
            tabPane.setSize(500, 400);
            tabPane.setLocationRelativeTo(null);
            tabPane.setVisible(true);
            tabPane.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        });
    }
}
