package MotorEncapsulation;

public class MotorDemo {
    public static void main(String[] args) {
        Motor motor = new Motor();
        motor.printStatus();
        motor.increaseEngine();

        motor.startEngine();
        motor.printStatus();

        motor.increaseEngine();
        motor.printStatus();

        motor.increaseEngine();
        motor.printStatus();

        motor.increaseEngine();
        motor.printStatus();

        motor.turnOffEngine();
        motor.printStatus();
    }
}
