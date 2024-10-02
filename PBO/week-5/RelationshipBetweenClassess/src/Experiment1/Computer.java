package Experiment1;

public class Computer {
    private String brand;
    private Processor proc;

    Computer () {}

    Computer(String brandName, Processor proc) {
        this.brand = brandName;
        this.proc = proc;
    }

    public void info() {
        System.out.println("Computer Brand = " + brand);
        proc.info();
    }

    public void setBrand(String brand) {
        this.brand = brand;
    }

    public void setProc(Processor proc) {
        this.proc = proc;
    }
}
