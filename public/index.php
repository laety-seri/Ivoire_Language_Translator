<?php session_start(); include('../admin/connection.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Traduction</title>
    <?php include('../admin/links.php') ?>
    <style>
      .traduction{
        background-color: lightgrey;
        border-style: solid;
        border-width: 1px;
        border-color: black;
        text-align: center;
      }
      .form-group{
        margin-left: 30px;
      }
      .textarea {
        margin-left: 20px;
        resize: unset;
      }
      .tradwindow {
        margin-left: 600px;
        margin-bottom: 80px;
        background-color: white;
        border-style: solid;
        border-width: 2px;
        border-color: black;
        width: 400px;
        height: 100px;
      }

    </style>
    <body class="">

      <header>
          <center> <h3 class="text-success"><a href="userspage.php"> IVOIRE LANGUAGE TRANSLATOR </a></h3>
          <a href="#"><img src="../admin/logo.png" alt="logo" height="160" width="160"></a>
          </center>
      </header>
<!-- espace traduction  test-->
<div class="container traduction"> <br>
    <form action="" method="POST" enctype="multipart/form-data" onsubmit="checkall(); " >
    <div class="row">
        <div class="col col-sm-6 ">
        <select class="form-control" name ="langue_start" id ="langue_start">
          <option value="" class="" > Sélectionner la langue d'origine </option>
            <?php
              $sql = "SELECT * FROM langues";
              $result = mysqli_query($con, $sql);
              while ($row = mysqli_fetch_array($result)) {
                echo '<option>'.$row['langue'].'</option>';
              }
            ?> 
          </select>
        </div>
        <div class="col col-sm-6">
        <select class="form-control" name ="langue_end" id ="langue_end">
          <option value="" class="" > Sélectionner la langue de traduction </option>
            <?php
              $sql = "SELECT * FROM langues";
              $result = mysqli_query($con, $sql);
              while ($row = mysqli_fetch_array($result)) {
                echo '<option>'.$row['langue'].'</option>';
              }
            ?> 
          </select>
          <br><br>
        </div>
    </div>
    <div class="row">
        <div class="col col-sm-6">
            <textarea class="textarea" name="champ1" id="champ1" cols="50" rows="5" onkeyup="check();"></textarea>
        </div>
        <div class="col col-sm-6">

        </div>
    </div>
    <div class="row">
        <div class="col col-sm-6">
            <input type="submit" value="Traduire" name="Traduire" class="btn btn-success" onclick="reload();">
        </div>
    </div>
    </form>

    <div class="tradwindow" id="champ1status">
    <?php
    
    if (isset($_POST['Traduire'])) {

        $search_text = $_POST['champ1'];
        $langue_start = $_POST['langue_start'];
        $langue_end = $_POST['langue_end'];
        $ip = $_SERVER['REMOTE_ADDR'];

        $date = date("Y-m-d h:i:s");
        $sql = "INSERT INTO recherches (search_text, langue_start, langue_end, ip, date) VALUES ('$search_text','$langue_start','$langue_end', '$ip', '$date')";

        if (mysqli_query($con, $sql)) {

          $query = "SELECT * FROM data WHERE texte1 = '$search_text' AND langue_start = '$langue_start' AND langue_end = '$langue_end' ";
            $result = mysqli_query($con, $query);

            if($row = mysqli_fetch_array($result)) { ?>
                <div id="reponse"> 
                    <?php echo $row['texte2']?> <br>
                    <audio controls>
                    <source src="<?php echo $row['audio'] ?>" type="audio/mpeg">
                    </audio>
                </div>
            <?php } else { ?>
                <div>
                    <p> <font color = 'red'> Traduction non disponible <br> <a href="addtextusers.php">Soumettre une proposition de traduction</a></p>
                </div>
    <?php }}} ?>
    </div>
    </div>
<script>
  function check() {
    // ... ajouter la fonction ajax ... //

    var champ1=document.getElementById( "champ1" ).value;
        
    if(champ1)
    {
        $.ajax({
            type: 'POST',
            url: '../admin/checkdata.php',
            data: {
            champ1:champ1,
            },
            success: function (response) {
                $( '#champ1status' ).html(response);
                if(response == "")	
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
            $( '#champ1status' ).html("");
            return false;
        }
}

function checkall()
{
    var texte1html=document.getElementById("champ1status").innerHTML;

    if((champ1html) == "")
    {
        return true;
    }
    else
    {
        return false;
    }

}
function reload() {
  window.location.reload();
  return false;
}

</script>
</body>
</html>