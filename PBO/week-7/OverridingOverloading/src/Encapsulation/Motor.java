package Encapsulation;

public class Motor {
    public int speed = 0;
    public boolean motorOn = false;

    public void statusPrint() {
        if (this.motorOn == true) {
            System.out.println("Motorcycle On");
        } else {
            System.out.println("Motorcycle Off");
        }

        System.out.println("Speed: " + this.speed + "\n");
    }
}
