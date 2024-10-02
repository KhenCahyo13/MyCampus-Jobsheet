package Experiment3;

public class MainQuestion {
    public static void main(String[] args) {
        Employee machinist = new Employee("1234", "Spongebob Squarepants");
        Employee asisstant = new Employee("123456", "Patrick Star");
        Railway railway = new Railway("Gaya Baru", "Bisnis", machinist, asisstant);

        System.out.println(railway.info());
    }
}
