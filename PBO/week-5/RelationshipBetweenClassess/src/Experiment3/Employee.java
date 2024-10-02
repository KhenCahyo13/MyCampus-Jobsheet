package Experiment3;

public class Employee {
    private String identityNumber;
    private String name;

    Employee () {}

    Employee (String identityNumber, String name) {
        this.identityNumber = identityNumber;
        this.name = name;
    }

    public String info() {
        String info = "";
        info += "Identity Number: " + this.identityNumber + "\n";
        info += "Name: " + this.name + "\n";
        return info;
    }

    public void setName(String name) {
        this.name = name;
    }

    public void setIdentityNumber(String identityNumber) {
        this.identityNumber = identityNumber;
    }

    public String getName() {
        return this.name;
    }

    public String getIdentityNumber() {
        return this.identityNumber;
    }
}
