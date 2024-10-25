package main;

import java.util.ArrayList;
import java.util.List;

public class Menus {
    protected List<Food> foods;
    protected List<Drink> drinks;

    Menus() {
        this.foods = new ArrayList<>();
        this.drinks = new ArrayList<>();
    }

    public void setFoods(List<Food> foods) {
        this.foods = foods;
    }

    public void setDrinks(List<Drink> drinks) {
        this.drinks = drinks;
    }

    public void printMenu() {
        System.out.println("==== Food Category =====");
        for (int i = 0; i < foods.size(); i++) {
            System.out.println("Food Name: " + foods.get(i).menuName);
            System.out.println("Food Category: " + foods.get(i).foodCategory);
            System.out.println("Food Price: " + "Rp " + foods.get(i).menuPrice);
            System.out.println("-------------");
        }
        System.out.println("==== Drink Category =====");
        for (int i = 0; i < drinks.size(); i++) {
            System.out.println("Drink Name: " + drinks.get(i).menuName);
            System.out.println("Drink Category: " + drinks.get(i).drinkCategory);
            System.out.println("Drink Price: " + "Rp" + drinks.get(i).menuPrice);
            System.out.println("-------------");
        }
    }

    public boolean isMenuAvailable(String menuName) {
        for (Food food : this.foods) {
            if (food.menuName.equalsIgnoreCase(menuName)) {
                return true;
            }
        }

        for (Drink drink : this.drinks) {
            if (drink.menuName.equalsIgnoreCase(menuName)) {
                return true;
            }
        }

        return false;
    }
}
