package Assignment;

import java.util.ArrayList;
import java.util.List;

public class DaftarGaji {
    private List<Pegawai> listPegawai;

    DaftarGaji() {
        this.listPegawai = new ArrayList<>();
    }

    public void addPegawai(Pegawai pegawai) {
        this.listPegawai.add(pegawai);
    }

    public void gajiPegawai(int id) {
        System.out.println("=====GAJI PEGAWAI DENGAN ID " + id + "=====");
        System.out.println("Nama Pegawai: " + this.listPegawai.get(id).getNama());
        System.out.println("Gaji Pegawai: Rp" + this.listPegawai.get(id).getGaji());
        System.out.println("=============================");
    }

    public void printListGajiPegawai() {
        System.out.println("=====DAFTAR GAJI PEGAWAI=====");
        for (int i = 0; i < this.listPegawai.size(); i++) {
            System.out.println("Nama Pegawai: " + this.listPegawai.get(i).getNama());
            System.out.println("Gaji Pegawai: Rp" + this.listPegawai.get(i).getGaji());
            System.out.println("--------------------------");
        }
        System.out.println("=============================");
    }
}
