package main;

import data.Gender;
import data.PatientLevel;

public class Customer extends Person {
    protected int customerQueueNumber;
    protected PatientLevel customerPatientLevel;
    protected Menu customerOrder;

    Customer(String personId, String personName, Gender personGender, int customerQueueNumber, PatientLevel customerPatientLevel, Menu customerOrder) {
        super.setPersonId(personId);
        super.personName = personName;
        super.personGender = personGender;
        this.customerQueueNumber = customerQueueNumber;
        this.customerPatientLevel = customerPatientLevel;
        this.customerOrder = customerOrder;
    }
}
