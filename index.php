<?php

$route = isset($_GET['route']) ? $_GET['route'] : 'teams';

if ($route === 'teams') {
  require('controller/teams.php');
  listTeams();
} elseif ($route === 'coachs') {
  require('controller/coachs.php');
  listCoachs();
} elseif ($route === 'team') {
  require('controller/team.php');
  $idTeam = $_GET['id'];
  listTeam($idTeam);
} elseif ($route === 'player') {
  require('controller/players.php');
  $idPlayer = $_GET['id'];
  listPlayers ($idPlayer);
}
