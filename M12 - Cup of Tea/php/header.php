<!DOCTYPE html>

<html>

  <head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="./css/font-awesome.min.css">

    <link rel="stylesheet" href="./css/normalize.css">

    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/style2.css">

    <title><?php echo $title ; ?>Cup of Tea</title>

  </head>

  <body>

    <header>



      <p>Livraison offerte à partir de 65€ d'achat !</p>



      <nav>

        <ul>
      <li><a <?php if ($id == 1) print "class='active'"; ?> href="index.php"><img src="./img/logo.png"></a></li>

       <li class="basket"><p><a href="#"><span class="hidden">Mon panier </span><i class="fa fa-shopping-cart" aria-hidden="true"></i>42,00€</a></p></li>
     </ul>



        <ul>

          <li><a <?php if ($id == 2) print "class='active'"; ?> href="thes.php">thés</a></li>
          <li><a <?php if ($id == 3) print "class='active'"; ?> href="grandscrus.php">grands crus</a></li>
          <li><a <?php if ($id == 4) print "class='active'"; ?> href="accessoires.php">accessoires</a></li>
          <li><a <?php if ($id == 5) print "class='active'"; ?> href="epicerie.php">epicerie</a></li>

          <li><a <?php if ($id == 6) print "class='active'"; ?> href="histoire.php">notre histoire</a></li>

        </ul>

      </nav>

    </header>
