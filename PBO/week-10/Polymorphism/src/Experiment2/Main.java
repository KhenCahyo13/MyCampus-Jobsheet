package Experiment2;

public class Main {
    public static void main (String args[]) {
        PermanentEmployee pEmp = new PermanentEmployee("Dedik", 500);

        Employee e;
        e = pEmp;

        System.out.println("" + e.getEmployeeInfo());
        System.out.println("----------------------");
        System.out.println("" + pEmp.getEmployeeInfo());
    }
}
