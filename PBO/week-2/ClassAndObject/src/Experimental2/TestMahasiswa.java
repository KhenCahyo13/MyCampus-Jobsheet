package Experimental2;

public class TestMahasiswa {
    public static void main(String[] args) {
        Mahasiswa mhs1 = new Mahasiswa();
        mhs1.nim = 101;
        mhs1.nama = "Lestari";
        mhs1.alamat = "Jl. Vinolia no 1A";
        mhs1.kelas = "1A";

        Mahasiswa mhs2 = new Mahasiswa();
        mhs2.nim = 102;
        mhs2.nama = "Budi Hartono";
        mhs2.alamat = "Jl. Vinolia no 2B";
        mhs2.kelas = "1B";

        Mahasiswa mhs3 = new Mahasiswa();
        mhs3.nim = 102;
        mhs3.nama = "Sintia Ani";
        mhs3.alamat = "Jl. Anggrek no 2B";
        mhs3.kelas = "1A";

        mhs1.tampilBiodata();
        mhs2.tampilBiodata();
        mhs3.tampilBiodata();
    }
}
