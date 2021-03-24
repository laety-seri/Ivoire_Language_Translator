<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
    <title>Ajouter une langue</title>
    <?php include('links.php') ?>
    </head>
    <body> <br><br><br>
        <div class="container center-div">
            <div class="container row d-flex flex-row justify-content-center mb-8">
                <div class="admin-form shadow p-5">
                    <form id="formlang" action="" method="POST" onsubmit="return checkall();">
                        <center><h3>Enregistrer une langue</h3></center><br>
                        <div class="col form-group">
                        <input type="text" class="form-control" id="langue" placeholder="Saisir la langue" name="langue" required onkeyup="checklang();">
                        <span id="languestatus"></span>
                        </div>
                        <input type="submit" id="Enregistrer" value="Enregistrer" name="Enregistrer" class="btn btn-success">
                    </form>
                </div>
            </div>
        </div>

        <?php include('connection.php'); 

if(isset($_POST['Enregistrer'])){
  
    $langue = $_POST['langue'];
    $date = date("Y-m-d h:i:s");
    
    $sql = "INSERT INTO langues (langue, datec) VALUES ('$langue', '$date')";

    if(mysqli_query($con, $sql)) {
    echo '<script language="Javascript">';
            echo 'document.location.replace("./dbd.php")';
            echo '</script>';

        echo 'TEXTE ENREGISTRE';
    } else {
    echo "";
    }

}else{
    echo "";
    }
mysqli_close($con);

?>

<script>

function checklang()
{
var langue=document.getElementById( "langue" ).value;
    
if(langue)
{
    $.ajax({
        type: 'post',
        url: 'checkdata.php',
        data: {
        langue:langue,
        },
        success: function (response) {
            $( '#languestatus' ).html(response);
            if(response=="OK")	
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
        $( '#languestatus' ).html("");
        return false;
    }
}

function checkall()
{
    var languehtml=document.getElementById("languestatus").innerHTML;

    if((languehtml)=="<sm><font color = 'green'>Vous pouvez enregistrer cette nouvelle langue</sm>")
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