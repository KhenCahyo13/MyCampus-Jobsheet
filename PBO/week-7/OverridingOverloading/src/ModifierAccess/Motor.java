package ModifierAccess;

public class Motor {
    private int speed = 0;
    private boolean motorOn = false;

    public void startEngine() {
        this.motorOn = true;
    }

    public void turnOffEngine() {
        this.motorOn = false;
        this.speed = 0;
    }

    public void increaseEngine() {
        if (this.motorOn == true) {
            if (this.speed <= 100) {
                System.out.println("Maximum motorcycle speed is 100");
            } else {
                this.speed += 5;
            }
        } else {
            System.out.println("Motorcycle Off");
        }
    }

    public void reduceEngine() {
        if (this.motorOn == true) {
            this.speed -= 5;
        } else {
            System.out.println("Motorcycle Off");
        }
    }

    public void statusPrint() {
        if (this.motorOn == true) {
            System.out.println("Motorcycle On");
        } else {
            System.out.println("Motorcycle Off");
        }

        System.out.println("Speed: " + this.speed + "\n");
    }
}
