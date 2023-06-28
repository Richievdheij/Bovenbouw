using System;
using System.Collections.Generic;

public enum PokemonType
{
    Fire,
    Grass,
    Water
}

public class Pokemon
{
    public string Name { get; set; }
    public PokemonType Type { get; set; }
    public PokemonType Weakness { get; set; }

    public Pokemon(string name, PokemonType type, PokemonType weakness)
    {
        Name = name;
        Type = type;
        Weakness = weakness;
    }

    public void BattleCry()
    {
        Console.WriteLine($"{Name} is ready for battle!");
    }

    public void Attack()
    {
        Console.WriteLine($"{Name} attacks!");
    }
}

public class Trainer
{
    public string Name { get; set; }
    public List<Pokemon> Pokemons { get; set; }

    public Trainer(string name)
    {
        Name = name;
        Pokemons = new List<Pokemon>();
    }

    public void AddPokemon(Pokemon pokemon)
    {
        Pokemons.Add(pokemon);
    }

    public void DisplayPokemons()
    {
        Console.WriteLine($"Trainer {Name}'s Pokemons:");
        foreach (Pokemon pokemon in Pokemons)
        {
            Console.WriteLine($"- {pokemon.Name}");
        }
    }
}

public class Battle
{
    private static Random random = new Random();

    public static void StartBattle(Trainer trainer1, Trainer trainer2)
    {
        Console.WriteLine($"Battle between {trainer1.Name} and {trainer2.Name} begins!");
        Console.WriteLine();

        int roundCount = 0;
        int winner = -1; // -1 represents no winner, 0 represents trainer1, 1 represents trainer2
        int drawCount = 0;

        while (trainer1.Pokemons.Count > 0 && trainer2.Pokemons.Count > 0)
        {
            roundCount++;
            Console.WriteLine($"Round {roundCount}");

            Pokemon pokemon1 = trainer1.Pokemons[random.Next(trainer1.Pokemons.Count)];
            Pokemon pokemon2 = trainer2.Pokemons[random.Next(trainer2.Pokemons.Count)];

            Console.WriteLine($"{trainer1.Name} sends out {pokemon1.Name} ({pokemon1.Type})");
            pokemon1.BattleCry();
            Console.WriteLine($"{trainer2.Name} sends out {pokemon2.Name} ({pokemon2.Type})");
            pokemon2.BattleCry();
            Console.WriteLine();

            int result = Fight(pokemon1, pokemon2);

            if (result == -1)
            {
                Console.WriteLine("It's a draw!");
                drawCount++;
            }
            else if (result == 0)
            {
                Console.WriteLine($"{pokemon1.Name} wins the round!");
                trainer2.Pokemons.Remove(pokemon2);
                winner = 0;
            }
            else
            {
                Console.WriteLine($"{pokemon2.Name} wins the round!");
                trainer1.Pokemons.Remove(pokemon1);
                winner = 1;
            }

            Console.WriteLine();
        }

        Console.WriteLine("Battle ends!");
        Console.WriteLine();

        if (winner == -1)
        {
            Console.WriteLine("The battle ends in a draw.");
        }
        else if (winner == 0)
        {
            Console.WriteLine($"{trainer1.Name} wins the battle!");
        }
        else
        {
            Console.WriteLine($"{trainer2.Name} wins the battle!");
        }

        Console.WriteLine($"Total rounds: {roundCount}");
        Console.WriteLine($"Total draws: {drawCount}");
        Console.WriteLine();
    }

    private static int Fight(Pokemon pokemon1, Pokemon pokemon2)
    {
        if (pokemon2.Type == pokemon1.Weakness)
        {
            pokemon1.Attack();
            return 0; // pokemon1 wins
        }
        else if (pokemon1.Type == pokemon2.Weakness)
        {
            pokemon2.Attack();
            return 1; // pokemon2 wins
        }
        else
        {
            return -1; // draw
        }
    }
}

public class Arena
{
    private static int roundCount = 0;
    private static int battleCount = 0;

    public static void StartArena()
    {
        Console.WriteLine("===== Welcome to the Pokemon Battle Arena =====");
        Console.WriteLine();

        Console.Write("Enter Trainer 1's name: ");
        string trainer1Name = Console.ReadLine();
        Trainer trainer1 = CreateTrainer(trainer1Name, GetRandomPokemons());

        Console.Write("Enter Trainer 2's name: ");
        string trainer2Name = Console.ReadLine();
        Trainer trainer2 = CreateTrainer(trainer2Name, GetRandomPokemons());

        Console.WriteLine($"{trainer1.Name}'s Pokemons:");
        trainer1.DisplayPokemons();
        Console.WriteLine();

        Console.WriteLine($"{trainer2.Name}'s Pokemons:");
        trainer2.DisplayPokemons();
        Console.WriteLine();

        Console.WriteLine("Press Enter to start the battle...");
        Console.ReadLine();

        Battle.StartBattle(trainer1, trainer2);

        roundCount++;
        battleCount++;

        Console.WriteLine("Press Enter to continue...");
        Console.ReadLine();
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

        Pokemon charmander = new Pokemon("Charmander", PokemonType.Fire, PokemonType.Grass); // Charmander is weak against Grass
        Pokemon squirtle = new Pokemon("Squirtle", PokemonType.Water, PokemonType.Fire); // Squirtle is weak against Fire
        Pokemon bulbasaur = new Pokemon("Bulbasaur", PokemonType.Grass, PokemonType.Water); // Bulbasaur is weak against Water

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

    public static void DisplayScoreboard()
    {
        Console.WriteLine("===== Scoreboard =====");
        Console.WriteLine($"Total battles: {battleCount}");
        Console.WriteLine($"Total rounds: {roundCount}");
        Console.WriteLine("======================");
        Console.WriteLine();
    }
}

public class Program
{
    public static void Main(string[] args)
    {
        bool quit = false;

        while (!quit)
        {
            Console.WriteLine("===== Pokemon Battle Simulator =====");
            Console.WriteLine("1. Start the battle");
            Console.WriteLine("2. Restart the scoreboard");
            Console.WriteLine("3. Quit");
            Console.WriteLine();

            Console.Write("Enter your choice: ");
            string choice = Console.ReadLine();
            Console.WriteLine();

            switch (choice)
            {
                case "1":
                    Arena.StartArena();
                    break;
                case "2":
                    Arena.ResetScoreboard();
                    Console.WriteLine("Scoreboard has been reset.");
                    Console.WriteLine();
                    break;
                case "3":
                    quit = true;
                    break;
                default:
                    Console.WriteLine("Invalid choice. Please try again.");
                    Console.WriteLine();
                    break;
            }
        }
        Arena.DisplayScoreboard();
        Console.WriteLine("Thank you for playing the Pokemon Battle Simulator!");
    }
}