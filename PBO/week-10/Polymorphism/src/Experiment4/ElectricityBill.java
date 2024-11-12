package Experiment4;

public class ElectricityBill implements Payable {
    private int kwh;
    private String category;

    public ElectricityBill(int kwh, String category) {
        this.kwh = kwh;
        this.category = category;
    }

    public int getKwh() {
        return this.kwh;
    }

    public void setKwh(int kwh) {
        this.kwh = kwh;
    }

    public String getCategory() {
        return this.category;
    }

    public void setCategory(String category) {
        this.category = category;
    }

    @Override
    public int getPaymentAmount() {
        return 0;
    }

    public int getBasePrice() {
        int basePrice = 0;
        switch (this.category) {
            case "R-1":
                basePrice = 100;
                break;
            case "R-2":
                basePrice = 200;
                break;
        }

        return  basePrice;
    }

    public String getBillInfo() {
        return "KWH = " + this.kwh + "\n" + "Category = " + this.category + "(" + this.getBasePrice() + "per kwh)";
    }
}
