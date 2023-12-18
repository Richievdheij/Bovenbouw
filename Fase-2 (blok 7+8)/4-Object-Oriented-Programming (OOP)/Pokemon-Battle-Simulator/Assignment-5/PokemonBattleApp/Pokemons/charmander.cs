using System;

public class Charmander : Pokemon
{
    public Charmander(string name) : base(name, "fire", "water")
    {
    }

    public override void BattleCry()
    {
        Console.WriteLine("Charmander says: Char Char!");
    }
}