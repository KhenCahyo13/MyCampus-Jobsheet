package Assigments.Exercise;

public class Barang {
    public String kode;
    public String namaBarang;
    public int hargaDasar;
    public float diskon;

    public Barang(String kode, String namaBarang, int hargaDasar, float diskon) {
        this.kode = kode;
        this.namaBarang = namaBarang;
        this.hargaDasar = hargaDasar;
        this.diskon = diskon;
    }

    public int hitungHargaJual() {
        return (int) (hargaDasar - (diskon * hargaDasar));
    }

    public void tampilData() {
        System.out.println("=== INFORMASI BARANG ===");
        System.out.println("Kode: " + this.kode);
        System.out.println("Nama Barang: " + this.namaBarang);
        System.out.println("Harga Dasar: Rp" + this.hargaDasar);
        System.out.println("Diskon: " + this.diskon + "%");
        System.out.println("Harga Jual: Rp" + this.hitungHargaJual());
    }

    public static void main(String[] args) {
        Barang kursiKantor = new Barang("BRG-001", "Kursi Kantor", 1000000, 0.1f);

        kursiKantor.tampilData();
    }
}
