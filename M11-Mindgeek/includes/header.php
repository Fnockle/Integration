<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title><?php echo $title ; ?> - MindGeek</title>
  </head>
  <body>
    <header>
      <nav>
        <ul>
          <li><a href="index.php"><img src="./img/logo.png"></a></li>
          <li><a <?php if ($id == 2) print "class='active'"; ?> href="mutualise.php"><i class="fa fa-users fa-3x" aria-hidden="true"></i>Serveur Mutualisé</a></li>
          <li><a <?php if ($id == 3) print "class='active'"; ?> href="dedie.php"><i class="fa fa-user fa-3x" aria-hidden="true"></i>Serveur Dédié</a></li>
          <li><a <?php if ($id == 4) print "class='active'"; ?> href="cloud.php"><i class="fa fa-cloud fa-3x" aria-hidden="true"></i>Solution "Cloud"</a></li>
          <li><a <?php if ($id == 5) print "class='active'"; ?> href="contact.php"><i class="fa fa-envelope fa-3x" aria-hidden="true"></i>Contact</a></li>
        </ul>
      </nav>
    </header>
