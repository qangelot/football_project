<?php ob_start();
require_once('utils/functions.php');
?>

<div class="container">
    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h1><?=$player['name']?></h1>
    </div>
      <div class="modal-body">
          <img class="imgPlayer" src="<?=$player['photo']?>" alt="photo">
          Pays <?=$player['nationality']?> <br />
          Né le : <?= (new DateTime($player['birthday_date']))->format('d/m/Y')?> à <?= $player['birthday_place']?> <br />
          Poids : <?= $player['weight']?> <br />
          Taille : <?= size($player['size'])?>
    </div>
  </div>



<?php $content = ob_get_clean(); ?>
<?php require('public/index.php'); ?>
