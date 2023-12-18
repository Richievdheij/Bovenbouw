using System;

public class Bulbasaur : Pokemon
{
    public Bulbasaur(string name) : base(name, "grass", "fire")
    {
    }

    public override void BattleCry()
    {
        Console.WriteLine("Bulbasaur says: Bulba Bulba!");
    }
}