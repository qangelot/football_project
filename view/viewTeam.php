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
          <th scope="col">Pays</th>
          <th scope="col">Né le</th>
          <th scope="col">Poste</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($players as $key => $player) { ?>
        <tr>
          <td><a href="?route=player&id=<?=$player['id'];?>"><?=$player['name']?></a></td>
          <td><?=$player['nationality']?></td>
          <td><?=(new DateTime($player['birthday_date']))->format('d/m/Y')?></td>
          <td><?=$player['poste']?></td>
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
