public class Trainer
{
    private string name;
    private List<Pokeball> belt;

    public Trainer(string name)
    {
        this.name = name;
        belt = new List<Pokeball>();

        // Create two of each Pokemon and add them to the belt
        for (int i = 0; i < 2; i++)
        {
            belt.Add(new Pokeball());
            belt.Add(new Pokeball());
            belt.Add(new Pokeball());

            belt[i].SetPokemon(new Squirtle("Squirtle" + (i + 1)));
            belt[i + 2].SetPokemon(new Bulbasaur("Bulbasaur" + (i + 1)));
            belt[i + 4].SetPokemon(new Charmander("Charmander" + (i + 1)));
        }
    }

    public void ThrowPokeball(int index)
    {
        if (index >= 0 && index < belt.Count)
        {
            Pokeball pokeball = belt[index];
            pokeball.Throw();
        }
        else
        {
            Console.WriteLine("Invalid pokeball index.");
        }
    }

    public void ReturnPokemon(int index)
    {
        if (index >= 0 && index < belt.Count)
        {
            Pokeball pokeball = belt[index];
            pokeball.Return();
        }
        else
        {
            Console.WriteLine("Invalid pokeball index.");
        }
    }
}
