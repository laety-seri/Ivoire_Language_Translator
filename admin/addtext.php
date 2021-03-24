<?php
session_start();
include('connection.php'); ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Ajouter un texte</title>
        <?php include('links.php') ?>
    </head>
    <body> <br><br><br>
    <div class="container center-div">
	  
      <div class="container row d-flex flex-row justify-content-center mb-8">
	    <div class="admin-form shadow p-5">


      <form action="" method="POST" enctype="multipart/form-data" id="formtrad" onsubmit="return checkall();">

          <center><h3>Enregistrer un texte</h3></center><br>

          <div class="row">
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

          <div class="col form-group">
          <label class="font-weight-bold">Texte à traduire</label>
          <input type="text" class="form-control" id="texte1" placeholder="Saisir le texte" name="texte1" required>
          </div>

          </div>

            <div class="row">
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

          <div class="col form-group">
          <label class="font-weight-bold">Traduction</label>
          <input type="text" class="form-control" id="texte2" placeholder="Saisir le texte" name="texte2" required onkeyup="checktexte2();">
          <span id="texte2status"></span>
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


<?php include('connection.php');

if(isset($_POST['Enregistrer'])){
  $texte1 = $_POST['texte1'];
  $langue_start = $_POST['langue_start'];
  $texte2 = $_POST['texte2'];
  $langue_end = $_POST['langue_end'];
  $date = date("Y-m-d h:i:s");
  $target_dir = "../daudios/";
  $target_file = $target_dir.basename($_FILES["audio"]["name"]);

  
  
  $sql = "INSERT INTO data (texte1, langue_start, texte2, langue_end, audio, datec)
  VALUES ('$texte1', '$langue_start', '$texte2', '$langue_end', '$target_file', '$date')";

  if (move_uploaded_file($_FILES['audio']['tmp_name'], $target_file) )
  {
    if (mysqli_query($con, $sql)) {
      echo '<script language="Javascript">';
            echo 'document.location.replace("./dbd.php")'; // -->
            echo ' </script>';
    }

  } else {  echo "";  }

}else{ echo ""; }

mysqli_close($con);

?>

<script>

function checktexte2()
{
    var texte2=document.getElementById( "texte2" ).value;
        
    if(texte2)
    {
        $.ajax({
            type: 'post',
            url: 'checkdata.php',
            data: {
            texte2:texte2,
            },
            success: function (response) {
                $( '#texte2status' ).html(response);
                if(response=="<sm><font color = 'red'>Cette traduction existe déjà</sm>")	
                {
                    return true;	
                }
                else
                {
                    return false;	
                }
            }
        });
    }
        else
        {
            $( '#texte2status' ).html("");
            return false;
        }
}

function checkall()
{
    var texte1html=document.getElementById("texte2status").innerHTML;

    if((texte2html)=="<sm><font color = 'red'>Cette traduction existe déjà</sm>")
    {
        return true;
    }
    else
    {
        return false;
    }

}


</script>

</body>
</html>