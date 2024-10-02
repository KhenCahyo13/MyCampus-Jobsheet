package Experiment4;

public class Main {
    public static void main(String[] args) {
        Passenger p = new Passenger("12345", "Mr. Krab");
        Carriage carriage = new Carriage("A", 10);
        carriage.setPassenger(p, 1);

        Passenger budi = new Passenger("123123123", "Budi");
        carriage.setPassenger(budi, 1);

        System.out.println(carriage.info());
    }
}