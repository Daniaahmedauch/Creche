<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <title> ACTIVITY  </title>
</head>
<body>


  <!-- navbar -->

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
         

           </div>
       </div>
    </div>



  <?php 
  
  try
  {
    $bdd = new PDO('mysql:host=localhost;dbname=creche;charset=utf8','dania', '0000');
  }
  catch (Exception $e){
    die('Erreur : ' . $e->getMessage());
  }  

  ?>



  <table class="table table-hover">
    <thead>
      <th>Name of activity </th>
      <th>Type of activity </th>
      <th>Number max child </th>
     
    </thead>

    <?php 
    // require('deleteA.php');
    $reponse = $bdd->query('SELECT * FROM activity');
    while($donnees=$reponse->fetch())
    {
      echo 
      
    '<tr>
      <td>' . $donnees['activity_name'] . '</td>
      <td>' . $donnees['activity_type'] . '</td>
      <td>' . $donnees['activity_number_max_child'] .'</td>

      
      <td>
        <form method="post" class="deleteform">
          <input type="hidden" name="activity_id" value="'. $donnees['activity_id'] . '">
          <input type="submit" name="supprimerA" class="delete" value="supprimer">
        </form>
      </td>
      
      <td>
        <form method="post" class="">
          <input type="hidden" name="children_id" value="'. $donnees[''] . '">
          <input type="submit" name="modifier" class="modify" value="Modifier">
        </form>
      </td>
    </tr>' ;
    }

    ?>

  </table>


</body>
</html>
