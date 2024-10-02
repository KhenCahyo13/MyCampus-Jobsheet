package Assignment;

import java.util.ArrayList;
import java.util.List;

public class Queue {
    private List<Order> orders;
    private List<Order> processedOrders;

    Queue() {
        this.orders = new ArrayList<>();
        this.processedOrders = new ArrayList<>();
    }

    public void addOrder(Order order) {
        this.orders.add(order);
    }

    public void removeOrder(Order order) {
        this.orders.remove(order);
    }

    public void showQueueList() {
        System.out.println("===== DAFTAR ANTRIAN PASIEN =====");
        if (orders.isEmpty()) {
            System.out.println("Tidak ada antrian pasien saat ini.");
            return;
        }

        for (int i = 0; i < orders.size(); i++) {
            Order order = orders.get(i);
            System.out.println("Nomor Antrian: " + (i + 1));
            System.out.println("Nama Pasien: " + order.getOrderPatient().getPersonName());
            System.out.println("Tanggal Order: " + order.getOrderDate());
            System.out.println("Deskripsi Penyakit: " + order.getOrderDescription());
            System.out.println("----------------------");
            System.out.println();
        }
    }


    public void processQueue() {
        while (!orders.isEmpty()) {
            Order currentOrder = orders.get(0);

            System.out.println("Memproses antrian...");
            System.out.println("Nama Pasien: " + currentOrder.getOrderPatient().getPersonName());
            System.out.println("Deskripsi Penyakit: " + currentOrder.getOrderDescription());
            System.out.println("----------------------");

            processedOrders.add(currentOrder);

            removeOrder(currentOrder);

            System.out.println("Antrian yang masih tersisa:");
            showQueueList();

            System.out.println("Total antrian tersisa: " + orders.size());
            System.out.println("Total antrian yang sudah diproses: " + processedOrders.size());
            System.out.println();
        }

        System.out.println("Semua antrian telah selesai diproses.");
    }
}