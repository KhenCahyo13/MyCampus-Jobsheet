package main;

import data.Gender;

public class Main {
    public static void main(String args[]) {
        // Creating Skills
        Skill cooking = new Skill("SK001", "Cooking");
        Skill serving = new Skill("SK002", "Serving");
        Skill cleaning = new Skill("SK003", "Cleaning");

        // Creating Employees
        Employee budi = new Employee("EM001", "Budi", Gender.Male, "Jl. Lowokwaru 05", "08813102165", "budi02@gmail.com");
        Employee andi = new Employee("EM002", "Andi", Gender.Male, "Jl. Lowokwaru 10", "08513102165", "andi@gmail.com");
        Employee annur = new Employee("EM003", "Annur", Gender.Female, "Jl. Lowokwaru 20", "08913102165", "annur@gmail.com");
    }
}
