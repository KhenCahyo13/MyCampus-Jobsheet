package Encapsulation;

public class Main {
    public static void main(String[] args) {
        Motor motor = new Motor();
        motor.statusPrint();
        motor.speed = 50;
        motor.statusPrint();
    }
}