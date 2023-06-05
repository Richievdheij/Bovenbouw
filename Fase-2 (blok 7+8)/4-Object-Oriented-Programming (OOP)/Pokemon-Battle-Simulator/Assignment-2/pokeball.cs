using System;

public class Pokeball
{
    private Charmander charmander;
    private bool isOpen;

    public bool IsEmpty
    {
        get { return charmander == null; }
    }

    public bool IsOpen
    {
        get { return isOpen; }
    }

    public void Throw()
    {
        if (!IsEmpty && !isOpen)
        {
            Console.WriteLine("Pokeball thrown!");
            isOpen = true;
        }
        else
        {
            Console.WriteLine("Pokeball is empty or already open.");
        }
    }

    public void Return()
    {
        if (!IsEmpty && isOpen)
        {
            Console.WriteLine("Pokeball returned!");
            isOpen = false;
        }
        else
        {
            Console.WriteLine("Pokeball is either empty or already closed.");
        }
    }

    public void SetCharmander(Charmander charmander)
    {
        this.charmander = charmander;
    }

    public Charmander GetCharmander()
    {
        return charmander;
    }
}
