package Experiment2;

public class Car {
    private String brand;
    private int cost;

    Car() {}

    public int carCostCalculation(int days) {
        return this.cost * days;
    }

    public String getBrand() {
        return this.brand;
    }

    public int getCost() {
        return this.cost;
    }

    public void setBrand(String brand) {
        this.brand = brand;
    }

    public void setCost(int costs) {
        this.cost = costs;
    }
}
