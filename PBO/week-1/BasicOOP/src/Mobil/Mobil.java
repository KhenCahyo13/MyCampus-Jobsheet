package Mobil;

public class Mobil {
    protected String warna, merk;

    public void setWarna (String valueWarna) {
        warna = valueWarna;
    }
    public void setMerk (String valueMerk) {
        merk = valueMerk;
    }
    public void infoMobil () {
        System.out.println("Warna mobil: " + warna);
        System.out.println("Merk mobil: " + merk);
    }
}