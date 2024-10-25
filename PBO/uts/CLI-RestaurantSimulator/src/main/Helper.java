package main;

import data.PatientLevel;

import java.util.Random;

public class Helper {
    private Random random = new Random();

    public PatientLevel randomPatientLevel() {
        int rand = random.nextInt(3);
        switch (rand) {
            case 0: return PatientLevel.Low;
            case 1: return PatientLevel.Medium;
            case 2: return PatientLevel.High;
            default: return PatientLevel.Medium;
        }
    }

    public int randomQueueNumber() {
        return random.nextInt(100) + 1;
    }

    public Menu generateRandomMenu(Menus menus) {
        int randomType = random.nextInt(2);

        if (randomType == 0) {
            int randomIndex = random.nextInt(menus.foods.size());
            return menus.foods.get(randomIndex);
        } else {
            int randomIndex = random.nextInt(menus.drinks.size());
            return menus.drinks.get(randomIndex);
        }
    }
}
