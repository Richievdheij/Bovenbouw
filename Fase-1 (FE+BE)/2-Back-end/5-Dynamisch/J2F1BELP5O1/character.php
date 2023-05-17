<head>
    <meta charset="UTF-8">
    <title>Character Details</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="vormgeving/resources/css/style.css" rel="stylesheet"/>
</head>
<body>

    <?php
    // Verbinding maken met de database
    $host = 'localhost';
    $dbname = 'chara';
    $username = 'root';
    $password = 'mysql';

    try {
        $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Controlen van character details op basis van id
        if (isset($_GET['id'])) {
            $characterId = $_GET['id'];

            // Query om het specifieke personage op te halen
            $query = "SELECT * FROM characters WHERE id = :id";
            $stmt = $db->prepare($query);
            $stmt->bindParam(':id', $characterId);
            $stmt->execute();
            $character = $stmt->fetch(PDO::FETCH_ASSOC);


    ?>
</div>
<?php
if ($character) {
?>
<header>
<a href="index.php"><i class="fas fa-arrow-left"></i> Terug</a>
<h1><?php echo $character['name']; ?></h1>
</header>
<div id="container">
    <div class="detail">
        <div class="left">
                <img src="vormgeving/resources/images/<?php echo $character['avatar']; ?>" alt="<?php echo $character['name']; ?> Avatar">
            <div class="stats" style="background-color: yellowgreen">
                <ul class="fa-ul">
                    <h2><?php echo $character['name']; ?></h2>
                    <p><strong><class="fa-li"><i class="fas fa-heart"></i></strong> <?php echo $character['health']; ?></p>
                    <p><strong><class="fa-li"><i class="fas fa-fist-raised"></i></strong> <?php echo $character['attack']; ?></p>
                    <p><strong><class="fa-li"><i class="fas fa-shield-alt"></i></strong> <?php echo $character['defense']; ?></p>
                </ul>
                <ul class="gear">
                    <p><strong>Weapon:</strong> <?php echo $character['weapon']; ?></p>
                    <p><strong>Armor:</strong> <?php echo $character['armor']; ?></p>
                </ul>
            </div>
        </div>
        <div class="right">
            <p><strong></strong> <?php echo $character['bio']; ?></p>
        </div>
        <div style="clear: both"></div>
    </div>
</div>
<footer> 
    <?php echo "&copy; [Richie van der Heij] 2023" ?>
</footer>
</body>
</html>

<?php
} else {
    echo "<p>Character not found</p>";
}
} else {
    echo "<p>No character id specified</p>";
}
} catch(PDOException $e) {
    echo $e->getMessage();
}