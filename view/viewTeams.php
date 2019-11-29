<?php ob_start(); ?>


<div class="container">
  <div class="row">
    <?php foreach ($teams as $key => $team) { ?>

      <div class="col-md-3 mt-4">

        <div class="card text-white bg-dark shadow-lg rounded" style="width: 100%;">
        <img class="card-img-top" src="<?=$team['logo']?>" alt="logo">
          <div class="card-body">
            <h5 class="card-title"><?=$team['name']?></h5>
            <p class="card-text">Aka <?=$team['short_name']?> <br />
                                 Adresse : <?=nl2br($team['adress'])?></p>
            <a href="./team/<?=$team['id']; ?>" class="btn btn-primary mb-2">Détails</a> <br />
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('public/index.php'); ?>
