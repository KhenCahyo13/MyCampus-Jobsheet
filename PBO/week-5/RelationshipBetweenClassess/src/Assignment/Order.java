package Assignment;

import java.time.LocalDate;

public class Order {
    private String orderId;
    private Patient orderPatient;
    private Officer orderOfficer;
    private LocalDate orderDate;
    private String orderDescription;

    Order(String id, Patient patient, Officer officer, LocalDate date, String description) {
        this.orderId = id;
        this.orderPatient = patient;
        this.orderOfficer = officer;
        this.orderDate = date;
        this.orderDescription = description;
    }

    public Patient getOrderPatient() {
        return this.orderPatient;
    }

    public Officer getOrderOfficer() {
        return this.orderOfficer;
    }

    public LocalDate getOrderDate() {
        return this.orderDate;
    }

    public String getOrderDescription() {
        return this.orderDescription;
    }
}
