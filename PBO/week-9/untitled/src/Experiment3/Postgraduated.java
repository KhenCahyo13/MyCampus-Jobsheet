package Experiment3;

public class Postgraduated extends Student implements ICumlaude, IAchievers {
    public Postgraduated(String name) {
        super(name);
    }

    @Override
    public void graduate() {
        System.out.println("I have finished the thesis for Postgraduated");
    }

    @Override
    public void getHighGPA() {
        System.out.println("My GPA is more than 3.7!");
    }

    @Override
    public void winTheCompetition() {
        System.out.println("I have won an INTERNATIONAL competition");
    }

    @Override
    public void publishTheJournal() {
        System.out.println("I publish articles in INTERNATIONAL jurnals");
    }
}
