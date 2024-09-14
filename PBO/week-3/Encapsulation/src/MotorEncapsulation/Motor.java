package MotorEncapsulation;

public class Motor {
    private int speed = 0;
    private boolean motorOn = false;

    public void startEngine () {
        this.motorOn = true;
    }

    public void turnOffEngine () {
        this.motorOn = false;
        this.speed = 0;
    }

    public void increaseEngine () {
        if (this.motorOn) {
            if (this.speed == 100) {
                System.out.println("Maximum speed of the motor is 100!");
            } else {
                this.speed += 5;
            }
        } else {
            System.out.println("Motorcycle off");
        }
    }

    public void reduceEngine() {
        if (this.motorOn) {
            this.speed -= 5;
        } else {
            System.out.println("Motorcycle off");
        }
    }

    public void printStatus () {
        if (this.motorOn) {
            System.out.println("Motorcycle on!");
        } else {
            System.out.println("Motorcycle off!");
        }

        System.out.println("Speed: " + this.speed + "\n");
    }
}
