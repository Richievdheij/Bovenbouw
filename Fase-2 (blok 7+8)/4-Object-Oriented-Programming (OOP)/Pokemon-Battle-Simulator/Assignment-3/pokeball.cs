using System;

public class Pokeball
{
    private Pokemon pokemon;
    private bool isOpen;

    public bool IsEmpty
    {
        get { return pokemon == null; }
    }

    public bool IsOpen
    {
        get { return isOpen; }
    }

    public void Throw()
    {
        if (!IsEmpty && !IsOpen)
        {
            Console.WriteLine("Pokeball thrown!");
            isOpen = true;
            pokemon.BattleCry();
        }
        else
        {
            Console.WriteLine("Pokeball is empty or already open.");
        }
    }

    public void Return()
    {
        if (!IsEmpty && IsOpen)
        {
            Console.WriteLine("Pokeball returned!");
            isOpen = false;
        }
        else
        {
            Console.WriteLine("Pokeball is either empty or already closed.");
        }
    }

    public void SetPokemon(Pokemon pokemon)
    {
        this.pokemon = pokemon;
    }

    public Pokemon GetPokemon()
    {
        return pokemon;
    }
}
