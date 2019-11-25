<?php

$route = isset($_GET['route']) ? $_GET['route'] : 'teams';

if ($route === 'teams') {
  require('controller/teams.php');
  listTeams();
} elseif ($route === 'coachs') {
  require('controller/coachs.php');
  listCoachs();
}
