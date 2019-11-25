<?php

function dbConnect()
{
  try {
    return new PDO('mysql:host=localhost;dbname=ligue1;charset=utf8', 'root', '');
  } catch(Exception $e) {
    die('Erreur : '.$e->getMessage());
  }
}
