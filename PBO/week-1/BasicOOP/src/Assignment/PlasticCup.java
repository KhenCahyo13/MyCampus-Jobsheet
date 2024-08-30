package Assignment;

public class PlasticCup extends Cup {
    protected String merk;
    protected String color;

    public void setMerk(String merkValue) {
        merk = merkValue;
    }
    public void setColor(String colorValue) {
        color = colorValue;
    }
    public void plasticCupInfo() {
        System.out.println("Cup type: " + type);
        System.out.println("Cup diameter: " + diameter);
        System.out.println("Plastic cup merk: " + merk);
        System.out.println("Plastic cup color: " + color);
    }
}
