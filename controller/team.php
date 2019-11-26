<?php
require('model/modelTeam.php');

function listTeam($idTeam) {
  $team = getTeam($idTeam);
  $players = getPlayers($idTeam);
  $matchs = getMachs($idTeam);
  require('view/viewTeam.php');
}
