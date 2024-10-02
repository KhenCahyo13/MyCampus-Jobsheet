package Experiment3;

public class Railway {
    private String name;
    private String railwayClass;
    private Employee machinist;
    private Employee assistant;

    Railway () {}

    Railway (String name, String railwayClass, Employee machinist) {
        this.name = name;
        this.railwayClass = railwayClass;
        this.machinist = machinist;
    }

    Railway (String name, String railwayClass, Employee machinist, Employee assistant) {
        this.name = name;
        this.railwayClass = railwayClass;
        this.machinist = machinist;
        this.assistant = assistant;
    }

    public String info() {
        String info = "";
        info += "Name: " + this.name + "\n";
        info += "Railway Class: " + this.railwayClass + "\n";
        info += "Machinist: " + this.machinist.info() + "\n";
        info += "Assistant: " + this.assistant.info() + "\n";
        return info;
    }

    public void setRailwayClass(String railwayClass) {
        this.railwayClass = railwayClass;
    }

    public void setName(String name) {
        this.name = name;
    }

    public void setAssistant(Employee assistant) {
        this.assistant = assistant;
    }

    public void setMachinist(Employee machinist) {
        this.machinist = machinist;
    }

    public String getName() {
        return this.name;
    }

    public Employee getAssistant() {
        return this.assistant;
    }

    public Employee getMachinist() {
        return this.machinist;
    }

    public String getRailwayClass() {
        return this.railwayClass;
    }
}
