
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <title><?php echo $gps->getTitle();?></title>

    <!-- Bootstrap core CSS -->
    <link href="/cssjs/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/cssjs/navbar-top.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
      <a class="navbar-brand" href="#">Проверка совместного программирования</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbGPS.class.phparCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Главная </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Ссылка</a>
          </li>

        </ul>
        <form class="form-inline mt-2 mt-md-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Поиск" aria-label="Поиск">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Поиск</button>
        </form>
      </div>
    </nav>

    <main role="main" class="container">
      <div class="jumbotron">
        <h1><?php echo $gps->sayHello();?></h1>
        <p class="lead"><?php echo $gps->getTitle();?></p>
        <a class="btn btn-lg btn-primary" href="" role="button">Далее &raquo;</a><br/>
        <?php echo $gps->newFunctionByMikeSVB();?>
        
      </div>
    </main>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/cssjs/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="/cssjs/jquery-slim.min.js"><\/script>')</script>
    <script src="/cssjs/popper.min.js"></script>
    <script src="/cssjs/bootstrap.min.js"></script>
  </body>
</html>
