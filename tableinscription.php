<!DOCTYPE html>
<html>
<head>   
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <meta charset="utf-8">

	<title> inscription </title>
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
       <a href=" teste.php">  VOIR   </a>

      <h4>  ACTIVITY </h4> 

        


        <table class="striped" class="responsive-table">
        
            <tr>
              <th> children id </th>
              <th> children firstname </th>
              <th> children lastname </th>
              <th> childredn birthday </th>
              <th> children adress </th>
              <th> children parents contact</th>
              <th> children remarks </th>

            </tr>


    
    
      <?php 
    // require('deleteA.php');
    $reponse = $bdd->query('SELECT * FROM children');
    while($donnees=$reponse->fetch())
    {
      echo 
    '<tr>
      <td>'.  $donnees['children_id']. '</td>
      <td>'.  $donnees['children_firstname'].'</td>
      <td>'.  $donnees['children_lastname'].'</td>
      <td>'.  $donnees['children_birthday'].'</td>
      <td>'.  $donnees['children_adress'].'</td>
      <td>'.  $donnees['children_parents_contact'].'</td>
      <td>'.  $donnees['children_remarks'].'</td>
    </tr>';
    }
    
    ?>
</table> 
</body>
</html>