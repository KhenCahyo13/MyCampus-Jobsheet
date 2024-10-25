package main;

import data.Gender;

public class Employee extends Person{
    protected String employeeAddress;
    protected String employeePhoneNumber;
    protected String employeeEmail;
    protected Skill employeeSkill;

    Employee(String personId, String personName, Gender personGender, String employeeAddress, String employeePhoneNumber, String employeeEmail, Skill employeeSkill) {
        this.setPersonId(personId);
        this.personName = personName;
        this.personGender = personGender;
        this.employeeAddress = employeeAddress;
        this.employeePhoneNumber = employeePhoneNumber;
        this.employeeEmail = employeeEmail;
        this.employeeSkill = employeeSkill;
    }
}
