using System;

public class Program
{
    static void Main(string[] args)
    {
        bool quitGame = false;
        Trainer trainer1 = null;
        Trainer trainer2 = null;

        while (!quitGame)
        {
            Console.WriteLine("1. Start the game.");
            Console.WriteLine("2. Give a name to the first trainer.");
            Console.WriteLine("3. Give a name to the second trainer.");
            Console.WriteLine("4. First trainer throws a pokeball.");
            Console.WriteLine("5. Second trainer throws a pokeball.");
            Console.WriteLine("6. First trainer returns the pokemon.");
            Console.WriteLine("7. Second trainer returns the pokemon.");
            Console.WriteLine("8. Quit the game.");
            Console.WriteLine("9. Restart the game.");

            Console.Write("Enter your choice: ");
            int choice = int.Parse(Console.ReadLine());

            switch (choice)
            {
                case 1:
                    Console.WriteLine("Game started.");
                    break;
                case 2:
                    Console.Write("Enter a name for the first trainer: ");
                    string trainer1Name = Console.ReadLine();
                    trainer1 = new Trainer(trainer1Name);
                    break;
                case 3:
                    Console.Write("Enter a name for the second trainer: ");
                    string trainer2Name = Console.ReadLine();
                    trainer2 = new Trainer(trainer2Name);
                    break;
                case 4:
                    if (trainer1 != null)
                    {
                        Console.Write("Enter the index of the pokeball to throw (Trainer 1): ");
                        int pokeballIndex1 = int.Parse(Console.ReadLine());
                        trainer1.ThrowPokeball(pokeballIndex1);
                    }
                    else
                    {
                        Console.WriteLine("First trainer not initialized.");
                    }
                    break;
                case 5:
                    if (trainer2 != null)
                    {
                        Console.Write("Enter the index of the pokeball to throw (Trainer 2): ");
                        int pokeballIndex2 = int.Parse(Console.ReadLine());
                        trainer2.ThrowPokeball(pokeballIndex2);
                    }
                    else
                    {
                        Console.WriteLine("Second trainer not initialized.");
                    }
                    break;
                case 6:
                    if (trainer1 != null)
                    {
                        Console.Write("Enter the index of the pokeball to return (Trainer 1): ");
                        int pokeballIndex1 = int.Parse(Console.ReadLine());
                        trainer1.ReturnPokemon(pokeballIndex1);
                    }
                    else
                    {
                        Console.WriteLine("First trainer not initialized.");
                    }
                    break;
                case 7:
                    if (trainer2 != null)
                    {
                        Console.Write("Enter the index of the pokeball to return (Trainer 2): ");
                        int pokeballIndex2 = int.Parse(Console.ReadLine());
                        trainer2.ReturnPokemon(pokeballIndex2);
                    }
                    else
                    {
                        Console.WriteLine("Second trainer not initialized.");
                    }
                    break;
                case 8:
                    quitGame = true;
                    Console.WriteLine("Game quit.");
                    break;
                case 9:
                    RestartGame(ref trainer1, ref trainer2);
                    break;
                default:
                    Console.WriteLine("Invalid choice. Please try again.");
                    break;
            }
            Console.WriteLine();
        }
    }

    static void RestartGame(ref Trainer trainer1, ref Trainer trainer2)
    {
        trainer1 = null;
        trainer2 = null;

        Console.WriteLine("Game restarted.");
        Console.Write("Enter a name for the first trainer: ");
        string trainer1Name = Console.ReadLine();
        trainer1 = new Trainer(trainer1Name);
        Console.Write("Enter a name for the second trainer: ");
        string trainer2Name = Console.ReadLine();
        trainer2 = new Trainer(trainer2Name);

        Console.WriteLine("Trainer 1: " + trainer1Name);
        Console.WriteLine("Trainer 2: " + trainer2Name);
        Console.WriteLine("Let the battle begin!");
        Console.WriteLine();
    }
}