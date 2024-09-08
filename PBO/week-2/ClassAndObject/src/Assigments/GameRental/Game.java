package Assigments.GameRental;

public class Game {
    private String id;
    protected String name;
    protected int pricePerDay;

    public Game(String id, String name, int pricePerDay) {
        this.id = id;
        this.name = name;
        this.pricePerDay = pricePerDay;
    }

    public int getPricePerDay() {
        return this.pricePerDay;
    }

    public void getGameInfo() {
        System.out.println("=== GAME INFO ===");
        System.out.println("Name: " + this.name);
        System.out.println("Price per day: Rp" + this.pricePerDay);
    }
}
