package Experiment3;

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

    public void giveCertificateOfTopStudent(IAchievers student) {
        System.out.println("I am a Rector, give a Certificate of Top Student");
        System.out.println("Congratulations! How you can get achievement?");

        student.winTheCompetition();
        student.publishTheJournal();

        System.out.println("--------------------------------------------");
    }
}
