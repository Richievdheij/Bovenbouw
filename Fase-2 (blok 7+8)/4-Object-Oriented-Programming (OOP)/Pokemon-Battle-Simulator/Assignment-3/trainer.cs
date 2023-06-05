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
            if (i % 3 == 0)
            {
                Squirtle squirtle = new Squirtle("Squirtle " + (i / 3 + 1));
                pokeball.SetPokemon(squirtle);
            }
            else if (i % 3 == 1)
            {
                Bulbasaur bulbasaur = new Bulbasaur("Bulbasaur " + (i / 3 + 1));
                pokeball.SetPokemon(bulbasaur);
            }
            else
            {
                Charmander charmander = new Charmander("Charmander " + (i / 3 + 1));
                pokeball.SetPokemon(charmander);
            }
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
            }
        }
        else
        {
            Console.WriteLine("Invalid pokeball index.");
        }
    }

    public void ReturnPokemon(int index)
    {
        if (index >= 0 && index < belt.Count)
        {
            Pokeball pokeball = belt[index];
            if (pokeball.IsEmpty)
            {
                Console.WriteLine("Trainer " + name + " tried to return an empty pokeball.");
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
}