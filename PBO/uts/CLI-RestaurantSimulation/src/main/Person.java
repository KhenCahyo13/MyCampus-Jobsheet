package main;

import data.Gender;

public class Person {
    private String personId;
    protected String personName;
    protected Gender personGender;

    public void setPersonId(String personId) {
        this.personId = personId;
    }
}
