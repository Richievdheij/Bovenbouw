public abstract class Pokemon
{
    protected string name;
    protected string strength;
    protected string weakness;

    public Pokemon(string name, string strength, string weakness)
    {
        this.name = name;
        this.strength = strength;
        this.weakness = weakness;
    }

    public abstract void BattleCry();
}
