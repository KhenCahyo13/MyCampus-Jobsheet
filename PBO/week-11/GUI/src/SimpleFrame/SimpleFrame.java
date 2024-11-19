package SimpleFrame;

import javax.swing.*;

public class SimpleFrame extends JFrame {
    public SimpleFrame() {
        super("Frame Title");
        setSize(450, 200);
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        setVisible(true);
    }
}
