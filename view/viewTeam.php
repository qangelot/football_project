<?php ob_start();
require_once('utils/functions.php'); ?>

<div class="container">

  <div class="row">
    <div class="col-md-4 mt-4">
      <img src="<?=$team['logo']?>" style="height : 300px; width:300px" class="card-img-top" alt="logo">
    </div>
    <div class="col-md-8">
    <div class="jumbotron">
      <h1 class="display-4"><?=$team['name']?></h1>
      <p class="lead">L'équipe fondée en <?=$team['fundation_date']?> est entraînée par <?=$coach['name'] ?> et située <?=nl2br($team['adress'])?>  </p>
      <a class="btn btn-primary btn-lg" href="//<?=$team['website']?>" role="button"> Détails </a>
    </div>
    </div>
    </div>
    </div>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-4">

    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Equipe</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($players as $key => $player) { ?>
        <tr>
          <td>
            <div class="container">

                <button data-toggle="modal" href="#player-<?= $player['id'] ?>" class="btn btn-primary"><?= $player['name'] ?></button>
                <div class="modal " id="player-<?= $player['id'] ?>">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title"><?= $player['name'] ?></h4>
                        <button type="button" class="close" data-dismiss="modal">x</button>
                      </div>
                          <div class="modal-body">
                          <img class="imgPlayer" src="<?=$player['photo']?>" alt="photo">
                          <div class="id text-center">
                            <?php
                            if (empty($player['nationality']))
                              echo 'Pays : ' . $player['nationality'];
                            ?> <br />
                            <?php
                            if (isset($player['birthday_date']))
                              echo 'Né le : ' . (new DateTime($player['birthday_date']))->format('d/m/Y');
                            ?> <br />
                            <?php
                            if (isset($player['birthday_place']))
                              echo 'à : ' . $player['birthday_place'];
                            ?> <br />
                           <?php
                           if ($player['weight'] > 0)
                             echo 'Poids : ' . $player['weight'] . 'kg';
                           ?> <br />
                           <?php
                           if ($player['size'] > 0)
                             echo 'Taille : ' . size($player['size']);
                           ?> </div>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
          </td>
        </tr>
        <?php } ?>
      </tbody>

    </table>
  </div>


      <div class="col-md-8">

          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Résultats</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($matchsPlayed as $key => $match) { ?>
              <tr>
                <td><?=$match['day']?></a></td>
                <td><?=$match['team_home']?></td>
                <td><?=$match['score_home']?> - <?=$match['score_away']?></td>
                <td><?=$match['team_away']?></td>
              </tr>
              <?php } ?>
            </tbody>

          </table>

          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Calendrier</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($matchsNotPlayed as $key => $match) { ?>
              <tr>
                <td><?=$match['day']?></a></td>
                <td><?=$match['team_home']?></td>
                <td><?=$match['date']?></td>
                <td><?=$match['team_away']?></td>
              </tr>
              <?php } ?>
            </tbody>

          </table>
  </div>
  </div>
</div>




<?php $content = ob_get_clean(); ?>
<?php require('public/index.php'); ?>
