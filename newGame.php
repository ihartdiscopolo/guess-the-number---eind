<?php

require_once('inc/functions.php');
require_once('inc/session.php');

continueGame();
$_SESSION['message'] = "Time's up! Starting a new game. The number was " . $_SESSION['game']['target'] . ".";
header('Location: index.php');