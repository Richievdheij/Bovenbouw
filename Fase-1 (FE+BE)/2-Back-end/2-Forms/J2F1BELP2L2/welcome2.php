<!DOCTYPE html>
<html>
<head>
	<title>Welkom</title>
  <style>
  form {
    margin: 50px auto;
    width: 500px;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    font-family: Arial, sans-serif;
  }
  label {
    display: block;
    margin-bottom: 10px;
    font-size: 18px;
    font-weight: bold;
  }
  input[type="text"], input[type="email"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
    font-size: 16px;
    margin-bottom: 20px;
  }
  input[type="submit"] {
    background-color: #ec0707;
    color: white;
    border: none;
    padding: 12px 20px;
    text-decoration: none;
    font-size: 16px;
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
  }
  input[type="submit"]:hover {
    background-color: #7a1616;
  }
  </style>
</head>
<body>
  <form method="POST">
    <h1>De ingevulde gegevens zijn: <?php echo $_POST["name"]; ?></h1>
    <label for="name">Naam:</label>
    <input type="text" id="name" name="name" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <input type="submit" value="Verstuur">
  </form>
</body>
</html>