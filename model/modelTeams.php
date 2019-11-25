<?php

require_once('utils/db.php');

function getTeams() {
  $db = dbConnect();
  $request = $db->query('SELECT *  FROM teams');
  $data = $request->fetchAll();
  return $data;
}
