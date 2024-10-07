package Trial1;

public class ClassB extends ClassA {
    public int z;

    public void getNilaiZ() {
        System.out.println("Nilai Z: " + z);
    }

    public void getJumlah() {
        System.out.println("Jumlah: " + (super.x + super.y + this.z));
    }
}
