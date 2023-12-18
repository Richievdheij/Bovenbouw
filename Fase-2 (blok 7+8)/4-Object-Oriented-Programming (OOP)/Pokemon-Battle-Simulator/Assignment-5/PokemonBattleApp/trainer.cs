// Trainer.cs

namespace PokemonBattleApp

using System.Collections.Generic;
using System.Text;

public sealed class Trainer
{
    public string Name { get; }
    private readonly List<Pokemon> pokemons;

    public IReadOnlyList<Pokemon> Pokemons => pokemons;

    public Trainer(string name)
    {
        Name = name;
        pokemons = new List<Pokemon>();
    }

    public void AddPokemon(Pokemon pokemon)
    {
        if (pokemons.Count >= 6)
        {
            Console.WriteLine("A trainer can only have six pokemons. Cannot add more.");
            return;
        }

        pokemons.Add(pokemon);
    }

    public string DisplayPokemons()
    {
        StringBuilder stringBuilder = new StringBuilder();
        stringBuilder.AppendLine($"Trainer {Name}'s Pokemons:");
        foreach (Pokemon pokemon in pokemons)
        {
            stringBuilder.AppendLine($"- {pokemon.Name}");
        }
        return stringBuilder.ToString();
    }
}