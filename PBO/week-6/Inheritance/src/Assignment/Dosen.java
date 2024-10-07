package Assignment;

public class Dosen extends Pegawai {
    private int jumlahSks;
    private int tarifSks;

    Dosen(int id, String nip, String nama, String alamat, int gaji, int jumlahSks, int tarifSks) {
        super.setId(id);
        super.setNip(nip);
        super.setNama(nama);
        super.setAlamat(alamat);
        super.setGaji(gaji);
        this.jumlahSks = jumlahSks;
        this.tarifSks = tarifSks;
    }

    public int getJumlahSks() {
        return this.jumlahSks;
    }

    public int getTarifSks() {
        return this.tarifSks;
    }

    public void setJumlahSks(int jumlahSks) {
        this.jumlahSks = jumlahSks;
    }

    public void setTarifSks(int tarifSks) {
        this.tarifSks = tarifSks;
    }
}
