package Experiment2;

public class Main {
    public static void main(String[] args) {
        Rector MrRector = new Rector();

        Undergraduated undergraduatedCumlaude = new Undergraduated("Charlie");
        Undergraduated undergraduatedCumlaude2 = new Undergraduated("Joe");
        Postgraduated postgraduatedCumlaude = new Postgraduated("Ben");

        MrRector.giveCumlaudeCertificate(undergraduatedCumlaude);
        MrRector.giveCumlaudeCertificate(undergraduatedCumlaude2);
        MrRector.giveCumlaudeCertificate(postgraduatedCumlaude);
    }
}
