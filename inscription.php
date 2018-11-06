<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <meta charset="utf-8">
  <title> activity page   </title>
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

  <h1> inscription </h1> 




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
  
  if(empty($_POST['children_firstname'] && empty($_POST['children_lastname'] && empty($_POST['children_birthday'] && empty($_POST['children_adress'] && empty($_POST['children_parents_contact'] && empty($_POST['children_remarks'])))))))
  {
    echo "";
  }
// sinon on récupére les données saisies dans les inputs 
  else
  { 
    header('Location: activites.php');
    $children_firstname = $_POST['children_firstname'];
    $children_lastname = $_POST['children_lastname'];
    $children_birthday = $_POST['children_birthday'];
    $children_adress = $_POST['children_adress'];
    $children_parents_contact = $_POST['children_parents_contact'];
    $children_remarks = $_POST['children_remarks'];

   
  }
  $bdd->query("INSERT INTO children (children_firstname, children_lastname, children_birthday, children_adress, children_parents_contact, children_remarks)
    VALUES ('$children_firstname','$children_lastname','$children_birthday, $children_adress, $children_parents_contact, $children_remarks')");
?>




<form method="POST" > 

<tr>
   
    <legend>  inscription  </legend>
  <p>
     <span> children firstname  </span>
     <input type="text" name="children_firstname">
 
    </p>

    <p>
        <span>  children lastname  </span>
        <input  name="children_lastname">
   
     
     <p> 
        <span id="commentaires">  children birthday  </span>  
        <input size ="39" type="text" name="children_birthday">
      
    
    </p>
      <p>
        <span id="commentaires">  children adress   </span>  
        <input size ="39" type="text" name="children_adress"> 
       </p>
       <p>
     
        <span id="commentaires">  children parents contact   </span>  
        <input size ="39" type="text" name="children_parents_contact">
       </p>
       <p>
        <span>  children remarks   </span>  </br>
        <input size ="39" type="text"name="children_remarks">
     
    </p>
       <button type="submit" name="submit" value="Envoyer">Ajouter</button>
       <a href="tableinscription.php">  tableau des inscrits </a>


  </tr>
</form>

    



</body>
</html>