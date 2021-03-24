<?php
session_start();
include("connection.php");

if (isset($_GET['id'])){

$id = $_GET['id'];
$query = "SELECT * FROM data WHERE id = $id";
$result = mysqli_query($con, $query);

  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
      $texte1 = $row['texte1'];
      $langue_start = $row['langue_start'];
      $texte2 = $row['texte2'];
      $langue_end = $row['langue_end'];
      $target_file = $row['audio'];
    $date = date("Y-m-d h:i:s");
  }
 
}

if (isset($_POST['Modifier'])){
    $id = $_GET['id'];
    $texte1 = $_POST['texte1'];
    $langue_start = $_POST['langue_start'];
    $texte2 = $_POST['texte2'];
    $langue_end = $_POST['langue_end'];
    $date = date("Y-m-d h:i:s");
    $target_dir = "../daudios/";
    $target_file = $target_dir.basename($_FILES["audio"]["name"]);
 
	$sql = "UPDATE data SET texte1 = '$texte1', langue_start = '$langue_start', texte2 = '$texte2', langue_end = '$langue_end', audio = '$target_file', datec = '$date' WHERE id = $id";

      if (move_uploaded_file($_FILES['audio']['tmp_name'], $target_file) )
      {
      echo "Audio saved" ;
      }

      if (mysqli_query($con, $sql)) {
        echo '<script language="Javascript">';
              echo 'document.location.replace("./dbd.php")'; // -->
              echo ' </script>';
      }

	header("Location: dbd.php");

}
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Modifier un texte</title>
        <?php include('links.php') ?>
    </head>
    <body>
    <div class="container center-div">
	  
      <div class="container row d-flex flex-row justify-content-center mb-8">
	    <div class="admin-form shadow p-5">


        <form id="myForm" action="edittext.php?id=<?php echo $_GET['id']; ?>" method="POST" enctype="multipart/form-data">

          <center><h3>Modifier un texte</h3></center><br>
          <div class="row">
          <div class="col form-group">
          <label class="font-weight-bold">Texte à traduire</label>
          <input type="text" value="<?php echo $texte1; ?>" class="form-control" id="texte1" placeholder="Saisir le texte" name="texte1">
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
          <input type="text" value="<?php echo $texte2; ?>" class="form-control" id="texte2" placeholder="Saisir le texte" name="texte2">
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
       <input type="submit" name= "Modifier" class="btn bg-success text-dark" id="Modifier" value="Modifier">
     </form>
   </div>
   </div> 
   </div>


  </body>
</html>
