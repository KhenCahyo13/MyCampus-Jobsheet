package Assigments.GameRental;

public class Member extends Person {
    protected String type;
    protected int duration;

    public Member(String id, String name, String address, String phoneNumber, String type, int duration) {
        this.setId(id);
        this.name = name;
        this.address = address;
        this.phoneNumber = phoneNumber;
        this.type = type;
        this.duration = duration;
    }

    public void getMemberInfo() {
        System.out.println("=== MEMBER INFO ===");
        System.out.println("Name: " + this.name);
        System.out.println("Address: " + this.address);
        System.out.println("Phone Number: " + this.phoneNumber);
        System.out.println("Member Type: " + this.type);
        System.out.println("Member Duration: " + this.duration + " days");
    }
}
