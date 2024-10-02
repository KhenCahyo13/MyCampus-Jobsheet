package Assignment;

public class Person {
    private String personId;
    private String personName;
    private String personAddress;
    private String personPhoneNumber;
    private String personKtpNumber;

    // Getters
    public String getPersonName() {
        return this.personName;
    }

    public String getPersonAddress() {
        return this.personAddress;
    }

    public String getPersonPhoneNumber() {
        return this.personPhoneNumber;
    }

    public String getPersonKtpNumber() {
        return this.personKtpNumber;
    }

    // Setters
    public void setPersonId(String personId) {
        this.personId = personId;
    }

    public void setPersonName(String personName) {
        this.personName = personName;
    }

    public void setPersonAddress(String personAddress) {
        this.personAddress = personAddress;
    }

    public void setPersonPhoneNumber(String personPhoneNumber) {
        this.personPhoneNumber = personPhoneNumber;
    }

    public void setPersonKtpNumber(String personKtpNumber) {
        this.personKtpNumber = personKtpNumber;
    }
}
