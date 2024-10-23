package main;

import data.Gender;
import data.PatientLevel;

public class Customer extends Person {
    protected int customerQueueNumber;
    protected PatientLevel customerPatientLevel;

    Customer(String personId, String personName, Gender personGender, int customerQueueNumber, PatientLevel customerPatientLevel) {
        this.setPersonId(personId);
        this.personName = personName;
        this.personGender = personGender;
        this.customerQueueNumber = customerQueueNumber;
        this.customerPatientLevel = customerPatientLevel;
    }
}
