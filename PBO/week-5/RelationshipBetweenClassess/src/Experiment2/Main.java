package Experiment2;

public class Main {
    public static void main(String[] args) {
        Car c = new Car();
        c.setBrand("Avanza");
        c.setCost(350000);
        Driver d = new Driver();
        d.setName("John Doe");
        d.setCost(200000);
        Customer cust = new Customer();
        cust.setName("Jane Doe");
        cust.setCar(c);
        cust.setDriver(d);
        cust.setDay(2);
        System.out.println("Total cost = " +
        cust.totalCostCalculation());
        System.out.println(cust.getCar().getBrand());
    }
}
