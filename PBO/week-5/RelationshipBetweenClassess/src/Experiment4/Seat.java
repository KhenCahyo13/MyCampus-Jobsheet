package Experiment4;

public class Seat {
    private Passenger passenger;
    private String number;
    private int[] arraySeat;

    Seat(String number) {
        this.number = number;
    }

    public String info() {
        String info = "";
        info += "Number: " + number + "\n";
        if (this.passenger != null) {
            info += "Passenger: " + passenger.info() + "\n";
        }
        return info;
    }

    public void setPassenger(Passenger passenger) {
        this.passenger = passenger;
    }

    public Passenger getPassenger() {
        return this.passenger;
    }
}
