package Experimental3;

public class Barang {
    public String namaBrg;
    public String jenisBrg;
    public int stok;

    public void tampilBarang() {
        System.out.println("Nama barang: " + this.namaBrg);
        System.out.println("Jenis barang: " + this.jenisBrg);
        System.out.println("Stok: " + this.stok);
    }

    public int tambahStok(int brgMasuk) {
        int stokBaru = brgMasuk + this.stok;
        return stokBaru;
    }
}
