<?php

require_once('utils/db.php');

function getCoachs() {
  $db = dbConnect();
  $request = $db->query('SELECT * FROM coachs c INNER JOIN teams t ON c.id = t.id ');
  $data = $request->fetchAll();
  return $data;
}
