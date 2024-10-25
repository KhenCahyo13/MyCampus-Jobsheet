package main;

import data.*;

import java.util.ArrayList;
import java.util.List;
import java.util.Scanner;

public class Main {
    private static Menus menuCollections;
    private static Materials materialCollections;

    public static void main(String[] args) {
        // Set Up Gameplay
        Gameplay gameplay = new Gameplay();
        gameplay.setUpGameplay();
        // Game Menus
        Scanner scanner = new Scanner(System.in);
        int choice;

        do {
            System.out.println("========== CLI RESTAURANT SIMULATOR ==========");
            System.out.println("========== Game Menu ==========");
            System.out.println("1. Start Game");
            System.out.println("2. Menu List");
            System.out.println("3. Material List");
            System.out.println("4. Exit");
            System.out.print("Please select an option: ");
            choice = scanner.nextInt();

            switch (choice) {
                case 1:
                    gameplay.startGame();
                    break;
                case 2:
                    gameplay.menuCollections.printMenu();
                    break;
                case 3:
                    gameplay.materialCollections.printMaterial();
                    break;
                case 4:
                    System.out.println("Game ends");
                    break;
            }
        } while (choice != 4);
    }
}
