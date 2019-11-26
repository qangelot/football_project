<?php ob_start();
require_once('utils/functions.php');
?>


<div class="container">
  <div class="row mt-4">

        <div class="card text-white bg-dark">
        <img class="card-img-top imgPlayer" src="<?=$player['photo']?>" alt="photo">
          <div class="card-body">
            <h5 class="card-title"><?=$player['name']?></h5>
            <p class="card-text"> Pays <?=$player['nationality']?> <br />
                                  Né le : <?= (new DateTime($player['birthday_date']))->format('d/m/Y')?> à <?= $player['birthday_place']?> <br />
                                  Poids : <?= $player['weight']?> <br />
                                  Taille : <?= size($player['size'])?>
                                </p>
          </div>
      </div>
      </div>

  </div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('public/index.php'); ?>
