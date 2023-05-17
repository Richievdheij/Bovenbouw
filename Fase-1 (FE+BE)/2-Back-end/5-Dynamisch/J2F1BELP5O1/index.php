<?php
// Verbinding maken met de database
$host = 'localhost';
$dbname = 'chara';
$username = 'root';
$password = 'mysql';

try {
    $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Query om alle personages te selecteren en op naam te sorteren
    $query = "SELECT * FROM characters ORDER BY name";
    $stmt = $db->prepare($query);
    $stmt->execute();
    $characters = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    // Toon een foutmelding als er een databasefout optreedt
    echo "Database Error: " . $e->getMessage();
    die();
}
?>

<!-- HTML -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Characters</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="vormgeving/resources/css/style.css" rel="stylesheet"/>
</head>
<body>
<header>
    <!-- Het totaal aantal characters moet zichtbaar zijn op de plaats van [X].  -->
    <h1>Alle <?php echo count($characters); ?> characters uit de database</h1>
</header>
<div id="container">
    <?php
    // Voor elk character in de characters array, toon een character
    foreach($characters as $character) {
        echo "<a class='item' href='character.php?id=" . $character['id'] . "'>";
        echo "<div class='left'>";
        echo "<img class='avatar' src='vormgeving/resources/images/" . $character['avatar'] . "' />";
        echo "</div>";
        echo "<div class='right'>";
        echo "<h2>" . $character['name'] . "</h2>";
        echo "<div class='stats'>";
        echo "<ul class='fa-ul'>";
        echo "<li><span class='fa-li'><i class='fas fa-heart'></i></span>" . $character['health'] . "</li>";
        echo "<li><span class='fa-li'><i class='fas fa-fist-raised'></i></span>" . $character['attack'] . "</li>";
        echo "<li><span class='fa-li'><i class='fas fa-shield-alt'></i></span>" . $character['defense'] . "</li>";
        echo "</ul>";
        echo "</div>";
        echo "</div>";
        echo "<div class='detailButton'><i class='fas fa-search'></i> bekijk</div>";
        echo "</a>";
    }
    ?>
</div>
<!-- Geef footer gegevens via PHP -->
<footer> <?php echo "&copy; [Richie van der Heij] 2023" ?> </footer>
</body>
</html>
