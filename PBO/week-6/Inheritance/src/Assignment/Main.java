package Assignment;

public class Main {
    public static void main(String[] args) {
        Dosen angga = new Dosen(1, "12313213123", "Angga Anggaran", "Jl. Joyo Raharjo Gang 5", 3000000, 5, 300000);
        Dosen watik = new Dosen(2, "12313219099", "Watik Anggraini", "Jl. Joyo Raharjo Gang 10", 2500000, 5, 250000);

        DaftarGaji daftarGaji = new DaftarGaji();
        daftarGaji.addPegawai(angga);
        daftarGaji.addPegawai(watik);

        daftarGaji.gajiPegawai(1);
        daftarGaji.printListGajiPegawai();
    }
}
