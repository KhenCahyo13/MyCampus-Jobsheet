package Assignment;

public class Officer extends Person {
    private Position officerPosition;

    Officer(String id, String name, String address, String phoneNumber, String ktpNumber, Position position) {
        setPersonId(id);
        setPersonName(name);
        setPersonAddress(address);
        setPersonPhoneNumber(phoneNumber);
        setPersonKtpNumber(ktpNumber);
        this.officerPosition = position;
    }

    public void getOfficerInfo() {
        System.out.println("Officer Name: " + getPersonName());
        System.out.println("Officer Address: " + getPersonAddress());
        System.out.println("Officer Phone Number: " + getPersonPhoneNumber());
        System.out.println("Officer KTP Number: " + getPersonKtpNumber());
        System.out.println("Officer Position: " + officerPosition.getPositionName());
    }
}
