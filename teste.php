<!DOCTYPE html>
<html>
<head>
 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


  <title> Add activity  </title>
</head>
<body>


<div class="navbar navbar-inverse navbar-fixed-top navbar-custom">
      <div class="container">
        <a class="navbar-brand text-muted" href="#">Ribbit</a>
          <div class="collapse navbar-collapse">

        <ul class="nav navbar-nav">
        <li><a href="teste.php">HOME / add activity</a></li>
        <li><a href="index.php"> List of activity </a></li>
        <li><a href="tableinscription.php"> children folder </a></li>
        <li><a href="inscription.php"> Add a children  </a></li>
      </ul>
            </ul>

           </div>
       </div>
    </div>

<h3> Add a activity  </h3>

<?php
try
  {
    $bdd = new PDO('mysql:host=localhost;dbname=creche;charset=utf8',
      'dania', '0000');
  }
  catch (Exception $e)
  {
    die('Erreur : ' . $e->getMessage());
  }
// vérifie si tout les champs sont vides
  
  if(empty($_POST['activity_name'] && empty($_POST['activity_type'] && empty($_POST['activity_number_max_child']))))
  {
    echo "";
  }
// sinon on récupére les données saisies dans les inputs 
  else
  { 
    header('Location: activites.php');
    $activity_name = $_POST['activity_name'];
    $activity_type = $_POST['activity_type'];
    $activity_number_max_child = $_POST['activity_number_max_child'];
   
  }
  $bdd->query("INSERT INTO activity (activity_name, activity_type, activity_number_max_child)
    VALUES ('$activity_name','$activity_type','$activity_number_max_child')");
?>









<form method="POST">

  <p> Name of activity </p>
  <input type="text"  name="activity_name">
  <p> Type of activity  </p>
  <input type="text"  name="activity_type">
  <p> Number max child   </p>
  <input type="text" name="activity_number_max_child">
  
  

    <button type="submit" name="submit" value="Envoyer">Ajouter</button>


</form>




</body>
</html>