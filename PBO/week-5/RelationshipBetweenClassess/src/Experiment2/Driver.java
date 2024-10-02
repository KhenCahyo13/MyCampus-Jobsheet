package Experiment2;

public class Driver {
    private String name;
    private int cost;

    public int driverCostCalculation(int days) {
        return cost * days;
    }

    public void setName(String name) {
        this.name = name;
    }

    public void setCost(int cost) {
        this.cost = cost;
    }
}
