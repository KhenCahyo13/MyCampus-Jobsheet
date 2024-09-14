package KoperasiGetterSetter;

public class Demo {
    public static void main(String[] args) {
        Member member1 = new Member("Ika", "Batu");
        System.out.println("Deposito " + member1.getName() + " Rp. " + member1.getDeposit());

        member1.setName("Iwan");
        member1.setAddress("Malang");
        member1.setDeposit(1000000);
        System.out.println("Deposito " + member1.getName() + " Rp. " + member1.getDeposit());

        member1.loan(500000);
        System.out.println("Deposito " + member1.getName() + " Rp. " + member1.getDeposit());
    }
}
