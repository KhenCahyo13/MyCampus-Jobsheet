package Assigments.GameRental;

public class Employee extends Person {
    protected int salary;
    protected String hireDate;

    public Employee(String id, String name, String address, String phoneNumber, int salary, String hireDate) {
        this.setId(id);
        this.name = name;
        this.address = address;
        this.phoneNumber = phoneNumber;
        this.salary = salary;
        this.hireDate = hireDate;
    }

    public void getEmployeeInfo() {
        System.out.println("=== EMPLOYEE INFO ===");
        System.out.println("Name: " + this.name);
        System.out.println("Hire Date: " + this.hireDate);
        System.out.println("Address: " + this.address);
        System.out.println("Phone Number: " + this.phoneNumber);
        System.out.println("Salary: Rp" + this.salary);
    }
}
