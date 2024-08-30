package Assignment;

public class AssigmentDemo {
    public static void main(String[] args) {
        Fan myFan = new Fan();
        Bottle myBottle = new Bottle();
        GlassCup myGlassCup = new GlassCup();
        PlasticCup myPlasticCup = new PlasticCup();

        // Show info about Fan instance
        myFan.setMerk("Nagoya");
        myFan.setSpeedLevel(3);
        myFan.faninfo();

        // Show info about Bottle instance
        myBottle.setName("Club");
        myBottle.setDiameter(4);
        myBottle.bottleInfo();

        // Show info about GlassCup instance
        myGlassCup.setType("Glass");
        myGlassCup.setDiameter(5);
        myGlassCup.setMerk("Nagi");
        myGlassCup.setColor("Black");
        myGlassCup.glassCupInfo();

        // Show info about PlasticCup instance
        myPlasticCup.setType("Plastic");
        myPlasticCup.setDiameter(4);
        myPlasticCup.setMerk("Giya");
        myPlasticCup.setColor("Green");
        myPlasticCup.plasticCupInfo();
    }
}
