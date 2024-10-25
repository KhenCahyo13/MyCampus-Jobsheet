package main;

import java.util.ArrayList;
import java.util.LinkedList;
import java.util.List;
import java.util.Queue;

public class Customers {
    protected Queue<Customer> customerQueue;
    protected List<Customer> customerList;

    Customers() {
        this.customerQueue = new LinkedList<>();
        this.customerList = new ArrayList<>();
    }

    public void setCustomerList(List<Customer> customerList) {
        this.customerList = customerList;
    }

    public void setCustomerQueue(List<Customer> customerlist) {
        this.customerQueue.addAll(customerlist);
    }
}
