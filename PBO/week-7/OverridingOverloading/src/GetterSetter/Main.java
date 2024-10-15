package GetterSetter;

public class Main {
    public static void main(String[] args) {
        Member member1 = new Member("Ika", "Batu");
        member1.setName("Iwan");
        member1.setAddress("Malang");
        member1.deposit(1000000);
        System.out.println("Deposito: " + member1.getName() + " Rp." + member1.getDeposit());

        member1.deposit(500000);
        System.out.println("Deposito: " + member1.getName() + " Rp." + member1.getDeposit());
    }
}
