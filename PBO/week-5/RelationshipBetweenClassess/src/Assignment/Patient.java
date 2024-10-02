package Assignment;

public class Patient extends Person {
    Patient(String id, String name, String address, String phoneNumber, String ktpNumber) {
        setPersonId(id);
        setPersonName(name);
        setPersonAddress(address);
        setPersonPhoneNumber(phoneNumber);
        setPersonKtpNumber(ktpNumber);
    }

    public void getPatientInfo() {
        System.out.println("Patient Name: " + getPersonName());
        System.out.println("Patient Address: " + getPersonAddress());
        System.out.println("Patient Phone Number: " + getPersonPhoneNumber());
        System.out.println("Patient KTP Number: " + getPersonKtpNumber());
    }
}
