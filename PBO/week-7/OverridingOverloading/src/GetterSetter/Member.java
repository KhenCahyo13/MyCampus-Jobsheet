package GetterSetter;

public class Member {
    private String name;
    private String address;
    private float deposit;

    Member (String name, String address) {
        this.name = name;
        this.address = address;
        this.deposit = 0;
    }

    public void setName(String name) {
        this.name = name;
    }

    public void setAddress(String address) {
        this.address = address;
    }

    public void setDeposit(float deposit) {
        this.deposit = deposit;
    }

    public String getName() {
        return this.name;
    }

    public String getAddress() {
        return this.address;
    }

    public float getDeposit() {
        return this.deposit;
    }

    public void deposit(float money) {
        this.deposit += money;
    }

    public void loan(float money) {
        deposit -= money;
    }
}
