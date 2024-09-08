package Assigments.GameRental;

public class RentalSystem {
    public static void main(String[] args) {
        // Create a game
        Game gow1 = new Game("GM-001", "God of War 1", 5000);
        // Create Employee and Member
        Employee agus = new Employee("EMP-001", "Agus Muhardi", "Jl. KH. Ahmad Dahlan no 10", "08813102187", 2000000, "10 Januari 2024");
        Member abdi = new Member("MEM-001", "Abdi Abdillah", "Jl. KH. Agus Salim no 10", "08813102190", "Basic", 30);

        new Transaction("TR-001", abdi, agus, gow1, 10);
    }
}
