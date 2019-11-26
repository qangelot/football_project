<?php
require('model/modelPlayer.php');

function listPlayers($idPlayer) {
  $player = getPlayers($idPlayer);
  require('view/viewPlayer.php');
}
