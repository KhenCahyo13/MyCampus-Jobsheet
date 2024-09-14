package Task;

public class Member {
    private String ktpNumber;
    private String name;
    private double loanLimit;
    private double loanAmount;

    // Constructor
    public Member(String ktpNumber, String name, double loanLimit) {
        this.ktpNumber = ktpNumber;
        this.name = name;
        this.loanLimit = loanLimit;
        this.loanAmount = 0; // Initially, there is no loan amount
    }

    // Getter for name
    public String getName() {
        return name;
    }

    // Getter for loan limit
    public double getLoanLimit() {
        return loanLimit;
    }

    // Getter for loan amount
    public double getLoanAmount() {
        return loanAmount;
    }

    // Method to borrow money
    public void borrow(double amount) {
        if (amount <= loanLimit - loanAmount) {
            loanAmount += amount;
            System.out.println("Loan approved: " + amount);
        } else {
            System.out.println("Loan denied - exceed limit.");
        }
    }

    // Method to pay installments
    public void installments(double amount) {
        double minimumInstallment = 0.1 * loanAmount; // 10% of the current loan amount
        if (amount < minimumInstallment) {
            System.out.println("Sorry, installments must be at least 10% of the loan amount.");
        } else if (amount <= loanAmount) {
            loanAmount -= amount;
            System.out.println("Installment paid: " + amount);
        } else {
            System.out.println("Error: Installment exceeds the current loan amount.");
        }
    }
}