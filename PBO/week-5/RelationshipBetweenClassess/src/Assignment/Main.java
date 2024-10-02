package Assignment;

import java.time.LocalDate;

public class Main {
    public static void main(String[] args) {
        Position subMedis = new Position("POS-001", "Sub Medis");
        Patient dika = new Patient("P-001", "Dika Pratama", "Jl. Boyolali 1", "08813102132", "123123123123");
        Patient rahmad = new Patient("P-002", "Rahmad Moki", "Jl. Boyolali 3", "08813102132", "123123123123");
        Officer imam = new Officer("O-001", "Imam Mulyadi", "Jl. Boyolali 2", "08819929292", "12321321321", subMedis);

        Order order1 = new Order("OR-001", dika, imam, LocalDate.now(), "Sakit gigi");
        Order order2 = new Order("OR-002", rahmad, imam, LocalDate.now(), "Sakit kepala");

        Queue orderQueue = new Queue();
        orderQueue.addOrder(order1);
        orderQueue.addOrder(order2);

        orderQueue.processQueue();
    }
}
