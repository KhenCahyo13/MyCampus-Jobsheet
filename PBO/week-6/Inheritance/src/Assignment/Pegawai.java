package Assignment;

public class Pegawai {
    private int id;
    private String nip;
    private String nama;
    private String alamat;
    private int gaji;

    public String getNip() {
        return this.nip;
    }

    public String getNama() {
        return this.nama;
    }

    public String getAlamat() {
        return this.alamat;
    }

    public int getGaji() {
        return this.gaji;
    }

    public void setId(int id) {
        this.id = id;
    }

    public void setNip(String nip) {
        this.nip = nip;
    }

    public void setNama(String nama) {
        this.nama = nama;
    }

    public void setAlamat(String alamat) {
        this.alamat = alamat;
    }

    public void setGaji(int gaji) {
        this.gaji = gaji;
    }
}
