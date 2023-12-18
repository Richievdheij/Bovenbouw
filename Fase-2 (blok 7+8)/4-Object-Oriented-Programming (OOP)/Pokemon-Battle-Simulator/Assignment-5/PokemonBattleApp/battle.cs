// Battle.cs

namespace PokemonBattleApp

using System;
using System.Text;

public sealed class Battle
{
    private static readonly Random random = new Random();
    private static readonly StringBuilder stringBuilder = new StringBuilder();

    public static string StartBattle(Trainer trainer1, Trainer trainer2)
    {
        stringBuilder.Clear();
        stringBuilder.AppendLine($"Battle between {trainer1.Name} and {trainer2.Name} begins!");
        stringBuilder.AppendLine();

        int roundCount = 0;
        int winner = -1; // -1 represents no winner, 0 represents trainer1, 1 represents trainer2
        int drawCount = 0;

        while (trainer1.Pokemons.Count > 0 && trainer2.Pokemons.Count > 0)
        {
            roundCount++;
            stringBuilder.AppendLine($"Round {roundCount}");

            Pokemon pokemon1 = trainer1.Pokemons[random.Next(trainer1.Pokemons.Count)];
            Pokemon pokemon2 = trainer2.Pokemons[random.Next(trainer2.Pokemons.Count)];

            stringBuilder.AppendLine($"{trainer1.Name} sends out {pokemon1.Name} ({pokemon1.Type})");
            stringBuilder.AppendLine(pokemon1.GetBattleCry());
            stringBuilder.AppendLine($"{trainer2.Name} sends out {pokemon2.Name} ({pokemon2.Type})");
            stringBuilder.AppendLine(pokemon2.GetBattleCry());
            stringBuilder.AppendLine();

            int result = Fight(pokemon1, pokemon2);

            if (result == -1)
            {
                stringBuilder.AppendLine("It's a draw!");
                drawCount++;
            }
            else if (result == 0)
            {
                stringBuilder.AppendLine($"{pokemon1.Name} wins the round!");
                trainer2.Pokemons.Remove(pokemon2);
                winner = 0;
            }
            else
            {
                stringBuilder.AppendLine($"{pokemon2.Name} wins the round!");
                trainer1.Pokemons.Remove(pokemon1);
                winner = 1;
            }

            stringBuilder.AppendLine();
        }

        stringBuilder.AppendLine("Battle ends!");
        stringBuilder.AppendLine();

        if (winner == -1)
        {
            stringBuilder.AppendLine("The battle ends in a draw.");
        }
        else if (winner == 0)
        {
            stringBuilder.AppendLine($"{trainer1.Name} wins the battle!");
        }
        else
        {
            stringBuilder.AppendLine($"{trainer2.Name} wins the battle!");
        }

        stringBuilder.AppendLine($"Total rounds: {roundCount}");
        stringBuilder.AppendLine($"Total draws: {drawCount}");
        stringBuilder.AppendLine();

        return stringBuilder.ToString();
    }

    private static int Fight(Pokemon pokemon1, Pokemon pokemon2)
    {
        if (pokemon2.Type == pokemon1.Weakness)
        {
            stringBuilder.AppendLine(pokemon1.GetAttackMessage());
            return 0; // pokemon1 wins
        }
        else if (pokemon1.Type == pokemon2.Weakness)
        {
            stringBuilder.AppendLine(pokemon2.GetAttackMessage());
            return 1; // pokemon2 wins
        }
        else
        {
            return -1; // draw
        }
    }
}