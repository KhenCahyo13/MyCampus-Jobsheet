package main;

import data.MenuCategory;

public class Material {
    private String materialId;
    private String materialName;
    private MenuCategory materialType;
    private float materialTotalWeight;
    private Employee materialPegawai;
    private float materialTotalPrice;
    private float materialQuantity;

    Material(String materialId, String materialName, MenuCategory materialType, float materialTotalWeight, Employee materialPegawai, float materialTotalPrice, float materialQuantity) {
        this.materialId = materialId;
        this.materialName = materialName;
        this.materialType = materialType;
        this.materialTotalWeight = materialTotalWeight;
        this.materialPegawai = materialPegawai;
        this.materialTotalPrice = materialTotalPrice;
        this.materialQuantity = materialQuantity;
    }
}
