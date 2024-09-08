package Assigments.GameRental;

public class Transaction {
    private String id;
    protected Member member;
    protected Employee employee;
    protected Game game;
    protected int totalPrice;

    public Transaction(String id, Member member, Employee employee, Game game, int rentalDuration) {
        this.id = id;
        this.member = member;
        this.employee = employee;
        this.game = game;
        this.countTransaction(rentalDuration);
        this.printTransaction();
    }

    public void printTransaction() {
        System.out.println("=== GAME RENTAL SYSTEM ===");
        System.out.println("========================");
        this.member.getMemberInfo();
        this.employee.getEmployeeInfo();
        this.game.getGameInfo();
        System.out.println("=== TRANSACTION INFO ===");
        System.out.println("Total Price: Rp" + this.totalPrice);
    }

    private void countTransaction(int rentalDuration) {
        this.totalPrice = this.game.getPricePerDay() * rentalDuration;
    }
}
