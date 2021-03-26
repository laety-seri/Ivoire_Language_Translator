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
        border-radius: 15px;
        padding: 30px;
      }
   

    </style>
<body>
  <header>
    <div class="row" style="margin-left: auto;">
    <a href="#"><img src="../admin/logo.png" alt="logo" height="60" width="60"></a>
    <h3 class="text-success text-sm"><a href="index.php"> IVOIRE <br> LANGUAGE <br> TRANSLATOR </a></h3>
    </div>
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
          </select> <br><br>
        </div>
    </div>
    <div class="row">
      <div class="col col-sm-4">
        <textarea class="textarea form-control" rows="5" cols="30"  name="champ1" id="champ1" onkeyup="check();"></textarea>
      </div>
      <div class="col col-sm-4" style="background-color: lightgrey;">
          <!-- <input type="submit" value=""  class="form-control-sm btn btn-success" onclick="reload();"> -->
          <button type="submit" name="Traduire" class="form-control btn"><i class="fas fa-exchange-alt"></i></button>

      </div> 
      <div class="col col-sm-4" style="background-color: white;">
        <div  id="champ1status">                    
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
    </div>
  </form> 
  <br><br>
</div>

</body>
</html>