<?php

require_once('utils/db.php');

function getCoachs() {
  $db = dbConnect();
  $request = $db->query('SELECT coachs.*, teams.name AS team_name, teams.logo, coachs_has_teams.id_team AS team_id
                         FROM coachs INNER JOIN coachs_has_teams ON coachs.id = coachs_has_teams.id_coach
                         INNER JOIN teams ON coachs_has_teams.id_team = teams.id');
  $data = $request->fetchAll();
  return $data;
}
