package Experimental2;

public class Mahasiswa {
    public int nim;
    public String nama;
    public String alamat;
    public String kelas;

    public void tampilBiodata() {
        System.out.println("NIM: " + this.nim);
        System.out.println("Nama: " + this.nama);
        System.out.println("Alamat: " + this.alamat);
        System.out.println("Kelas: " + this.kelas);
    }
}
