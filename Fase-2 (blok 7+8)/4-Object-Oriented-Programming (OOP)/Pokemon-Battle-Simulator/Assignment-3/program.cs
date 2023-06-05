class Program
{
    static void Main(string[] args)
    {
        Console.WriteLine("Welcome to the Pokemon Battle Simulator!");

        bool isRunning = true;
        while (isRunning)
        {
            Console.WriteLine("1. Start the game");
            Console.WriteLine("2. Quit");

            Console.Write("Enter your choice: ");
            string input = Console.ReadLine();

            switch (input)
            {
                case "1":
                    StartGame();
                    break;
                case "2":
                    isRunning = false;
                    break;
                default:
                    Console.WriteLine("Invalid choice.");
                    break;
            }
        }

        Console.WriteLine("Thanks for playing the Pokemon Battle Simulator!");
    }

    static void StartGame()
    {
        Console.WriteLine("Enter the name of the first trainer: ");
        string trainer1Name = Console.ReadLine();
        Console.WriteLine("Enter the name of the second trainer: ");
        string trainer2Name = Console.ReadLine();

        Trainer trainer1 = new Trainer(trainer1Name);
        Trainer trainer2 = new Trainer(trainer2Name);

        bool isBattleOver = false;
        while (!isBattleOver)
        {
            for (int i = 0; i < trainer1.Belt.Count; i++)
            {
                trainer1.ThrowPokeball(i);
                trainer2.ThrowPokeball(i);
                trainer1.ReturnPokemon(i);
                trainer2.ReturnPokemon(i);
            }

            isBattleOver = true; // Assume the battle is over after one round
        }
    }
}
