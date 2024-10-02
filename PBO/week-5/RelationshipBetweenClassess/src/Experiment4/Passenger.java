package Experiment4;

public class Passenger {
    private String identityCard;
    private String name;

    Passenger(String identityCard, String name) {
        this.identityCard = identityCard;
        this.name = name;
    }

    public String info() {
        String info = "";
        info += "Identity Card: " + identityCard + "\n";
        info += "Name: " + name + "\n";
        return info;
    }

    public String getName() {
        return this.name;
    }
}
