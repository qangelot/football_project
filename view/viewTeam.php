<?php ob_start(); ?>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-6 mt-4">
      <div class="club_name">
        <h1><?=$team['name'] ?></h1>
      </div>
    </div>
    <div class="col-md-6">
      <div class="club_name">
      <img src="<?=$team['logo']?>" alt="logo">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6">

    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Nom</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($players as $key => $player) { ?>
        <tr>
          <td>
            <div class="container">
              <button data-toggle="modal" href="viewPlayer.php" data-target="#infos" class="btn btn-primary">
                <?= $player['name'] ?>
              </button>
              <div class="modal fade" id="infos">
                <div class="modal-dialog">
                  <div class="modal-content"></div>
                </div>
              </div>
              </div>
          </td>
        </tr>
        <?php } ?>
      </tbody>

    </table>

    </div>

      <div class="col-md-6">

          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Journée</th>
                <th scope="col">Match</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($matchs as $key => $match) { ?>
              <tr>
                <td><?=$match['day']?></a></td>
                <td><?=$match['team_home']?></td>
                <td><?=$match['score_home']?></td>
                <td> - </td>
                <td><?=$match['score_away']?></td>
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
