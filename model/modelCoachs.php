<?php

require_once('utils/db.php');

function getCoachs() {
  $db = dbConnect();
  $request = $db->query('SELECT * FROM coachs');
  $data = $request->fetchAll();
  return $data;
}
