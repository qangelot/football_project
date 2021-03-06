<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <base href="/projet_ligue1/">
    <title> </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./public/css/app.css">
  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" style="font-size: 1.6rem" href="./">Ligue 1 Conforama</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto" style="font-size: 1.4rem">
          <li class="nav-item">
            <a class="nav-link" href="./teams" id="teams" role="button" aria-haspopup="true" aria-expanded="false">
              Equipes
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./coachs" id="coachs" role="button" aria-haspopup="true" aria-expanded="false">
              Coachs
            </a>
          </li>
        </ul>
      </div>
    </nav>


  <?php echo $content; ?>

  <footer id="sticky-footer" class="py-4 text-50">
     <div class="container text-center">
       <p> Copyright 2019 &copy; </p>
     </div>
  </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="public/js/app.js"></script>
  </body>
</html>
