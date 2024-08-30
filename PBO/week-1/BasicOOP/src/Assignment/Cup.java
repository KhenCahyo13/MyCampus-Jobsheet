package Assignment;

public class Cup {
    protected String type;
    protected int diameter;

    public void setType(String typeValue) {
        type = typeValue;
    }
    public void setDiameter(int diameterValue) {
        diameter = diameterValue;
    }
    public void cupInfo() {
        System.out.println("Cup type: " + type);
        System.out.println("Cup diameter: " + diameter);
    }
}
