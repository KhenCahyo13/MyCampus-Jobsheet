package Assigment;

public class Zombie implements Destroyable {
    protected int health;
    protected int level;

    public void heal() {

    }

    public void destroyed() {

    }

    public String getZombieInfo() {
        String info = "Health: " + this.health + "\n" + "Level: " + this.level + "\n";
        return info;
    }
}
