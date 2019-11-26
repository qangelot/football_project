<?php

require_once('utils/db.php');

function getPlayers($idPlayer) {
  $db = dbConnect();
  $request = $db->prepare('SELECT * FROM players WHERE players.id = ' . $idPlayer);
  $request-> execute();
  $data = $request->fetch();
  return $data;
}
