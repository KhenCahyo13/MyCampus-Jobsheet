package main;

import data.MenuCategory;

public class Material {
    private String materialId;
    protected String materialName;
    protected MenuCategory materialType;
    protected int materialTotalWeight;
    protected Employee materialPegawai;
    protected int materialTotalPrice;
    protected int materialQuantity;

    Material(String materialId, String materialName, MenuCategory materialType, int materialTotalWeight, Employee materialPegawai, int materialTotalPrice, int materialQuantity) {
        this.materialId = materialId;
        this.materialName = materialName;
        this.materialType = materialType;
        this.materialTotalWeight = materialTotalWeight;
        this.materialPegawai = materialPegawai;
        this.materialTotalPrice = materialTotalPrice;
        this.materialQuantity = materialQuantity;
    }
}
