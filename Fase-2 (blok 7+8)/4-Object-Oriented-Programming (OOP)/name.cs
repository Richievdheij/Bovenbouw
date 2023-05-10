using System;

class Program {
  public static void Main (string[] args) {
    Pokemon charmander = new Pokemon("Spark", "Fire");

    Console.WriteLine(charmander.getName());
    Console.WriteLine(charmander.getType());
    }
}

class Pokemon {
  public String name;
  public String type;
  
  public Pokemon(string name, String type) {
    this.name = name;
    this.type = type;
  }
  
  public String getName() {
    return name;
  }
  
  public String getType() {
    return type;
  }
  
  public void setName(string name) {
    this.name = name;
  }
  
  public void setType(string type) {
    this.type = type;
  }
}