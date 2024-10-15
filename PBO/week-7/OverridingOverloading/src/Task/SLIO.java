package Task;

public class SLIO {
    private String ktpNumber;
    private String name;
    private float loanLimit;
    private float loanAmount;

    SLIO(String ktpNumber, String name, float loanLimit) {
        this.ktpNumber = ktpNumber;
        this.name = name;
        this.loanLimit = loanLimit;
    }

    public String getName() {
        return this.name;
    }

    public float getLoanLimit() {
        return this.loanLimit;
    }

    public float getLoanAmount() {
        return this.loanAmount;
    }

    public void borrow(float amount) {
        if (amount > this.loanLimit) {
            System.out.println("The requested loan is greater than the loan limit.");
        } else {
            this.loanAmount += amount;
        }
    }

    public void installments(float amount) {
        float minInstallment = this.loanAmount * 0.10f;

        if (amount > this.loanAmount) {
            System.out.println("Your repayment amount is greater than your total loan.");
        } else if (amount < minInstallment) {
            System.out.println("Sorry, installments must be at least 10% of the loan amount.");
        } else {
            this.loanAmount -= amount;
            System.out.println("Installment accepted. Remaining loan amount: Rp " + this.loanAmount);
        }
    }
}
