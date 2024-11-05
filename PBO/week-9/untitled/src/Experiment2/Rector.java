package Experiment2;

public class Rector {
    public void giveCumlaudeCertificate(Undergraduated student) {
        System.out.println("I am a Rector, give a Cumlaude Certificate");
        System.out.println("Congratulations! Please introduce yourself.");

        student.studyInCampus();
        student.graduate();
        student.getHighGPA();

        System.out.println("--------------------------------------------");
    }

    public void giveCumlaudeCertificate(Postgraduated student) {
        System.out.println("I am a Rector, give a Cumlaude Certificate");
        System.out.println("Congratulations! Please introduce yourself.");

        student.studyInCampus();
        student.graduate();
        student.getHighGPA();

        System.out.println("--------------------------------------------");
    }
}
