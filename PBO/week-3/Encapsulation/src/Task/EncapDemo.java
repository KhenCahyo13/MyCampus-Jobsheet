package Task;

public class EncapDemo {
    private String name;
    private int age;

    public String getName () {
        return this.name;
    }

    public void setName (String name) {
        this.name = name;
    }

    public int getAge () {
        return this.age;
    }

    public void setAge(int age) {
        int validatedAge = Math.max(age, 18);
        validatedAge = Math.min(validatedAge, 30);
        this.age = validatedAge;
    }
}
