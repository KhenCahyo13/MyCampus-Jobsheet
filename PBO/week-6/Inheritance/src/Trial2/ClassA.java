package Trial2;

public class ClassA {
    private int x;
    private int y;

    public void setX(int x) {
        this.x = x;
    }

    public void setY(int y) {
        this.y = y;
    }

    public int getX() {
        return this.x;
    }

    public int getY() {
        return this.y;
    }

    public void getNilai() {
        System.out.println("Nilai x: " + this.x);
        System.out.println("Nilai y: " + this.y);
    }
}
