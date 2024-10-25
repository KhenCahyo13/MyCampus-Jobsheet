package main;

import data.FoodCategory;
import data.MenuCategory;

import java.util.List;

public class Food extends Menu {
    protected FoodCategory foodCategory;

    Food(String menuId, String menuName, int menuPrice, List<Material> menuMaterials, MenuCategory menuCategory, FoodCategory foodCategory) {
        super.setMenuId(menuId);
        super.menuName = menuName;
        super.menuPrice = menuPrice;
        super.menuMaterials = menuMaterials;
        super.menuCategory = menuCategory;
        this.foodCategory = foodCategory;
    }
}
