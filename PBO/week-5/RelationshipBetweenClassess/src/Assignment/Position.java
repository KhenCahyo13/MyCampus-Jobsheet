package Assignment;

public class Position {
    private String positionId;
    private String positionName;

    Position(String positionId, String positionName) {
        this.positionId = positionId;
        this.positionName = positionName;
    }

    public void getPositionInfo() {
        System.out.println("Position Name: " + this.positionName);
    }

    public String getPositionName() {
        return this.positionName;
    }
}
