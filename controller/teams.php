<?php
require('model/modelTeams.php');

function listTeams () {
  $teams = getTeams();
  require('view/viewTeams.php');
}
