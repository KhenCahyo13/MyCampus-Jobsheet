package Task;
import java.util.Scanner;

public class MemberTest {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        Member donny = new Member("111333444", "Donny", 5000000);
        System.out.println("Member name: " + donny.getName());
        System.out.println("Loan Limit: " + donny.getLoanLimit());

        System.out.print("\nEnter amount to borrow: ");
        double borrowAmount = scanner.nextDouble();
        donny.borrow(borrowAmount);
        System.out.println("Current loan amount: " + donny.getLoanAmount());

        System.out.print("\nEnter amount to pay as installment: ");
        double installmentAmount = scanner.nextDouble();
        donny.installments(installmentAmount);
        System.out.println("Current loan amount: " + donny.getLoanAmount());

        scanner.close();
    }
}
