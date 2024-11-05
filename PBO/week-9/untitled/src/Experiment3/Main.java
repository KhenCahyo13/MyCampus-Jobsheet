package Experiment3;

public class Main {
    public static void main(String[] args) {
        Rector MrRector = new Rector();

        Undergraduated undergraduatedCumlaude = new Undergraduated("Joe");
        Postgraduated postgraduatedCumlaude = new Postgraduated("Ben");

        MrRector.giveCertificateOfTopStudent(undergraduatedCumlaude);
        MrRector.giveCertificateOfTopStudent(postgraduatedCumlaude);
    }
}
