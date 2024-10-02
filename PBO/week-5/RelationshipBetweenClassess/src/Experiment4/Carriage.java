package Experiment4;

public class Carriage {
    private String code;
    private Seat[] seatArray;
    private Passenger passenger;

    Carriage(String code, int amount) {
        this.code = code;
        this.seatArray = new Seat[amount];
        this.seatInit();
    }

    private void seatInit() {
        for (int i = 0; i < seatArray.length; i++) {
            this.seatArray[i] = new Seat(String.valueOf(i + 1));
        }
    }

    public String info() {
        String info = "";
        info += "Code: " + code + "\n";
        for (Seat seat : seatArray) {
            info += seat.info();
        }
        return info;
    }

    public void setPassenger(Passenger passenger, int number) {
        Seat seat = this.seatArray[number - 1];

        if (seat.getPassenger() != null) {
            System.out.println("Seat number " + number + " is already occupied and cannot be occupied by passengers with name " + passenger.getName());
        } else {
            seat.setPassenger(passenger);
            System.out.println("Pessenger with name " + passenger.getName() + " is already occupying in seat number " + number);
        }
    }
}
