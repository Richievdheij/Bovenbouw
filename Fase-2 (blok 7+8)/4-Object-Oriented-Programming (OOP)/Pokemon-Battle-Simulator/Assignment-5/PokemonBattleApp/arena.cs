// Arena.cs

namespace PokemonBattleApp

public static class Arena
{
    private static int roundCount = 0;
    private static int battleCount = 0;

    public static string StartArena()
    {
        StringBuilder stringBuilder = new StringBuilder();
        stringBuilder.AppendLine("===== Welcome to the Pokemon Battle Arena =====");
        stringBuilder.AppendLine();

        Console.Write("Enter Trainer 1's name: ");
        string trainer1Name = Console.ReadLine();
        Trainer trainer1 = CreateTrainer(trainer1Name, GetRandomPokemons());

        Console.Write("Enter Trainer 2's name: ");
        string trainer2Name = Console.ReadLine();
        Trainer trainer2 = CreateTrainer(trainer2Name, GetRandomPokemons());

        stringBuilder.AppendLine($"{trainer1.Name}'s Pokemons:");
        stringBuilder.AppendLine(trainer1.DisplayPokemons());
        stringBuilder.AppendLine();

        stringBuilder.AppendLine($"{trainer2.Name}'s Pokemons:");
        stringBuilder.AppendLine(trainer2.DisplayPokemons());
        stringBuilder.AppendLine();

        stringBuilder.AppendLine("Press Enter to start the battle...");
        Console.ReadLine();

        stringBuilder.AppendLine(Battle.StartBattle(trainer1, trainer2));

        roundCount++;
        battleCount++;

        stringBuilder.AppendLine("Press Enter to continue...");
        Console.ReadLine();

        return stringBuilder.ToString();
    }

    private static Trainer CreateTrainer(string name, List<Pokemon> pokemons)
    {
        Trainer trainer = new Trainer(name);

        foreach (Pokemon pokemon in pokemons)
        {
            trainer.AddPokemon(pokemon);
        }

        return trainer;
    }

    private static List<Pokemon> GetRandomPokemons()
    {
        List<Pokemon> pokemons = new List<Pokemon>();

        Pokemon charmander = new FirePokemon("Charmander");
        Pokemon squirtle = new WaterPokemon("Squirtle");
        Pokemon bulbasaur = new GrassPokemon("Bulbasaur");

        pokemons.Add(charmander);
        pokemons.Add(squirtle);
        pokemons.Add(bulbasaur);

        return pokemons;
    }

    public static void ResetScoreboard()
    {
        roundCount = 0;
        battleCount = 0;
    }

    public static string DisplayScoreboard()
    {
        StringBuilder stringBuilder = new StringBuilder();
        stringBuilder.AppendLine("===== Scoreboard =====");
        stringBuilder.AppendLine($"Total battles: {battleCount}");
        stringBuilder.AppendLine($"Total rounds: {roundCount}");
        stringBuilder.AppendLine("======================");
        stringBuilder.AppendLine();

        return stringBuilder.ToString();
    }
}