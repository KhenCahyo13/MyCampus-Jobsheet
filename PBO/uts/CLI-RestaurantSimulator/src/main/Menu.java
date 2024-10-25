package main;

import data.MenuCategory;

import java.util.List;

public class Menu {
    private String menuId;
    protected String menuName;
    protected int menuPrice;
    protected List<Material> menuMaterials;
    protected MenuCategory menuCategory;

    public void setMenuId(String menuId) {
        this.menuId = menuId;
    }
}
