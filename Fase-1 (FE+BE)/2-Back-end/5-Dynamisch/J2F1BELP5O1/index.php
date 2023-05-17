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

<?php foreach ($characters as $character): ?>
    <div class="character">
        <img src="resources/images/<?php echo $character['avatar']; ?>" alt="<?php echo $character['name']; ?> Avatar">
        <h2><?php echo $character['name']; ?></h2>
        <p><strong>Levenskracht:</strong> <?php echo $character['health']; ?></p>
        <p><strong>Aanvalskracht:</strong> <?php echo $character['attack']; ?></p>
        <p><strong>Verdediging:</strong> <?php echo $character['defense']; ?></p>
        <a href="character.php?id=<?php echo $character['id']; ?>">Details</a>
    </div>
<?php endforeach; ?>
