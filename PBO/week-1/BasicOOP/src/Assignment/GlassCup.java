package Assignment;

public class GlassCup extends Cup {
    protected String merk;
    protected String color;

    public void setMerk(String merkValue) {
        merk = merkValue;
    }
    public void setColor(String colorValue) {
        color = colorValue;
    }
    public void glassCupInfo() {
        System.out.println("Cup type: " + type);
        System.out.println("Cup diameter: " + diameter);
        System.out.println("Glass cup merk: " + merk);
        System.out.println("Glass cup color: " + color);
    }
}
