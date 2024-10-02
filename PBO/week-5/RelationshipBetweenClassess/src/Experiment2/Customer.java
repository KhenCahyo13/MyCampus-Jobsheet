package Experiment2;

public class Customer {
    private String name;
    private Car car;
    private Driver driver;
    private int day;

    public int totalCostCalculation() {
        return car.carCostCalculation(day) + driver.driverCostCalculation(day);
    }

    public String getName() {
        return this.name;
    }

    public Car getCar() {
        return this.car;
    }

    public Driver getDriver() {
        return this.driver;
    }

    public int getDay() {
        return this.day;
    }

    public void setCar(Car car) {
        this.car = car;
    }

    public void setDay(int day) {
        this.day = day;
    }

    public void setDriver(Driver driver) {
        this.driver = driver;
    }

    public void setName(String name) {
        this.name = name;
    }
}
