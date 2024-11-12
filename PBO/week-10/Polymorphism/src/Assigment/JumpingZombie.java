package Assigment;

public class JumpingZombie extends Zombie {
    JumpingZombie(int health, int level) {
        super.health = health;
        super.level = level;
    }

    @Override
    public void heal() {
        switch (super.level) {
            case 1:
                super.health += super.health * 0.3;
                break;
            case 2:
                super.health += super.health * 0.4;
                break;
            case 3:
                super.health += super.health * 0.5;
                break;
            default:
                super.health = 0;
                break;
        }
    }

    @Override
    public void destroyed() {
        super.health -= super.health * 0.01;
    }

    @Override
    public String getZombieInfo() {
        return "JUMPING ZOMBIE DATA \n" + super.getZombieInfo();
    }
}
