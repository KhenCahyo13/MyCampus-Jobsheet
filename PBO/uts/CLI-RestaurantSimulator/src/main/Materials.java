package main;

import java.util.ArrayList;
import java.util.List;

public class Materials {
    protected List<Material> materials;

    Materials() {
        this.materials = new ArrayList<>();
    }

    public void setMaterials(List<Material> materials) {
        this.materials = materials;
    }

    public void printMaterial() {
        System.out.println("==== Material List =====");
        for (int i = 0; i < materials.size(); i++) {
            System.out.println("Material Name: " + materials.get(i).materialName);
            System.out.println("Material Type: " + materials.get(i).materialType);
            System.out.println("Material Quantity: " + materials.get(i).materialQuantity);
            System.out.println("-------------");
        }
    }
}
