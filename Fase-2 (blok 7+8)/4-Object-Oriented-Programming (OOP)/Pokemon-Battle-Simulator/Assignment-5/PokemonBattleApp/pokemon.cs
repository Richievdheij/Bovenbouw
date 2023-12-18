// Pokemon.cs

namespace PokemonBattleApp

public enum PokemonType
{
    Fire,
    Grass,
    Water
}

public abstract class Pokemon
{
    public string Name { get; }
    public PokemonType Type { get; protected set; }
    public PokemonType Weakness { get; protected set; }

    protected Pokemon(string name)
    {
        Name = name;
    }

    public abstract string GetBattleCry();
    public abstract string GetAttackMessage();
}

public sealed class FirePokemon : Pokemon
{
    public FirePokemon(string name) : base(name)
    {
        Type = PokemonType.Fire;
        Weakness = PokemonType.Grass;
    }

    public override string GetBattleCry()
    {
        return $"{Name} is ready for battle!";
    }

    public override string GetAttackMessage()
    {
        return $"{Name} attacks with fire!";
    }
}

public sealed class WaterPokemon : Pokemon
{
    public WaterPokemon(string name) : base(name)
    {
        Type = PokemonType.Water;
        Weakness = PokemonType.Fire;
    }

    public override string GetBattleCry()
    {
        return $"{Name} is ready for battle!";
    }

    public override string GetAttackMessage()
    {
        return $"{Name} attacks with water!";
    }
}

public sealed class GrassPokemon : Pokemon
{
    public GrassPokemon(string name) : base(name)
    {
        Type = PokemonType.Grass;
        Weakness = PokemonType.Water;
    }

    public override string GetBattleCry()
    {
        return $"{Name} is ready for battle!";
    }

    public override string GetAttackMessage()
    {
        return $"{Name} attacks with grass!";
    }
}