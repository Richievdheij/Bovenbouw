using System;

public class Charmander
{
    private string name;
    private string strength;
    private string weakness;

    public Charmander(string name, string strength, string weakness)
    {
        this.name = name;
        this.strength = strength;
        this.weakness = weakness;
    }

    public void BattleCry()
    {
        Console.WriteLine(name + "!");
    }
}
