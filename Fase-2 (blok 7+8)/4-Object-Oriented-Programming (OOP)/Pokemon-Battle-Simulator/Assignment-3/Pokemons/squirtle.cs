using System;

public class Squirtle : Pokemon
{
    public Squirtle(string name) : base(name, "water", "leaf")
    {
    }

    public override void BattleCry()
    {
        Console.WriteLine("Squirtle says: Squirtle Squirtle!");
    }
}