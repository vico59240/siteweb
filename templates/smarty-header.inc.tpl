<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Bare - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
        <a></a>
        <a class="navbar-brand"></a>
      <a class="navbar-brand" href="index.php">Home</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="ajouter_articles.php">Ajouter artciles
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
              <form method="post" action="index.php">
            <a class="nav-link" href="consulter_articles.php">Consulter les articles
              <span class="sr-only">(current)</span>
            </a>
              </form>
          </li>
          {if !isset($SESSION['statut'])}
          <li class="nav-item">
              <form method="post" action="index.php">
            <a class="nav-link" href="connection.php">Connection
              <span class="sr-only">(current)</span>
            </a>
              </form>
          </li>
          {/if}
          <li class="nav-item">
            <form method="post" action="index.php">
            <a class="nav-link" href="subscribe.php">S'inscrire
              <span class="sr-only">(current)</span>
            </a>
              </form>
          </li>
          {if isset($SESSION['statut'])}
          <form method="post" action="index.php">
            <button type="submit" name="disconnect" value ="1">Se déconnecter</button>
              </form>
          {/if}
        </ul>
      </div>
            {if isset($SESSION['prenom']) and isset($SESSION['nom'])}
               Bonjour {$SESSION['prenom']} {$SESSION['nom']} 
               
                {/if}
    </div>
  </nav>
        
