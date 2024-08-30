package Assignment;

public class Bottle {
    protected String name;
    protected int diameter;

    public void setName(String nameValue) {
        name = nameValue;
    }
    public void setDiameter(int diameterValue) {
        diameter = diameterValue;
    }
    public void bottleInfo() {
        System.out.println("Bottle name: " + name);
        System.out.println("Bottle diameter: " + name);
    }
}
