package main;

import data.DrinkCategory;
import data.MenuCategory;

import java.util.List;

public class Drink extends Menu{
    protected DrinkCategory drinkCategory;

    Drink(String menuId, String menuName, int menuPrice, List<Material> menuMaterials, MenuCategory menuCategory, DrinkCategory drinkCategory) {
        super.setMenuId(menuId);
        super.menuName = menuName;
        super.menuPrice = menuPrice;
        super.menuMaterials = menuMaterials;
        super.menuCategory = menuCategory;
        this.drinkCategory = drinkCategory;
    }
}
