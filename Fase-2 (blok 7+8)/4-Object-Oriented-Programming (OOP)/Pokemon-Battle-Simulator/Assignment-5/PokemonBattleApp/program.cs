// Program.cs
using System;

namespace PokemonBattleApp
{
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
                        Console.WriteLine(Arena.StartArena());
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

                if (!quit)
                {
                    Console.WriteLine(Arena.DisplayScoreboard());
                }
            }
        }
    }
}
