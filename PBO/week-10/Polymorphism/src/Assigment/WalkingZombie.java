package Assigment;

public class WalkingZombie extends Zombie {
    WalkingZombie(int health, int level) {
        super.health = health;
        super.level = level;
    }

    @Override
    public void heal() {
        switch (super.level) {
            case 1:
                super.health += super.health * 0.2;
                break;
            case 2:
                super.health += super.health * 0.3;
                break;
            case 3:
                super.health += super.health * 0.4;
                break;
            default:
                super.health = 0;
                break;
        }
    }

    @Override
    public void destroyed() {
        super.health -= super.health * 0.02;
    }

    @Override
    public String getZombieInfo() {
        return "JUMPING ZOMBIE DATA \n" + super.getZombieInfo();
    }
}
