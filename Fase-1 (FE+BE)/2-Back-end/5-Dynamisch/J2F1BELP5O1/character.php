<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Character Details</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="resources/css/style.css" rel="stylesheet"/>
</head>
<body>
<header>
    <h1>Character Details</h1>
</header>
<div id="container">
    <?php
    // Verbinding maken met de database
    $host = 'localhost';
    $dbname = 'chara';
    $username = 'root';
    $password = 'mysql';

    try {
        $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Controleren of er een personage-id is opgegeven in de querystring
        if (isset($_GET['id'])) {
            $characterId = $_GET['id'];

            // Query om het specifieke personage op te halen
            $query = "SELECT * FROM characters WHERE id = :id";
            $stmt = $db->prepare($query);
            $stmt->bindParam(':id', $characterId);
            $stmt->execute();
            $character = $stmt->fetch(PDO::FETCH_ASSOC);

            // Controleren of het personage is gevonden
            if ($character) {
                ?>
                <div class="character-details">
                    <img src="resources/images/<?php echo $character['avatar']; ?>" alt="<?php echo $character['name']; ?> Avatar">
                    <h2><?php echo $character['name']; ?></h2>
                    <p><strong>Levenskracht:</strong> <?php echo $character['health']; ?></p>
                    <p><strong>Aanvalskracht:</strong> <?php echo $character['attack']; ?></p>
                    <p><strong>Verdediging:</strong> <?php echo $character['defense']; ?></p>
                    <p><strong>Beschrijving:</strong> <?php echo $character['description']; ?></p>
                </div>
                <?php
            } else {
                echo "<p>Personage niet gevonden.</p>";
            }
        } else {
            echo "<p>Ongeldige aanvraag.</p>";
        }
    } catch (PDOException $e) {
        echo "Database Error: " . $e->getMessage();
        die();
    }
    ?>
</div>
<footer>
    <p>&copy; Richie van der Heij [2023]</p>
</footer>
</body>
</html>
