using System;
using System.Collections.Generic;

public class Trainer
{
    private string name;
    private List<Pokeball> belt;

    public Trainer(string name)
    {
        this.name = name;
        belt = new List<Pokeball>();

        for (int i = 0; i < 6; i++)
        {
            Pokeball pokeball = new Pokeball();
            Charmander charmander = new Charmander("Charmander" + (i + 1), "fire", "water");
            pokeball.SetCharmander(charmander);
            belt.Add(pokeball);
        }
    }

    public void ThrowPokeball(int index)
    {
        if (index >= 0 && index < belt.Count)
        {
            Pokeball pokeball = belt[index];
            if (pokeball.IsEmpty)
            {
                Console.WriteLine("Trainer " + name + " threw an empty pokeball.");
            }
            else
            {
                Console.WriteLine("Trainer " + name + " threw a pokeball.");
                pokeball.Throw();
                Console.WriteLine("Trainer " + name + " shouts:");
                BattleCry();
            }
        }
        else
        {
            Console.WriteLine("Invalid pokeball index.");
        }
    }

    public void ReturnCharmander(int index)
    {
        if (index >= 0 && index < belt.Count)
        {
            Pokeball pokeball = belt[index];
            if (pokeball.IsEmpty)
            {
                Console.WriteLine("Trainer " + name + " returned an empty pokeball.");
            }
            else
            {
                Console.WriteLine("Trainer " + name + " returned a pokeball.");
                pokeball.Return();
            }
        }
        else
        {
            Console.WriteLine("Invalid pokeball index.");
        }
    }

    private void BattleCry()
    {
        foreach (Pokeball pokeball in belt)
        {
            if (!pokeball.IsEmpty && pokeball.IsOpen)
            {
                pokeball.GetCharmander().BattleCry();
            }
        }
    }
}
