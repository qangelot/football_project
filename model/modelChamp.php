<?php
require_once('utils/db.php');


function countDraw($idTeam){
  $db = dbConnect();
  $request = $db->prepare('SELECT COUNT
    (matchs.*, teams.id)
    FROM matchs
    INNER JOIN teams AS th ON th.id = matchs.id_team_home
    INNER JOIN teams AS ta ON ta.id = matchs.id_team_away
    WHERE (th.id = ' . $idTeam . ' OR ta.id = ' . $idTeam . ') AND score_away = score_home');
  $request-> execute();
  $data = $request->fetchAll();
  return $data;
}
