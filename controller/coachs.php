<?php
require('model/modelCoachs.php');

function listCoachs() {
  $coachs = getCoachs();
  require('view/viewCoachs.php');
}
