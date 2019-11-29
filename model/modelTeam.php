<?php

require_once('utils/db.php');

function getTeam($idTeam) {
  $db = dbConnect();
  $request = $db->prepare('SELECT * FROM teams WHERE teams.id = ' . $idTeam);
  $request-> execute();
  $data = $request->fetch();
  return $data;
}

function getPlayers($idTeam) {
  $db = dbConnect();
  $request = $db->prepare('SELECT
    players.*
    FROM players
    INNER JOIN players_has_teams ON players.id = players_has_teams.id_player
    WHERE players_has_teams.id_team = ' . $idTeam);
  $request-> execute();
  $data = $request->fetchAll();
  return $data;
}

function getReqMatchs($idTeam) { //la fonction servira a alimenter les deux suivantes
  return 'SELECT
    matchs.*, th.name AS team_home, ta.name AS team_away
    FROM matchs
    INNER JOIN teams AS th ON th.id = matchs.id_team_home
    INNER JOIN teams AS ta ON ta.id = matchs.id_team_away
    WHERE (th.id = ' . $idTeam . ' OR ta.id = ' . $idTeam . ') ';
}

function getMachsPlayed($idTeam) {
  $db = dbConnect();
  $request = $db->prepare(getReqMatchs($idTeam) . 'AND score_away IS NOT NULL');
  $request-> execute();
  $data = $request->fetchAll();
  return $data;
}

function getMachsNotPlayed($idTeam) {
  global $reqMatch;
  $db = dbConnect();
  $request = $db->prepare(getReqMatchs($idTeam) . 'AND score_away IS NULL');
  $request-> execute();
  $data = $request->fetchAll();
  return $data;
}

function getCoach($idTeam) {
  $db = dbConnect();
  $request = $db->query('SELECT coachs.*, coachs_has_teams.id_team AS team_id
                         FROM coachs INNER JOIN coachs_has_teams ON coachs.id = coachs_has_teams.id_coach
                         WHERE coachs_has_teams.id_team = ' . $idTeam);
  $data = $request->fetch();
  return $data;
}
