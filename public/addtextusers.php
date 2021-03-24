<?php session_start(); include('../admin/connection.php'); ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Ajouter un texte</title>
        <?php include('../admin/links.php') ?>
    </head>
    <body>
    <div class="container center-div">
	  
      <div class="container row d-flex flex-row justify-content-center mb-8">
	    <div class="admin-form shadow p-5">


      <form action="" method="POST" enctype="multipart/form-data">

          <center><h3>Soumettre une proposition traduction</h3></center><br>
          <div class="row">
          <div class="col form-group">
          <label class="font-weight-bold">Texte à traduire</label>
          <input type="text" class="form-control" id="texte1" placeholder="Saisir le texte" name="texte1" required>
          </div>

          <div class="col form-group">
          <label class="font-weight-bold">Langue d'origine</label>
          <select class="form-control" name ="langue_start" id ="langue_start" required>
          <option value="" >Sélectionner une langue</option>
            <?php
              $sql = "SELECT * FROM langues";
              $result = mysqli_query($con, $sql);
              while ($row = mysqli_fetch_array($result)) {
                echo '<option>'.$row['langue'].'</option>';
              }
            ?> 
          </select>
          </div>
          </div>

            <div class="row">
          <div class="col form-group">
          <label class="font-weight-bold">Traduction</label>
          <input type="text" class="form-control" id="texte2" placeholder="Saisir le texte" name="texte2" required>
          </div>

          <div class="col form-group">
          <label class="font-weight-bold">Langue de traduction</label>
          <select class="form-control" name ="langue_end" id ="langue_end" required>
          <option value="" >Sélectionner une langue</option>
            <?php
              $sql = "SELECT * FROM langues";
              $result = mysqli_query($con, $sql);
              while ($row = mysqli_fetch_array($result)) {
                echo '<option>'.$row['langue'].'</option>';
              }
            ?> 
          </select>
          </div>
          </div>

          <div class="row">
          <div class="col form-group">
            <label class="font-weight-bold">Ajouter un fichier audio</label>
            <input type="file" name="audio" id="audio"> 
          </div>
          </div>
          <input type="submit" name= "Enregistrer" class="btn bg-success text-dark" id="enregistrer" value="Enregistrer">
     </form>
   </div>
   </div> 
   </div>


<?php 

if(isset($_POST['Enregistrer'])){
  $texte1 = $_POST['texte1'];
  $langue_start = $_POST['langue_start'];
  $texte2 = $_POST['texte2'];
  $langue_end = $_POST['langue_end'];
  $date = date("Y-m-d h:i:s");
  $target_dir = "../daudios/";
  $target_file = $target_dir.basename($_FILES["audio"]["name"]);
  
  $sql = "INSERT INTO suggestion (texte1, langue_start, texte2, langue_end, audio, datec)
  VALUES ('$texte1', '$langue_start', '$texte2', '$langue_end', '$target_file', '$date')";

  if (move_uploaded_file($_FILES['audio']['tmp_name'], $target_file) )
  {
   echo "Audio saved" ;
  }

if (mysqli_query($con, $sql)) {
  echo '<script language="Javascript">';
  echo 'document.location.replace("./index.php")'; // -->
  echo ' </script>';

  echo "";
} else {
  echo "";
}

}else{
    echo "";
}

mysqli_close($con);

?>

</body>
</html>