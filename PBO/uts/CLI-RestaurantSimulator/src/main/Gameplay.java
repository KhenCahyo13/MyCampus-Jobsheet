package main;

import data.*;

import java.util.ArrayList;
import java.util.List;

public class Gameplay {
    protected Menus menuCollections;
    protected Materials materialCollections;
    protected Customers customers;
    protected int totalIncome;

    Gameplay() {
        this.totalIncome = 0;
    }

    public void setUpGameplay() {
        Helper helper = new Helper();

        // Creating Skills
        Skill cooking = new Skill("SK001", "Cooking");
        Skill serving = new Skill("SK002", "Serving");
        Skill cleaning = new Skill("SK003", "Cleaning");
        Skill supplier = new Skill("SK004", "Supplier");

        // Creating Employees
        Employee budi = new Employee("EM001", "Budi", Gender.Male, "Jl. Lowokwaru 05", "08813102165", "budi02@gmail.com", cooking);
        Employee andi = new Employee("EM002", "Andi", Gender.Male, "Jl. Lowokwaru 10", "08513102165", "andi@gmail.com", serving);
        Employee annur = new Employee("EM003", "Annur", Gender.Female, "Jl. Lowokwaru 20", "08913102165", "annur@gmail.com", cleaning);
        Employee rudi = new Employee("EM004", "Rudi", Gender.Female, "Jl. Lowokwaru 19", "08916102165", "rudi@gmail.com", supplier);

        // Creating Materials
        Material rotiBaguette = new Material("MTR001", "Roti Baguette", MenuCategory.Food, 4500, rudi, 25000, 12);
        Material tomatSegar = new Material("MTR002", "Tomat Segar", MenuCategory.Food, 3000, rudi, 15000, 20);
        Material bawangPutih = new Material("MTR003", "Bawang Putih", MenuCategory.Food, 5000, rudi, 20000, 40);
        Material daunBasil = new Material("MTR004", "Daun Basil", MenuCategory.Food, 3000, rudi, 20000, 15);
        Material espresso = new Material("MTR005", "Espresso", MenuCategory.Drink, 3000, rudi, 20000, 15);
        Material susuCair = new Material("MTR006", "Susu Cair", MenuCategory.Drink, 3000, rudi, 20000, 3);
        Material tehHitam = new Material("MTR007", "Teh Hitam", MenuCategory.Drink, 3000, rudi, 20000, 5);
        Material lemon = new Material("MTR008", "Lemon", MenuCategory.Drink, 2000, rudi, 20000, 20);

        List<Material> materialList = new ArrayList<>();
        materialList.add(rotiBaguette);
        materialList.add(tomatSegar);
        materialList.add(bawangPutih);
        materialList.add(daunBasil);
        materialList.add(espresso);
        materialList.add(susuCair);
        materialList.add(tehHitam);
        materialList.add(lemon);

        this.materialCollections = new Materials();
        this.materialCollections.setMaterials(materialList);

        // Creating Food Menus
        List<Material> bruschettaMaterialList = new ArrayList<>();
        bruschettaMaterialList.add(rotiBaguette);
        bruschettaMaterialList.add(tomatSegar);
        Food bruschetta = new Food("FD001", "Bruschetta", 3000, bruschettaMaterialList, MenuCategory.Food, FoodCategory.Appetizer);

        List<Material> grilledMaterialList = new ArrayList<>();
        grilledMaterialList.add(bawangPutih);
        grilledMaterialList.add(daunBasil);
        Food grilledChickenwithMashedPotatoes = new Food("FD002", "Grilled Chicken with Mashed Potatoes", 2000, grilledMaterialList, MenuCategory.Food, FoodCategory.MainCourse);

        // Creating Drink Menus
        List<Material> cafeLatteMaterialList = new ArrayList<>();
        cafeLatteMaterialList.add(espresso);
        cafeLatteMaterialList.add(susuCair);
        Drink cafeLatte = new Drink("DR001", "Cafe Latte", 1000, cafeLatteMaterialList, MenuCategory.Drink, DrinkCategory.HotBeverages);

        List<Material> icedLemonTeaMaterialList = new ArrayList<>();
        icedLemonTeaMaterialList.add(tehHitam);
        icedLemonTeaMaterialList.add(lemon);
        Drink icedLemonTea = new Drink("DR002", "Iced Lemon Tea", 1500, icedLemonTeaMaterialList, MenuCategory.Drink, DrinkCategory.ColdBeverages);

        // Assign Menus
        List<Food> foodList = new ArrayList<>();
        foodList.add(bruschetta);
        foodList.add(grilledChickenwithMashedPotatoes);

        List<Drink> drinkList = new ArrayList<>();
        drinkList.add(cafeLatte);
        drinkList.add(icedLemonTea);

        // Assign to the global menuCollections variable
        this.menuCollections = new Menus();
        this.menuCollections.setFoods(foodList);
        this.menuCollections.setDrinks(drinkList);

        // Creating Customers
        Customer diki = new Customer("CST001", "Diki", Gender.Male, helper.randomQueueNumber(), helper.randomPatientLevel(), helper.generateRandomMenu(this.menuCollections));
        Customer andini = new Customer("CST002", "Andini", Gender.Female, helper.randomQueueNumber(), helper.randomPatientLevel(), helper.generateRandomMenu(this.menuCollections));

        List<Customer> customerList = new ArrayList<>();
        customerList.add(diki);
        customerList.add(andini);

        Customers customers = new Customers();
        customers.setCustomerList(customerList);
        customers.setCustomerQueue(customerList);
        this.customers = customers;
    }

    public void startGame() {
        if (customers.customerQueue.isEmpty()) {
            System.out.println("No customers in queue.");
            return;
        }

        while (!customers.customerQueue.isEmpty()) {
            Customer currentCustomer = this.customers.customerQueue.poll();
            System.out.println("Customer " + currentCustomer.personName + " (Queue #" + currentCustomer.customerQueueNumber + ") is waiting....");
            System.out.println("Order: " + currentCustomer.customerOrder.menuName + ". Patience: " + currentCustomer.customerPatientLevel.name());

            if (this.menuCollections.isMenuAvailable(currentCustomer.customerOrder.menuName)) {
                System.out.println("Successfully served " + currentCustomer.personName + " with order " + currentCustomer.customerOrder.menuName + " and pay Rp" + currentCustomer.customerOrder.menuPrice);
                this.totalIncome += currentCustomer.customerOrder.menuPrice;
            } else {
                System.out.println("The menu " + currentCustomer.customerOrder.menuName + " is not available");
            }

            System.out.println("-------------------------------------------------");
        }

        System.out.println("All customers have been served or left the queue.");
        System.out.println("Total Income Rp" + this.totalIncome);
    }
}
