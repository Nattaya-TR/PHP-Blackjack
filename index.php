<?php
declare(strict_types=1);

session_start();

require_once("Card.php");
require_once("Deck.php");
require_once("Suit.php");
require_once("Player.php");
require_once("Dealer.php");
require_once("Blackjack.php");


if (isset($_SESSION['blackjack'])) {
    $game = $_SESSION['blackjack'];
} else {
    $game = new Blackjack();
    //var_dump($game);
}

//var_dump($_POST['playerAction']);
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Black Jack</title>
</head>
<body>
<h1>Black Jack Game</h1>
<form action="index.php" method="POST">
    <button type="submit" name="playerAction" value="hit">Hit</button>
    <button type="submit" name="playerAction" value="stand">Stand</button>
    <button type="submit" name="playerAction" value="surrender">Surrender</button>
</form>
</body>
</html>

