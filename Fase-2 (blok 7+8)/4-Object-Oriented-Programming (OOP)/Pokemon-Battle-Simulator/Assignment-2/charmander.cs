using System;
using System.Collections.Generic;

class Pokeball {
    private bool isOpen;
    private string pokemon;

    public Pokeball() {
        isOpen = false;
        pokemon = null;
    }

    public void Throw() {
        if (isOpen) {
            Console.WriteLine("Pokeball is already open!");
        }
        else {
            isOpen = true;
            if (pokemon != null) {
                Console.WriteLine("Charmander appears and does its battle cry!");
            }
            else {
                Console.WriteLine("The pokeball is empty!");
            }
        }
    }

    public void Return() {
        if (isOpen) {
            isOpen = false;
            Console.WriteLine("Charmander returns to its pokeball.");
        }
        else {
            Console.WriteLine("Pokeball is already closed!");
        }
    }

    public void SetPokemon(string name) {
        pokemon = name;
    }
}

class Trainer {
    private string name;
    private List<Pokeball> belt;

    public Trainer(string trainerName) {
        name = trainerName;
        belt = new List<Pokeball>();
        for (int i = 0; i < 6; i++) {
            Pokeball pokeball = new Pokeball();
            pokeball.SetPokemon("Charmander");
            belt.Add(pokeball);
        }
    }

    public void ThrowPokeball(int index) {
        if (index >= 0 && index < belt.Count) {
            Pokeball pokeball = belt[index];
            pokeball.Throw();
        }
        else {
            Console.WriteLine("Invalid pokeball index!");
        }
    }

    public void ReturnPokemon(int index) {
        if (index >= 0 && index < belt.Count) {
            Pokeball pokeball = belt[index];
            pokeball.Return();
        }
        else {
            Console.WriteLine("Invalid pokeball index!");
        }
    }
}

class Program {
    static void Main(string[] args) {
        Console.WriteLine("Welcome to the Pokemon battle simulator!");

        Console.Write("Enter the name of the first trainer: ");
        string trainer1Name = Console.ReadLine();
        Trainer trainer1 = new Trainer(trainer1Name);

        Console.Write("Enter the name of the second trainer: ");
        string trainer2Name = Console.ReadLine();
        Trainer trainer2 = new Trainer(trainer2Name);

        bool running = true;
        while (running) {
            Console.WriteLine("---------------");
            Console.WriteLine("Menu:");
            Console.WriteLine("1. Throw pokeball");
            Console.WriteLine("2. Return pokemon");
            Console.WriteLine("3. Quit");

            Console.Write("Enter your choice: ");
            int choice = int.Parse(Console.ReadLine());

            switch (choice) {
                case 1:
                    Console.Write("Enter the index of the pokeball to throw (0-5): ");
                    int throwIndex = int.Parse(Console.ReadLine());
                    trainer1.ThrowPokeball(throwIndex);
                    trainer2.ThrowPokeball(throwIndex);
                    break;
                case 2:
                    Console.Write("Enter the index of the pokeball to return (0-5): ");
                    int returnIndex = int.Parse(Console.ReadLine());
                    trainer1.ReturnPokemon(returnIndex);
                    trainer2.ReturnPokemon(returnIndex);
                    break;
                case 3:
                    running = false;
                    break;
                default:
                    Console.WriteLine("Invalid choice!");
                    break;
            }
        }
        Console.WriteLine("Thank you for playing the Pokemon battle simulator!");
    }
}
