using System;

public class Charmander {
    private string name;
    private string strength;
    private string weakness;

    public Charmander(string name, string strength, string weakness) {
        this.name = name;
        this.strength = strength;
        this.weakness = weakness;
    }

    public void BattleCry() {
        Console.WriteLine(name + "!");
    }
}

public class Program {
    static void Main(string[] args) {
        bool quitGame = false;
        Charmander charmander = null;
        while (!quitGame) {
            Console.WriteLine("1. Start the game.");
            Console.WriteLine("2. Give a name to a Charmander.");
            Console.WriteLine("3. Charmander does its battle cry for ten times.");
            Console.WriteLine("4. Give a new name to the same Charmander.");
            Console.WriteLine("5. Charmander does its battle cry for ten times.");
            Console.WriteLine("6. Quit the game.");

            Console.Write("Enter your choice: ");
            int choice = int.Parse(Console.ReadLine());

            switch (choice) {
                case 1:
                    Console.WriteLine("Game started.");
                    break;
                case 2:
                    Console.Write("Enter a name for your Charmander: ");
                    string name = Console.ReadLine();
                    charmander = new Charmander(name, "fire", "water");
                    break;
                case 3:
                    Console.WriteLine("Charmander's battle cry:");
                    for (int i = 0; i < 10; i++) {
                        charmander.BattleCry();
                    }
                    break;
                case 4:
                    Console.Write("Enter a new name for your Charmander: ");
                    name = Console.ReadLine();
                    charmander = new Charmander(name, "fire", "water");
                    break;
                case 5:
                    Console.WriteLine("Charmander's battle cry:");
                    for (int i = 0; i < 10; i++) {
                        charmander.BattleCry();
                    }
                    break;
                case 6:
                    quitGame = true;
                    Console.WriteLine("Game quit.");
                    break;
                default:
                    Console.WriteLine("Invalid choice. Please try again.");
                    break;
            }
            Console.WriteLine();
        }
    }
}

+--------------------+
|   Charmander       |
+--------------------+
| - name:     string |
| - strength: string |
| - weakness: string |
+----------------------------------------------------------------+
| + Charmander(name: string, strength: string, weakness: string) |
| + BattleCry()                                                  |
+----------------------------------------------------------------+

+--------------------+
|  Program           |
+------------------------+
| - Main(args: string[]) |
+------------------------+

