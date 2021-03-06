<?php ob_start(); ?>


<div class="container">
  <div class="row">
    <?php foreach ($coachs as $key => $coach) { ?>

      <div class="col-md-3 mt-4">

        <div class="card text-white bg-dark" style="width: 100%;">
        <img class="card-img-top imgCoach" src="<?=$coach['photo']?>" alt="photo">
          <div class="card-body">
            <h5 class="card-title"><?=$coach['name']?></h5>
            <p class="card-text"> Pays <?=$coach['nationality']?> <br />
                                  Né à : <?= (new DateTime($coach['birthday_date']))->format('d/m/Y')?>, le <?= $coach['birthday_place']?></p>
          </div>
        <div class="encart">
        <img class="card-img-bottom logoCoach" src="<?=$coach['logo']?>" alt="logo">
        </div>
      </div>
      </div>
    <?php } ?>
  </div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('public/index.php'); ?>
