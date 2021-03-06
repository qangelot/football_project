<?php
require('model/modelTeam.php');

function listTeam($idTeam) {
  $team = getTeam($idTeam);
  $players = getPlayers($idTeam);
  $matchsPlayed = getMachsPlayed($idTeam);
  $matchsNotPlayed = getMachsNotPlayed($idTeam);
  $coach = getCoach($idTeam);
  require('view/viewTeam.php');
}
