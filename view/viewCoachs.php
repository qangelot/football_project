<?php ob_start(); ?>


<div class="container">
  <div class="row">
    <?php foreach ($coachs as $key => $coach) { ?>

      <div class="col-md-3 mt-4">

        <div class="card text-white bg-dark" style="width: 100%;">
        <img class="card-img-top" src="<?=$coach['photo']?>" alt="photo">
          <div class="card-body">
            <h5 class="card-title"><?=$coach['name']?></h5>
            <p class="card-text"> Pays <?=$coach['nationality']?> <br />
                                  Né à : <?= $coach['birthday_date']?>, le <?= $coach['birthday_place']?></p>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('public/index.php'); ?>
