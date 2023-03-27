<?php
echo "<h1>hello world!</h1>";

define("HELLO_WORLD", "hello world!");
echo "<h1>" . HELLO_WORLD . "</h1>";

$title = "Learning PHP";
$title = HELLO_WORLD;
define("HELLO_WORLD", "hello world!");
echo "<h1>" . $title . "</h1>";

$hello = "hello";
$world = "world!";
echo "<h1>" . $hello . " " . $world . "</h1>";
?>