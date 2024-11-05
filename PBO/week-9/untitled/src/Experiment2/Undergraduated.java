package Experiment2;

public class Undergraduated extends Student implements ICumlaude{
    public Undergraduated(String name) {
        super(name);
    }

    @Override
    public void graduate() {
        System.out.println("I have finished the thesis for Undergraduated");
    }

    @Override
    public void getHighGPA() {
        System.out.println("My GPA is more than 3.5");
    }
}
