<?php
session_start();
include("connection.php");

if (isset($_GET['id'])){

$id = $_GET['id'];
$query = "SELECT * FROM langues WHERE id = $id";
$result = mysqli_query($con, $query);
if (mysqli_num_rows($result) == 1) {
	$row = mysqli_fetch_array($result);
    $langue = $row['langue'];
	$date = date("Y-m-d h:i:s");
}
 
}

if (isset($_POST['Enregistrer'])){
    $id = $_GET['id'];
    $langue = $_POST['langue'];
	$date = date("Y-m-d h:i:s");

	$query = "UPDATE langues SET langue = '$langue', datec = '$date' WHERE id = $id";
	mysqli_query($con, $query);
	header("Location: dbd.php");

}
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Modifier une langue</title>
        <?php include('links.php') ?>
    </head>
    <body> <br><br><br>
        <div class="container center-div">
        
            <div class="container row d-flex flex-row justify-content-center mb-8">
                <div class="admin-form shadow p-5">

                    <form id="myForm" action="editlang.php?id=<?php echo $_GET['id']; ?>" method="POST" onsubmit="return checkall();">

                    <center><h3>Modifier une langue</h3></center><br>
                    <div class="row">
                        <div class="col form-group">
                        <label class="font-weight-bold">Langue</label>
                        <input type="text" value="<?php echo $langue; ?>" class="form-control" id="langue" placeholder="" name="langue" require onkeyup="checklang();">
                        <span id="languestatus"></span>
                        </div>
                    </div>
                    <input type="submit" name= "Modifier" class="btn bg-success text-dark" id="Enregistrer" value="Modifier">
                    </form>

                </div> 
            </div>

        </div>

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
            if(response=="<sm><font color = 'green'>Vous pouvez enregistrer cette nouvelle langue</sm>")	
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
