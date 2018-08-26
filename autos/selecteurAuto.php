<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>420-219-SF</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
      i { margin-right: 10px; }
	  .navbar-inner h1 { color: white;  }
	  body { margin-top: 30px; }
	  .span1, .span2, .span3, .span4, .span5, .span6, 
	  .span7, .span8, .span9, .span10,.span11,.span12 { background-color: #ddd; border-radius: 5px; }
      .masquer { display: none; }
    </style>
  </head>

  <body>
<?php
  if(isset($_GET['modele'], $_GET['couleur'])){
    if($_GET['modele'] == 'ford'){
      $modele = 'Mustang GT';
      $sort = 'mustang';
    }
    elseif($_GET['modele'] == 'mercedes'){
      $modele = 'Mercedes AMG';
      $sort = 'amg';
    }
    elseif($_GET['modele'] == 'mazda'){
      $modele = 'Mazda 3';
      $sort = 'm3';
    }
    elseif($_GET['modele'] == 'honda'){
      $modele = 'Honda Fit';
      $sort = 'fit';
    }
    elseif($_GET['modele'] == 'chevrolet'){
      $modele = 'Chevrolet Spark';
      $sort = 'spark';
    }
    $couleur = $_GET['couleur'];
 
  }






?>
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <span class="label label-info">420-219-SF</span><h1>D&eacute;veloppement multimédia</h1>
        </div>
      </div>
    </div>
    <div class="container">
        <div class="row">
          <h1>Voici le véhicule que vous avez s&eacute;lectionné:</h1>
          <img src="<?= $sort . $couleur?>.png" height="439"/><br/>
          <h3>Mod&egrave;le: <?= $modele   ?></h3>
        </div>
        <div class="row">
          <hr/>
          <a href="form.html" class="btn btn-large btn-primary">Choisir un autre mod&egrave;le</a> 
        </div>
    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script>
	</script>
  </body>
</html>
