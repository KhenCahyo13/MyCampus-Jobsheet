package Assignment;

public class Fan {
    protected String merk;
    protected int speedLevel;

    public void setMerk(String merkValue) {
        merk = merkValue;
    }
    public void setSpeedLevel(int speedLevelValue) {
        speedLevel = speedLevelValue;
    }
    public void faninfo() {
        System.out.println("Fan merk: " + merk);
        System.out.println("Fan speed level: " + speedLevel);
    }
}
