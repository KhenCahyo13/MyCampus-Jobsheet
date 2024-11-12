package Experiment4;

public class Owner {
    public void pay(Payable p) {
        System.out.println("Total Payment = " + p.getPaymentAmount());

        if (p instanceof ElectricityBill) {
            ElectricityBill eBill = (ElectricityBill) p;
            System.out.println("" + eBill.getBillInfo());
        } else if (p instanceof PermanentEmployee) {
            PermanentEmployee pEmp = (PermanentEmployee) p;
            pEmp.getEmployeeInfo();
            System.out.println("" + pEmp.getEmployeeInfo());
        }
    }

    public void showMyEmployee(Employee e) {
        System.out.println("" + e.getEmployeeInfo());

        if (e instanceof PermanentEmployee) {
            System.out.println("You have to pay her/him monthly!!");
        } else {
            System.out.println("No need to pay her/him");
        }
    }
}
