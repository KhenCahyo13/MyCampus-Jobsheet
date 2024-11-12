package Assigment;

public class Barrier implements Destroyable {
    private int strength;

    Barrier(int strength) {
        this.strength = strength;
    }

    public void setStrength(int strength) {
        this.strength = strength;
    }

    public int getStrength() {
        return this.strength;
    }

    public String getBarrierInfo() {
        String info = "Barrier Strength = " + this.strength + "\n";

        return info;
    }

    @Override
    public void destroyed() {
        this.strength -= this.strength * 0.09;
    }
}
