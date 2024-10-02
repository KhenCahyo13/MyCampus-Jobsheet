package Experiment1;

public class Main {
    public static void main (String[] args) {
        Processor p = new Processor("Intel i5", 3);
        Computer L = new Computer("Thinkpad", p);
        L.info();

        System.out.println("==================================");

        Processor p1 = new Processor();
        p1.setBrand("Intel I5");
        p1.setCache(4);
        Computer c1 = new Computer();
        c1.setBrand("Thinkpad");
        c1.setProc(p1);
        c1.info();
    }
}