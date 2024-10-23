package main;

import data.Gender;

import java.util.ArrayList;
import java.util.List;

public class Employee extends Person {
    protected String employeeAddress;
    protected String employeePhoneNumber;
    protected String employeeEmail;
    protected List<Skill> employeeSkills;

    Employee(String personId, String personName, Gender personGender, String employeeAddress, String employeePhoneNumber, String employeeEmail) {
        this.setPersonId(personId);
        this.personName = personName;
        this.personGender = personGender;
        this.employeeAddress = employeeAddress;
        this.employeePhoneNumber = employeePhoneNumber;
        this.employeeEmail = employeeEmail;
        this.employeeSkills = new ArrayList<>();
    }
}
