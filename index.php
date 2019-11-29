<?php
$data = explode('/', substr($_SERVER['REQUEST_URI'], 1));
array_shift($data); //rewritting url

$route = $data[0] ? $data[0] : 'teams';

if ($route === 'teams') {
  require('controller/teams.php');
  listTeams();
} elseif ($route === 'coachs') {
  require('controller/coachs.php');
  listCoachs();
} elseif ($route === 'team') {
  require('controller/team.php');
  $idTeam = $data[1];
  listTeam($idTeam);
} elseif ($route === 'champ') {
  require('controller/champ.php');
}
