package Assigments.Exercise;

public class Lingkaran {
    public double phi = Math.PI;
    public double r;

    public Lingkaran(double r) {
        this.r = r;
    }

    public double hitungLuas() {
        return phi * r * r;
    }

    public double hitungKeliling() {
        return 2 * phi * r;
    }

    public static void main(String[] args) {
        Lingkaran lingkaran = new Lingkaran(7);

        System.out.println("Luas Lingkaran: " + lingkaran.hitungLuas());
        System.out.println("Keliling Lingkaran: " + lingkaran.hitungKeliling());
    }
}
